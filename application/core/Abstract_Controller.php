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
									'KEY'=>'MAIN_MANAGE_PACK',
									'SUB_MENU'=> array(
											array(
												'NAME'=>'ประเภทโปรแกรม',
												'URL'=>'admin/package/category',
												'KEY'=>'CAT_PACK'
												)
											,array(
												'NAME'=>'จัดโปรแกรม',
												'URL'=>'admin/package',
												'KEY'=>'MANAGE_PACK'
												)
										)
								)
							);
		$this->html['active_menu'] = array();

	}

}


?>