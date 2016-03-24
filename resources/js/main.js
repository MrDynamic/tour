$(document).ready(function() { 
	loadPage("home");
}); 

// $.validator.setDefaults({
// 	submitHandler: function(form) {
		
// 		if(form.id =="userForm"){
// 			var formData = $('#userForm').serializeObject();
// 			callService("user/add",formData,refreshUserList);
// 		}else if (form.id=="nodeForm"){
// 			var formData = $('#nodeForm').serializeObject();
// 			callService("node/add",formData,refreshNodeList);
// 		}
		
// 	}
// });

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

function overlay(){
	$.blockUI({ css: { 
        border: 'none', 
        padding: '5px', 
        backgroundColor: '#000', 
        '-webkit-border-radius': '10px', 
        '-moz-border-radius': '10px', 
        opacity: .5, 
        color: '#fff' 
    } }); 
}
function callService(url,data,callback){ 
	 $.ajax({
		 	type:"POST",
			url:url,
			data:data,
			async: false,
		    cache: false,
		    contentType: false,
		    processData: false,
			success: function(response) {
			  	$.unblockUI(); 
			  	callback(response);
			  }
		  	,error: function (xhr, ajaxOptions, thrownError) {
		          alert(thrownError);
		          $.unblockUI();
		        }
		});
}
function loadPage(url){
	$.blockUI({ css: { 
        border: 'none', 
        padding: '5px', 
        backgroundColor: '#000', 
        '-webkit-border-radius': '10px', 
        '-moz-border-radius': '10px', 
        opacity: .5, 
        color: '#fff' 
    } }); 
	
	 $.ajax({
			url:url,
			async:true
			,success: function(response) {
			  	$("#page").html(response); 
			  	$.unblockUI();
			  }
     	,error: function (xhr, ajaxOptions, thrownError) {
             alert(thrownError);
             $.unblockUI();
           }
		});
}

function loadSubPage(url){ 
	var loader = "<div style=\"display: table;margin: 0 auto;\">";
	loader += "<img src=\"resources/images/loader.gif\" />";
	loader += "</div>";
	$("#sub_page").html(loader); 
	$.ajax({
			url:url,
			async:true
			,success: function(response) {
			  	$("#sub_page").hide().html(response).fadeIn(1500); 
			  	$.unblockUI();
			  }
		  	,error: function (xhr, ajaxOptions, thrownError) {
		          alert(thrownError);
		          $("#sub_page").html(""); 
		        }
		});
}