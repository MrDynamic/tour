<?php if (! defined('BASEPATH')) exit ('No direct script asscess allowed');

    function create_input($labelValue,$attributes){
		$result ='';
		$result .= OPEN_FORM_GROUP;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_input($attributes);
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_textarea($labelValue,$attributes){
		$result ='';
		$result .= OPEN_FORM_GROUP;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_textarea($attributes);
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_dropdown($labelValue,$name,$data,$attributes,$selected=''){
		$result ='';
		$result .= OPEN_FORM_GROUP;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_dropdown($name,$data,$selected,$attributes);
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_upload($labelValue,$attributes){
		$result ='';
		$result .= OPEN_FORM_GROUP;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_upload($attributes);
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_dropzone($labelValue,$formAttr,$hiddenFieldArr=array()){
		$result = "<form method='post' class='dropzone ' enctype='multipart/form-data' ";
		foreach($formAttr as $key=>$value){
			$result .=$key .'='.$value.' ';
		}
		$result .= "/>";
		
		foreach($hiddenFieldArr as $hiddenField){
		    $result .= "<input type='hidden' ";
    		foreach($hiddenField as $key=>$value){
    		    $result .= $key . "=" . $value.' ';
    		}
    		$result .= " />";
		}
		
		
		$result .= "<div class='dropzone-previews'></div>";
		$result .= "<div class='fallback form-group'>";
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= "<input name='file' type='file' multiple />";
		$result .= "</div>";
		$result .= "</form>";
		return $result;
	}
