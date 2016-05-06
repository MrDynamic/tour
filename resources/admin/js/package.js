$().ready(function() {
	$("#btnCancel").click(function(){
		window.location='admin/package';
	});
	
	$("#packageType").change(function(){
		refreshPictureList(this.value);
	});
});

function refreshPictureList(packageId){
	$('#hidePackageId').val(packageId);
	callService('admin/package/listPackagePicture',{'packageId':packageId},renderPictureList);
}


function deletePackagePicture(pictureId,picturePath){
	callService('admin/packagePicture/deletePackagePictureById',{'pictureId':pictureId,'picturePath':picturePath,'packageId':$("#hidePackageId").val()},refreshPictureList);
	
}


function removeUpload(id,path){ 
	var displayPostfix = '_display';
	var hiddenPostfix = '_hide';
	$("#"+id).show();
	$("#"+id + displayPostfix).remove();
	$("#"+id+hiddenPostfix).val(path);
}

function renderPictureList(response){
	$("#detail").html(response);
}

$("#formPackage").validate({
	rules: {
		    expire_date: {
		        greaterThan: ["#travelDate","Travel Date"]
		    },
		    tourProgram:{
		    	extension: "pdf",
		    	filesize:2097152
		    },
		    thumbnail:{
		    	filesize:2097152
		    },
		    price:{
		    	number:true
		    },
			discount:{
				number:true
			}
		},
	messages: { thumbnail: "File must be JPG, GIF or PNG, less than 2MB" },
	submitHandler: function() {
			overlay();
			// var formData = $("#formPackage").serializeObject();  
			var formData = new FormData($("#formPackage")[0]);
			callServiceWithContent($('#action').val(),formData,addPackageResponse);
		}

});


function addPackageResponse(response){
	if(response==1){
		alert('บันทึกข้อมูลเรียบร้อยแล้ว');
		window.location.reload();
	}else{
		alert('Save data fail');
	}
}


$.validator.addMethod('filesize', function(value, element, param) {
    // param = size (in bytes) 
    // element = element to validate (<input>)
    // value = value of the element (file name)
    return this.optional(element) || (element.files[0].size <= param) 
});

jQuery.validator.addMethod("greaterThan", function(value, element, params) { 
    if ($(params[0]).val() != '') {  
        if (!/Invalid|NaN/.test(new Date(value))) { 
            return new Date(value) > new Date($(params[0]).val());
        }    
        return isNaN(value) && isNaN($(params[0]).val()) || (Number(value) > Number($(params[0]).val()));
    };
    return true; 
},'Must be greater than {1}.');


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
 	init: function() {
 		var myDropzone = this;
 		$("#btnSubmitId").click(function (e) {
 			if(validateUpload(myDropzone)){
 				e.preventDefault();
 		 		e.stopPropagation();
 		 		myDropzone.processQueue();
 			}
	 		
 		});
 		myDropzone.on("complete", function (file) {
 			if (myDropzone.getUploadingFiles().length === 0 && myDropzone.getQueuedFiles().length === 0) {
 				$('div.dz-success').remove();
 				refreshPictureList($("#hidePackageId").val())
 			}
 		});
 	}
 }

 var validateUpload=function (myDropzone){
	 valid = true;
	 if($("#hidePackageId").val() == ""){
		 valid = false;	
		 $("#packageType").focus();
		 alert('Please Select Package');
	 }else if(myDropzone.files.length <1){
		 valid = false;
		 alert('Please Select File Upload');
	 }
	 return valid;
 }

