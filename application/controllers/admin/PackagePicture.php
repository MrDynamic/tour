<?php

class PackagePicture extends Abstract_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Package'=>'mPackage','M_PackagePicture'=>'mPackagePicture'));
    }

   public function index(){
       $this->setActiveMenu(MENU_MAIN_PACKAGE,MENU_PACKAGE_PICTURE);
       $formData['package'] = $this->generateSelectItems($this->mPackage->getDataSpecifyField('package_id as id,package_name as label'));
       $data['form'] = $this->load->view('admin/package/form_add_package_picture',$formData,true);
       $this->html['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
       $this->load->view(ADMIN_LAYOUT,$this->html);
   }
   
   public function add(){
       try {
           $this->log_debug('Add Picture');
           $this->log_debug('submit form >> '.$this->getArrayValue($this->input->post()));
           foreach($_FILES['file']['name'] as $index=>$name){
               log_message('debug', $name);
               $filename = $name;
               $folderName = dirname($_SERVER["SCRIPT_FILENAME"])."/resources/upload/package/";
               if(!file_exists($folderName.$filename)){
                   $title = explode(",",$filename)[0];
                   $path = $folderName.$filename;
                   move_uploaded_file($_FILES["file"]["tmp_name"][$index],$path);
                   $data = array(
                       'image_title'=>$title,
                       'package_id'=>$this->input->post("hidePackageId"),
                       'image_path'=>$path
                   );
                   $this->log_debug('insert data',$this->getArrayValue($data));
                   
                   $this->mPackagePicture->insert($data);
           
               }
           }
           
       } catch (Exception $e) {
           log_message('error', $e->getMessage());
       }
       
   }
}

?>