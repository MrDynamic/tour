<?php
abstract class Abstract_Controller extends CI_Controller {

	abstract function generateMenu();
	abstract function requiredLogin();

	function __construct()
	{
		parent::__construct();
		$this->requiredLogin();		
		$this->generateMenu();
	}

   function __destruct() {
		// $this->db->close();
   }

	protected function generatePDF($html,$fileName){
		$this->load->library('my_pdf');
		$this->my_pdf->pdf->WriteHTML($html);
		$this->my_pdf->pdf->Output($fileName, "D");
	}
   
   protected function deleteFile($path){
	   try{

		   $file = $this->getRealFolder($path);
		   if(file_exists($file)){
			   unlink($file);
		   }

	   } catch (Exception $e) {
		   $this->log_error($e->getMessage());
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

    protected function generateSelectItems($data,$unSelected="กรุณาเลือก"){
    	$result = array(''=>$unSelected);
    	if(isset($data)){
    		foreach($data as $value){
    			$result[$value->id] = $value->label;
    		}
    	}
    	return $result;
    }

	protected function generatePackageItems(){
		$this->load->model(array('M_Package'=>'package'));
		return $this->generateSelectItems($this->package->getDataSpecifyField('package_id as id,package_name as label'));

	}

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

}


class Main_Controller extends Abstract_Controller{

	protected $template;

	public function __construct()
	{
		parent::__construct();
	}

	protected function loadLayoutSidebar($content=array()){
		$this->load->view('layout_sidebar',$content);
	}

	protected function loadLayoutContent($content=array()){
		$this->load->view('layout_content',$content);
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

	public function generateMenu(){
		$this->template['title'] = "Ocharos 's tour";
		$this->template['form_login'] = $this->load->view('form_login',null,true);
		$this->template['header'] = $this->load->view('header',null,true);
		$this->template['form_cart'] = $this->load->view('form_cart',null,true);
		$this->template['nav_menu'] = $this->load->view('nav_menu',null,true);
		$this->template['footer'] = $this->load->view('footer',null,true);
		$this->template['form_contact'] = $this->load->view('form_contact',null,true);
	}

	public  function requiredLogin(){
		$methodAuthen = $this->config->item('required_user_data');
		$this->log_debug('config',print_r($methodAuthen,true));
		if(isset($this->router) && in_array($this->router->method,$methodAuthen)){
			$this->log_debug('check session',$this->router->method);
			$this->log_debug('session',print_r($this->session->userdata(),true));
			if(empty($this->session->userdata('user_id'))
				|| empty($this->session->userdata('username'))
				|| empty($this->session->userdata('role'))){
				$this->session->set_flashdata(array('message'=>'คุณไม่มีสิทธิ์เข้าใช้งานกรุณา login เข้าสู่ระบบ','redirectUrl'=>$this->router->class.'/'.$this->router->method));
				redirect('authen/login','refresh');
			}
		}
	}

}

/*
 *	Abstract Admin Controller
 *
 */


class Admin_Controller extends Abstract_Controller
{
	protected $template;

	public function __construct()
	{
		parent::__construct();
	}


	protected function getConfigUpload(){
		$config['upload_path'] = $this->getRealFolder(PATH);
		$config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
		$config['encrypt_name'] =true;
		$config['max_size']	= '2048';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->log_debug('upload config',print_r($config,true));
		return $config;
	}

	protected function resize($image_data) {
		$this->log_debug('resize image data',print_r($image_data,true));
		$this->load->library('image_lib');

		$config['image_library'] = 'gd2';
		$config['source_image']	= $image_data['full_path'];
		$config['maintain_ratio'] = false;
		$config['height']	= "600";
		$config['width'] = "800";
		$config['new_image'] = $this->getRealFolder(PATH);
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}

	public function generateMenu(){
		$this->template['slide_menu'] = array(
			array(
				'MENU_NAME'=>'ผลงาน',
				'KEY'=>MENU_MAIN_PORTFOLIO,
				'SUB_MENU'=> array(
					array(
						'NAME'=>'เพิ่มภาพผลงาน',
						'URL'=>'admin/portfolio',
						'KEY'=>MENU_PORTFOLIO
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
			),
			array(
				'MENU_NAME'=>'รายการ',
				'KEY'=>MENU_MAIN_ORDER,
				'SUB_MENU'=>array(
					array(
						'NAME'=>'รายการสั่งซื้อ',
						'URL'=>'admin/manageOrder',
						'KEY'=>MENU_ORDER
					),
					array(
						'NAME'=>'รายการจัดทัวร์',
						'URL'=>'admin/manageOrder/requestTour',
						'KEY'=>MENU_RQUEST_TOUR
					),
					array(
						'NAME'=>'รายการติดต่อ',
						'URL'=>'admin/contact',
						'KEY'=>MENU_CONTACT
					)

				)
			),
			array(
				'MENU_NAME'=>'รายงาน',
				'KEY'=>MENU_MAIN_REPORT,
				'SUB_MENU'=>array(
					array(
						'NAME'=>'รายงานการสั่งซื้อ',
						'URL'=>'admin/report',
						'KEY'=>MENU_REPORT_ORDER
					)
				)
			),
			array(
				'MENU_NAME'=>'สรุป',
				'KEY'=>MENU_MAIN_SUMARY,
				'SUB_MENU'=>array(
					array(
						'NAME'=>'สรุปยอดตามภูมิภาค',
						'URL'=>'admin/report/sumaryArea',
						'KEY'=>MENU_SUM_AREA
					)
				)
			),
			
		);
		$this->template['active_menu'] = array();

	}

	public function requiredLogin()
	{
		if(empty($this->session->userdata('user_id'))
			|| empty($this->session->userdata('username'))
			|| empty($this->session->userdata('role'))
			|| $this->session->userdata('role') != ADMIN_ROLE){
			$this->session->set_flashdata(array('message'=>'คุณไม่มีสิทธิ์เข้าใช้งานเนื่องจากไม่ใช่ admin กรุณา login เป็น admin','redirectUrl'=>'admin/'.$this->router->class.'/'.$this->router->method));
			redirect('authen/login','refresh');
		}
	}

	protected function setActiveMenu($mainName,$subName){
		$this->template['active_menu'] = array($mainName,$subName);
	}

	protected function loadTemplate($data=array()){
		$this->template['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
		$this->load->view(ADMIN_LAYOUT,$this->template);
	}

}


?>