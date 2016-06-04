<?php
	class Package extends Admin_Controller{
	    
		public function __construct(){
			parent::__construct();
			$this->load->model(array("M_PackageType"=>'mCat','M_Package'=>'mPackage','M_PackagePicture'=>'picture','M_Area'=>'area'));
		}

		public function index(){
			$page = empty($this->uri->segment(4))?1:$this->uri->segment(4);
            $this->loadPage(ACTION_ADD,array(),$page);
		}

		public function listPackagePicture(){
		   $packageId = $this->input->post('packageId');
		   $this->log_debug('package id',$packageId);
		   $pictureList['list'] = $this->picture->getDataSpecifyField('package_img_id,package_id,image_title,image_path',array('package_id'=>$packageId));
		   echo $this->load->view('admin/package/list_package_picture',$pictureList,true);
		}
		
		public function loadPage($action=ACTION_ADD,$formData=array(),$page=1){
		    $this->setActiveMenu(MENU_MAIN_PACKAGE,MENU_PACKAGE);
			$formData['areaType'] = $this->generateSelectItems($this->area->getDataSpecifyField('area_id as id,area_name as label'));
		    $formData['packageType'] = $this->generateSelectItems($this->mCat->getDataSpecifyField('package_type_id as id,package_type_name as label'));
		    $formData['action'] = $action;
			$this->log_debug('formdata',print_r($formData,true));


			$this->load->library('my_pagination');
			$pagingConfig = $this->my_pagination->initAdmin('admin/package/index',$this->mPackage->countByCriteria());
			$limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
			$data["paginationData"]   = $this->pagination;
			$data['list'] = $this->mPackage->getPackageList(array(),$limit);
		    $view['detail'] = $this->load->view('admin/package/list_package',$data,true);
		    $view['form'] = $this->load->view('admin/package/form_add_package',$formData,true);
			$this->loadTemplate($view);
		}
		
		
		public function view(){
		    try {
		        $packageId = $this->uri->segment(3);
		        $this->log_debug('Package Id',$packageId);
		        if(!empty($packageId)){
    		        
    		        $data = $this->mPackage->getDataSpecifyField("area_id,discount,package_type_id,package_id,package_name,package_desc,price,date_format(travel_date,'%Y-%m-%d') travel_date
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
						$this->resize($this->upload->data());
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
								  $this->deleteFile($this->input->post('tourProgram_hide'));
		                      }
		                  }
		              }
		        }
		        
		        if($response){
		            unset($packageData['packageId'],$packageData['tourProgram_hide'],$packageData['thumbnail_hide']);
		            $this->log_debug('update package data',print_r($packageData,true));
		            $response = $this->mPackage->update($packageData,array('package_id'=>$packageId));
		        }
		        
		       
		    } catch (Exception $e) {
		        $this->log_error($e->getMessage());
		        $response = false;
		    }
		    $this->log_debug("Update response",$response);
		    echo $response;
		}
		
		public function add(){
			$response = true;
			$this->log_debug('add');

			$this->load->library('upload', $this->getConfigUpload());

			if (!$this->upload->do_upload('thumbnail')){
				$response = false;
			}else{
				$this->log_debug('upload data thumbnail',print_r($this->upload->data(),true));
				$this->resize($this->upload->data());
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
					$packageData['expire_date'] = increaseDate(7,$this->input->post('travel_date'));
					$response = $this->mPackage->insert($packageData)==1;
					
				}

			}

			if(!$response){

				$this->deleteFile(getFilePath($pathPdf));
				$this->deleteFile(getFilePath($pathThumbnail));
			}
			echo $response;
		}

		public function delete(){
			$packageId = $this->uri->segment("4");
			if(!empty($packageId)){
				$this->mPackage->deleteByFlag(array('package_id'=>$packageId));
				$this->session->set_flashdata(array(EXEC_MSG=>STATUS_SUCCESS));
			}else{
				 $this->session->set_flashdata(array(EXEC_MSG=>ERROR_MSG));
			}
			redirect('admin/package','refresh');
		}

	}