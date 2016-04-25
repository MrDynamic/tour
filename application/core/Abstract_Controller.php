<?php
class Abstract_Controller extends CI_Controller {
	protected $template;

	function __construct()
	{
		parent::__construct();
		//-- Check Role
		$this->generateAdminMenu();
        $this->generateMenu();
	}

   function __destruct() {
		// $this->db->close();
   }
   
   protected function deleteFile($path){
       $file = $this->getRealFolder($path);
       if(file_exists($file)){
        unlink($file);
       }
   }
   
   protected function getRealFolder($path){
       $folderName = dirname($_SERVER["SCRIPT_FILENAME"]).$path;
//        if(!is_dir($folderName))
//        {
//            mkdir($folderName,0777,true);
//        }
       return $folderName;
   }
	
   protected function setContentWithSidePage($contentPage='',$data=array()){
        $this->template['menu_type'] = CONTENT_TYPE;
        $this->template['nav_menu'] = $this->load->view('nav_menu',$this->template,true);
        $this->template['sidebar'] = $this->load->view('user/sidebar_user',null,true);
        $this->template['content'] = $this->load->view($contentPage,$data,true);
    }
    
    protected function setContentPage($contentPage,$data=array()){
        $this->template['menu_type'] = CONTENT_TYPE;
        $this->template['nav_menu'] = $this->load->view('nav_menu',$this->template,true);
        $this->template['content'] = $this->load->view($contentPage,$data,true);
    }
   
	protected function setActiveMenu($mainName,$subName){
        $this->template['active_menu'] = array($mainName,$subName);
    }

    protected function generateSelectItems($data){
    	$result = array(''=>'กรุณาเลือก');
    	if(isset($data)){
    		foreach($data as $value){
    			$result[$value->id] = $value->label;
    		}
    	}
    	return $result;
    }

    protected function generateMenu(){
        $this->template['title'] = "Ocharos 's tour";
        $this->template['form_login'] = $this->load->view('form_login',null,true);
        $this->template['header'] = $this->load->view('header',null,true);
        $this->template['form_cart'] = $this->load->view('form_cart',null,true);
        $this->template['nav_menu'] = $this->load->view('nav_menu',null,true);
        $this->template['footer'] = $this->load->view('footer',null,true);
    }
    
 	protected function generateAdminMenu(){
		$this->template['slide_menu'] = array(
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
		$this->template['active_menu'] = array();

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
	
	protected function getAllProvince(){
	    $this->load->model('M_Province','mProvince');
	    return $this->mProvince->getDataSpecifyField('province_id id,province_name label');
	}
	
	protected function getAmphurByProvinceId($provinceId){
	    $this->log_debug('Province ID',$provinceId);
	    $this->load->model('M_Amphur','mAmphur');
	    return $this->mAmphur->getDataSpecifyField('amphur_id id,amphur_name label',array('province_id'=>$provinceId));
	}
	
	protected function getDistrictByAmphurId($amphurId){
	    $this->log_debug('Amphur ID',$amphurId);
	    $this->load->model('M_District','mDistrict');
	    return $this->mDistrict->getDataSpecifyField('district_id id,district_name label',array('amphur_id'=>$amphurId));
	}
	
	protected function log_debug($message,$value=''){
	    $className = $this->router->class;
	    $methodName = $this->router->method;
	    log_message('debug', "[$className > $methodName] $message  >> $value");
	}
	
	protected  function log_error($message){
	    $className = $this->router->class;
	    $methodName = $this->router->method;
	    log_message('error',"[$className > $methodName]  $message");
	}
	
	protected  function checkSession(){
	    if(empty($this->session->userdata('user_id')) 
	        || empty($this->session->userdata('username'))
	        || empty($this->session->userdata('role'))){
	        $this->session->set_flashdata('message','คุณไม่มีสิทธิ์เข้าใช้งานกรุณา login เข้าสู่ระบบ');
	        redirect('authen/login','refresh');
	    }
	}

}


?>