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
       log_message("debug","Upload File");
       log_message("debug",print_r($this->input->post()));
       foreach($_FILES['file']['name'] as $index=>$name){
            log_message('debug', $name);
            $filename = $name;
            $folderName = dirname($_SERVER["SCRIPT_FILENAME"])."/resources/upload/package/";
            if(!file_exists($folderName.$filename)){
                $path = $folderName.$filename;
                move_uploaded_file($_FILES["file"]["tmp_name"][$index],$path);
                $data = array(
                    'package_id'=>$this->input->post("hidePackageId"),
                    'image_path'=>$path
                );
                $this->mPackagePicture->insert($data);
                
            }
       }
   }
}

?>