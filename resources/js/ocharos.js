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
	
	$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
	    $("#success-alert").alert('close');
	});
	
	$("#error-alert").fadeTo(2000, 500).slideUp(500, function(){
	    $("#error-alert").alert('close');
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