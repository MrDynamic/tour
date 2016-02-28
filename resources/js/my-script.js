$().ready(function() {
  $("#formPackage").validate({
  	submitHandler: function() {
				var formData = $("#formPackage").serializeArray();
				var url = base_url + "admin/package/category/save";
				callService(url,formData,test);
			}
	});

});

function test(){
	
}

$.fn.serializeObject = function()
{   var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

function loadPage(url){
	overlay(true);
	$.ajax({
		url:url,
		success: function(response){
			$("#page").html(response);
			overlay(false);
		},
		error:function(xhr,ajaxOptions,thrownError){
			alert(thrownError);
			overlay(false);
		}
	});
}

function callService(url,data,callback){
	 overlay(true);
	 $.ajax({
		 	type:"POST",
			url:url,
			data:data,
			async:true,
			success: function(response) { $("#errorDetail").html(response);
			  	overlay(false);
			  	callback();
			  }
		  	,error: function (xhr, ajaxOptions, thrownError) {
		          alert(thrownError);
		          overlay(false);
		        }
		});
}


function overlay(show){
	if(show){
		$.blockUI({ css: 
			{ 
		        border: 'none', 
		        padding: '5px', 
		        backgroundColor: '#000', 
		        '-webkit-border-radius': '10px', 
		        '-moz-border-radius': '10px', 
		        opacity: .5, 
		        color: '#fff' 
	    	} 
		}); 
	}else{
		$.unblockUI();
	}
}