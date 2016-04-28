<?php
	class Package extends Abstract_Controller{
	    
		public function __construct(){
			parent::__construct();
			$this->load->model(array("M_PackageType"=>'mCat','M_Package'=>'mPackage','M_PackagePicture'=>'picture'));
		}

		public function index(){
            $this->loadPage();
		}

		public function listPackagePicture(){
		   $packageId = $this->input->post('packageId');
		   $this->log_debug('package id',$packageId);
		   $pictureList['list'] = $this->picture->getDataSpecifyField('package_img_id,package_id,image_title,image_path',array('package_id'=>$packageId));
		   echo $this->load->view('admin/package/list_package_picture',$pictureList,true);
		}
		
		public function loadPage($action=ACTION_ADD,$formData=array()){
		    $this->setActiveMenu(MENU_MAIN_PACKAGE,MENU_PACKAGE);
		    $formData['packageType'] = $this->generateSelectItems($this->mCat->getDataSpecifyField('package_type_id as id,package_type_name as label'));
		    $formData['action'] = $action;
		    $data['list'] = $this->mPackage->getPackageList();
		    $view['detail'] = $this->load->view('admin/package/list_package',$data,true);
		    $view['form'] = $this->load->view('admin/package/form_add_package',$formData,true);
		    
		    $this->template['body'] = $this->load->view(MAIN_CONTAINER,$view,true);
		    $this->load->view(ADMIN_LAYOUT,$this->template);
		}
		
		
		public function view(){
		    try {
		        $packageId = $this->uri->segment(3);
		        $this->log_debug('Package Id',$packageId);
		        if(!empty($packageId)){
    		        
    		        $data = $this->mPackage->getDataSpecifyField("package_type_id,package_id,package_name,package_desc,price,date_format(travel_date,'%Y-%m-%d') travel_date
    		            ,date_format(expire_date,'%Y-%m-%d') expire_date,pdf_path,thumbnail",array('package_id'=>$packageId));
    		        if($data != null){
    		            $editData['editData'] = $data[0];
    		            $this->loadPage(ACTION_EDIT,$editData);
    		        }else{
    		            $this->loadPage(ACTION_ADD);
    		        }
    		        
		        }else{
		            $this->loadPage(ACTION_ADD);
		        }
		        
		    } catch (Exception $e) {
		        $this->log_error($e->getMessage());
		    }
		}
		
		public function update(){
		    $response = true;
		    $this->log_debug("package id",$this->input->post('packageId'));
		    $this->log_debug("submit data",print_r($this->input->post(),true));
		    try {
		        $packageId = $this->input->post('packageId');
		        $packageData = $this->input->post();
		        $this->load->library('upload', $this->getConfigUpload());
		        
		        //-- Thumbnail
		        if($this->input->post('thumbnail_hide') != ""){
		            if (!$this->upload->do_upload('thumbnail')){
		              $response = false;
		            }else{
		                $response = true;
		                $packageData['thumbnail'] = $this->upload->data()['file_name'];
		                if(null != $this->input->post('thumbnail_hide') && $this->input->post('thumbnail_hide') != ""){
		                    $this->log_debug('old thumbnail',$this->input->post('thumbnail_hide'));
		                    $this->deleteFile($this->input->post('thumbnail_hide'));
		                }
		                
		            }
		        }
		        
		        //-- Tour Program
		        if($response){
		              if($this->input->post('tourProgram_hide') != ''){
		                  if(!$this->upload->do_upload('tourProgram')){
		                      $response = false;
		                  }else{
		                      $response = true;
		                      $packageData['pdf_path'] = $this->upload->data()['file_name'];
		                      
		                      //-- remove old file
		                      if(null != $this->input->post('tourProgram_hide') && $this->input->post('tourProgram_hide') != ""){
		                          unlink($this->input->post('tourProgram_hide'));
		                      }
		                  }
		              }
		        }
		        
		        if($response){
// 		            $idx = array_search('packageId',array_keys($packageData));
// 		            $this->log_debug("packageId index",$idx);
		            unset($packageData['packageId'],$packageData['tourProgram_hide'],$packageData['thumbnail_hide']);
		            $this->log_debug('update package data',print_r($packageData,true));
		            $response = $this->mPackage->update($packageData,array('package_id'=>$packageId));
		        }
		        
		       
		    } catch (Exception $e) {
		        $this->log_error($e->getMessage());
		        $response = false;
		    }
		    $this->log_debug("Update response",$response);
		    return $response;
		}
		
		private function getConfigUpload(){
		    $config['upload_path'] = $this->getRealFolder(PATH);
		    $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
		    $config['encrypt_name'] =true;
		    $config['max_size']	= '2048';
		    $config['max_width']  = '1024';
		    $config['max_height']  = '768';
		    $this->log_debug('upload config',print_r($config,true));
		    return $config;
		}
		
		public function add(){
			$response = true;
			$this->log_debug('add');
			try
	        {
			    $pathThumbnail = '';
				$pathPdf = '';

				$this->load->library('upload', $this->getConfigUpload());
// 				$this->load->library('form_validation');
				
// 				$this->form_validation->set_rules('package_type_id', 'Package Type', 'trim|required');
// 				$this->form_validation->set_rules('package_name','Package Name','trim|required');
				
// 				$this->log_debug('data thumbnail',print_r($_FILES['thumbnail'],true));
// 				if (empty($_FILES['thumbnail']['name']))
// 				{
// 				    $this->form_validation->set_rules('thumbnail','Thumbnail','trim|required');
// 				}
				
// 				if ($this->form_validation->run() == FALSE){
// 				    $this->loadPage();
// 				}else{
				    
// 				}
				
				if (!$this->upload->do_upload('thumbnail')){
					$response = false;
				}else{
				    $this->log_debug('upload data thumbnail',print_r($this->upload->data(),true));
					$pathThumbnail = $this->upload->data()['file_name'];
					if($this->upload->do_upload('tourProgram')){
					    $this->log_debug('upload data pdf',print_r($this->upload->data(),true));
						$pathPdf = $this->upload->data()['file_name'];

						$packageData = $this->input->post();
						unset($packageData['packageId']);
						unset($packageData['tourProgram_hide']);
						unset($packageData['thumbnail_hide']);
						
						$packageData['thumbnail'] = $pathThumbnail;
						$packageData['pdf_path'] = $pathPdf;
						$this->log_debug('insert data',print_r($packageData,true));
						$response = $this->mPackage->insert($packageData);

					}

				}
	             
	        }
	        catch(Exception $err)
	        {
	            $this->log_error("error",$err->getMessage());
	            $response = false;
	        }
			echo $response;
		}

		public function uploadThumbnail(){
			
		}
		
	}