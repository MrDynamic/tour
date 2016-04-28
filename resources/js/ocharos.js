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
	
	$("#form-register").validate();
	
	$("#btnReserve").click(function(){
		var qty =$("#reserveQty").val();
		var packageId = $("#packageId").val();
		var price = $("#price").val();
		var packageName = $("#packageName").val();
		var thumbnail = $("#thumbnail").val();
		var data = {'id':packageId,'qty':qty,'price':price,'name':packageName,'thumbnail':thumbnail};
		alert(packageId + ',' + price + ',' + packageName);
		callService('user/addToCart',data,function(response){
			window.history.back();	
		});
	});
	
}); 



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