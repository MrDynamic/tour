$(document).ready(function() { 
	$("#provinceId").change(function(){
		$("#amphurId").html(generatePleaseSelect());
		callService('user/generateAmphur',{"provinceId":$('#provinceId').val()},generateAmphur);
	});
	
	$("#amphurId").change(function(){
		$("#districtId").html(generatePleaseSelect());
		callService('user/generateDistrict',{'amphurId':$('#amphurId').val()},generateDistrict);
	});

	$("#btnCancel").click(function(){
		window.location = $('#cancelPage').val();
	});
	
	$("#form-register").validate({
		rules: {
			password1: {minlength: 6 },
            passwordConfirm: {minlength: 6,equalTo:"#password1"},
            phone:{number:true,minlength:10},
            postalcode:{number:true,minlength:5}
          }
	});
	
	$("#btnReserve").click(function(){
		var qty =$("#reserveQty").val();
		var packageId = $("#packageId").val();
		var price = $("#price").val();
		var packageName = $("#packageName").val();
		var thumbnail = $("#thumbnail").val();
		var data = {'id':packageId,'qty':qty,'price':price,'name':packageName,'thumbnail':thumbnail};
		callService('order/addToCart',data,function(response){
			window.history.back();	
		});
	});
	
	$("#formCheckout").validate();
	
	$("#form-changePassword").validate({
		rules:{
			newPassword:{minlength:6},
			passwordConfirm:{minlength:6,equalTo:"#newPassword"}
		}
	});
	
	$("#success-alert").fadeTo(3000, 500).slideUp(1000, function(){
	    $("#success-alert").alert('close');
	});
	
	$("#error-alert").fadeTo(3000, 500).slideUp(1000, function(){
	    $("#error-alert").alert('close');
	});

    //
    $("#packageAreaId").change(function(){
        var areaId = 0;
        if(this.value != ''){
            areaId = this.value;
        }
        var packageTypeId = $("#packageTypeId").val()!=''?$("#packageTypeId").val():0;
        // var url = 'package/index/0/' + areaId + "/" + packageTypeId;
        var url = 'package/index?areaId='+areaId + "&packageTypeId=" + packageTypeId;
        window.location = url;
    });

    $("#packageTypeId").change(function(){
        var packageTypeId = 0;
        if(this.value != ''){
            packageTypeId = this.value;
        }
        var areaId = $("#packageAreaId").val()!=''?$("#packageAreaId").val():0;
        var url = 'package/index?areaId=' + areaId + "&packageTypeId=" + packageTypeId;
        window.location = url;
    });

    $("#package-paging > a").click(function(){
        var url = $(this).attr('href');
        var areaId = $("#packageAreaId").val() == ""?0:$("#packageAreaId").val();
        var packageTypeId = $("#packageTypeId").val() == ""?0:$("#packageTypeId").val();
        url = url + "?areaId=" + areaId + "&packageTypeId=" +  packageTypeId;
        window.location = url;
        return false;
    });

    $("#form-requestTour").validate({
        rules:{
            phone:{number:true,minlength:10}
        }
    });

	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});

}); 


function removeCart(rowId){
	callService('order/removeCart',{'rowId':rowId},function(){
		window.location = 'order/viewCart';
	});
}

function callService(url,data,callback){ 
	 $.ajax({
		 	type:"POST",
			url:url,
			data:data,
//			dataType:'json',
			async: false,
		    cache: false,
			success: function(response) {
			  	callback(response);
			  }
		  	,error: function (xhr, ajaxOptions, thrownError) {
		          alert(thrownError);
		        }
		});
}

function generatePleaseSelect(){
	return '<option value="">กรุณาเลือก</option>';
}

function generateDistrict(response){
	$("#districtId").html(response);
}

function generateAmphur(response){
	$("#amphurId").html(response);
}