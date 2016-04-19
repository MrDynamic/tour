$(document).ready(function() { 
	$("#provinceId").change(function(){
		$("#amphurId").html(generatePleaseSelect());
		callService('authen/generateAmphur',{"provinceId":$('#provinceId').val()},generateAmphur);
	});
	
	$("#amphurId").change(function(){
		$("#districtId").html(generatePleaseSelect());
		callService('authen/generateDistrict',{'amphurId':$('#amphurId').val()},generateDistrict);
	});
	
//	$("#btnLogin").click(function(){
//		alert('btnlogin');
//	});
	
	$("#form-register").validate();
	
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