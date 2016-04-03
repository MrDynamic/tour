$().ready(function() {
});

$("#formPackage").validate({
	rules: {
		    expire_date: {
		        greaterThan: ["#travelDate","Travel Date"]
		    },
		    tourProgram:{
		    	extension: "pdf"
		    },
		    price:{
		    	number:true
		    }
		},
	submitHandler: function() {
			overlay();
			// var formData = $("#formPackage").serializeObject();  
			var formData = new FormData($("#formPackage")[0]);
			callService($('#action').val(),formData,addPackageResponse);
		}

});


function addPackageResponse(response){
	alert("response callback=" +response);
}


jQuery.validator.addMethod("greaterThan", function(value, element, params) { 
    if ($(params[0]).val() != '') {  
        if (!/Invalid|NaN/.test(new Date(value))) { 
            return new Date(value) > new Date($(params[0]).val());
        }    
        return isNaN(value) && isNaN($(params[0]).val()) || (Number(value) > Number($(params[0]).val()));
    };
    return true; 
},'Must be greater than {1}.');

$('#packageId').change(function(){
	$('#hidePackageId').val(this.value);
});

 Dropzone.options.packagePicture = { 
 	// set following configuration
 	autoProcessQueue: false,
 	uploadMultiple: true,
 	parallelUploads: 10,
 	maxFiles: 10,
 	maxFilesize:2,
 	addRemoveLinks: true,
 	previewsContainer: ".dropzone-previews",
 	dictRemoveFile: "Remove",
 	dictCancelUpload: "Cancel",
 	dictDefaultMessage: "Drop the images you want to upload here",
 	dictFileTooBig: "Image size is too big. Max size: 2mb.",
 	dictMaxFilesExceeded: "Only 10 images allowed per upload.",
 	acceptedFiles: ".jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF",
 	// The setting up of the dropzone
 	init: function() {
 		var myDropzone = this;
 		// Upload images when submit button is clicked.
 		$("#btnSubmitId").click(function (e) {
 			if(validateUpload(myDropzone)){
 				e.preventDefault();
 		 		e.stopPropagation();
 		 		myDropzone.processQueue();
 			}
	 		
 		});
 		// Refresh page when all images are uploaded
 		myDropzone.on("complete", function (file) { alert(file);
 			if (myDropzone.getUploadingFiles().length === 0 && myDropzone.getQueuedFiles().length === 0) {
 				window.location.reload();
 			}
 		});
 	}
 }

 var validateUpload=function (myDropzone){
	 valid = true;
	 if($("#hidePackageId").val() == ""){
		 valid = false;	
		 $("#packageId").focus();
		 alert('Please Select Package');
	 }else if(myDropzone.files.length <1){
		 valid = false;
		 alert('Please Select File Upload');
	 }
	 return valid;
 }

