<?php

class PackagePicture extends Abstract_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Package'=>'mPackage','M_PackagePicture'=>'picture'));
    }

   public function index(){
       $this->setActiveMenu(MENU_MAIN_PACKAGE,MENU_PACKAGE_PICTURE);
       $formData['package'] = $this->generateSelectItems($this->mPackage->getDataSpecifyField('package_id as id,package_name as label'));
       $data['form'] = $this->load->view('admin/package/form_add_package_picture',$formData,true);
       $this->template['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
       $this->load->view(ADMIN_LAYOUT,$this->template);
   }
   
   public function add(){
       try {
           $this->log_debug('Add Picture');
           $this->log_debug('submit form',print_r($this->input->post(),true));
           foreach($_FILES['file']['name'] as $index=>$name){
               $this->log_debug('file',print_r($_FILES,true));
               $fileAttr = explode(".",$name);
               $rename = md5($fileAttr[0]);
               $path = $this->getRealFolder(PATH.$rename.'.'.$fileAttr[1]);
               $this->log_debug('path',$path);
               move_uploaded_file($_FILES["file"]["tmp_name"][$index],$path);
               $data = array(
                   'image_title'=>$fileAttr[0],
                   'package_id'=>$this->input->post("hidePackageId"),
                   'image_path'=>$rename.'.'.$fileAttr[1]
               );
               
               $this->picture->insert($data);
           
           }
           
       } catch (Exception $e) {
           log_message('error', $e->getMessage());
       }
       
   }
   
   public function deletePackagePictureById(){
       $this->log_debug('delete data',print_r($this->input->post(),true));
       $picturePath = $this->input->post('picturePath');
       $pictureId = $this->input->post('pictureId');
       $packageId = $this->input->post('packageId');
       $this->deleteFile(getFilePath($picturePath));
       $this->picture->delete(array('package_img_id'=>$pictureId));
       echo $packageId;
       
   }
}
