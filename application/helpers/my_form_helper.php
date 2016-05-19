<?php if (! defined('BASEPATH')) exit ('No direct script asscess allowed');

    function create_input($labelValue,$attributes,$openform=OPEN_FORM_GROUP){
		$result ='';
		$result .= $openform;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_input(setAttributeForm($attributes));
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_output($label,$value){
		$result ='<div class="row sep-bottom-xs">';
		$result .= '<div class="col-lg-2 header-label">'.$label.'</div>';
		$result .= '<div class="col-lg-10">'.$value.'</div>';
		//$result .= '<div class="col-lg-10">&nbsp;</div>';
		$result .='</div>';
		return $result;
	}
	
	function setAttributeForm($attr){
	    $attr['class'] = 'form-control';
	    return $attr;
	}
	
	function create_password($labelValue,$attributes,$labelAttr=array(),$openform=OPEN_FORM_GROUP){
	    $result ='';
	    $result .= $openform;
	    $result .= form_label($labelValue[0],$labelValue[1],$labelAttr);
	    $result .= form_password(setAttributeForm($attributes));
	    $result .= CLOSE_FORM_GROUP;
	    return $result;
	}
	

	function create_textarea($labelValue,$attributes){
		$result ='';
		$result .= OPEN_FORM_GROUP;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_textarea(setAttributeForm($attributes));
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_dropdown($labelValue,$name,$data,$attributes,$selected='',$openform=OPEN_FORM_GROUP){
		$result ='';
		$result .= $openform;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_dropdown($name,$data,$selected,setAttributeForm($attributes));
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_upload($labelValue,$attributes,$hidden=false){
		$result ='';
		if($hidden){
		    $result .=OPEN_FORM_GROUP_HIDDEN;
		}else{
		    $result .= OPEN_FORM_GROUP;
		}
		
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_upload(setAttributeForm($attributes));
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	function create_link_icon($labelValue,$imgAttr,$path,$uploadAttrs){
	    $result = '';
	    $uploadId = $uploadAttrs['id'];
	    $result .= OPEN_FORM_GROUP;
	    $result .= form_label($labelValue[0],$labelValue[1]);
	    $result .= "<div style='margin:10px;' id=$uploadId"."_display>";
	    $result .= anchor($path,img($imgAttr),array('target'=>'_blank'));
	    $result .= '<div style="margin:10px;">';
	    $result .= anchor("#",'Edit',array('onClick'=>"javascript:removeUpload('$uploadId','$path');return false;"));
	    $result .= '</div>';
	    $result .= '</div>';
	    $result .= "<div style='display:none;' id=$uploadId>";
	    $result .= form_upload($uploadAttrs);
	    $result .= '</div>';
	    $result .= CLOSE_FORM_GROUP;
	    return $result;
	}
	
	function create_thumbnail($labelValue,$imgAttr,$path,$uploadAttrs){
	    $imgAttr['width'] = '100px';
	    $uploadId = $uploadAttrs['id'];
	    $result = '';
	    $result .= OPEN_FORM_GROUP;
	    $result .= form_label($labelValue[0],$labelValue[1]);
	    $result .= "<div style='margin:10px;' id=$uploadId"."_display>";
	    $result .= img($imgAttr);
	    $result .= '<div style="margin:10px;">';
	    $result .= anchor("#",'Edit',array('onClick'=>"javascript:removeUpload('$uploadId','$path');return false;"));
	    $result .= '</div>';
	    $result .= '</div>';
	    $result .= "<div style='display:none;' id=$uploadId>";
	    $result .= form_upload($uploadAttrs);
	    $result .= '</div>';
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
	
	function create_error_message($message){
	    $result =  '<div role="alert" id="error-alert" class="alert alert-danger alert-dismissible">';
	    $result .= ' <button type="button" data-dismiss="alert" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
	    $result .=  $message;
	    $result .=  '</div>';
	    return $result;
	}
	
	function create_success_message($message){
	    $result =  '<div role="alert" id="success-alert" class="alert alert-danger alert-dismissible">';
	    $result .= ' <button type="button" data-dismiss="alert" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
	    $result .=  $message;
	    $result .=  '</div>';
	    $result .= '<script>$(".close").click();</script>';
	    return $result;
	}
	
	function checkNotNullEmpty($var){
	    return (isset($var) && !empty($var));
	}
	
	function getFilePath($fileName,$isUrl=false){
	    return ($isUrl)?site_url(PATH.$fileName):PATH.$fileName;
	}
