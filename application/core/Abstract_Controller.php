<?php
class Abstract_Controller extends CI_Controller {
	protected $html;

	function __construct()
	{
		parent::__construct();
		$this->generateMenu();
	}

   function __destruct() {
		// $this->db->close();
   }
	
	function setActiveMenu($mainName,$subName){
        $this->html['active_menu'] = array($mainName,$subName);
    }

    function generateSelectItems($data){
    	$result = array(''=>'กรุณาเลือก');
    	if(isset($data)){
    		foreach($data as $value){
    			$result[$value->id] = $value->label;
    		}
    	}
    	return $result;
    }

 	function generateMenu(){
		$this->html['slide_menu'] = array(
							array(
									'MENU_NAME'=>'สถานที่แนะนำ',
									'KEY'=>'MAIN_',
									'SUB_MENU'=> array(
											array(
												'NAME'=>'ประเภทโปรแกรม',
												'URL'=>'admin/package/category',
												'KEY'=>'CAT_PACK'
												)
											,array(
												'NAME'=>'จัดโปรแกรม',
												'URL'=>'#',
												'KEY'=>'MANAGE_PACK'
												)
										)
								),
							array(
									'MENU_NAME'=>'จัดโปรแกรม',
									'KEY'=>MENU_MAIN_PACKAGE,
									'SUB_MENU'=> array(
											array(
												'NAME'=>'ประเภทโปรแกรม',
												'URL'=>'admin/package/category',
												'KEY'=>MENU_PACKAGE_TYPE
												)
											,array(
												'NAME'=>'โปรแกรม',
												'URL'=>'admin/package',
												'KEY'=>MENU_PACKAGE
												)
    									    ,array(
    									        'NAME'=>'ภาพโปรแกรม',
    									        'URL'=>'admin/packagePicture',
    									        'KEY'=>MENU_PACKAGE_PICTURE
    									       )
										)
								)
							);
		$this->html['active_menu'] = array();

	}
	/*
		menu_id
		menu_type
		menu_name
		menu_key
		menu_url
		parent_id
		delete_flag
	
	*/

}


?>