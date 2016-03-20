Dropzone.options.thumbnail = { 
	// set following configuration
	autoProcessQueue: false,
	uploadMultiple: true,
	parallelUploads: 10,
	maxFiles: 10,
	addRemoveLinks: true,
	previewsContainer: ".dropzone-previews",
	dictRemoveFile: "Remove",
	dictCancelUpload: "Cancel",
	dictDefaultMessage: "Drop the images you want to upload here",
	dictFileTooBig: "Image size is too big. Max size: 10mb.",
	dictMaxFilesExceeded: "Only 10 images allowed per upload.",
	acceptedFiles: ".jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF",
	// The setting up of the dropzone
	init: function() {
		var myDropzone = this;
		// Upload images when submit button is clicked.
		$("#submit-all").click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		myDropzone.processQueue();
		});
		// Refresh page when all images are uploaded
		myDropzone.on("complete", function (file) {
			if (myDropzone.getUploadingFiles().length === 0 && myDropzone.getQueuedFiles().length === 0) {
				window.location.reload();
			}
		});
	}
}
