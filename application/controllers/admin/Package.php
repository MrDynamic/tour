<?php
	class Package extends Abstract_Controller{
		
	    private $path="/resources/upload/package/";
	    
		function __construct(){
			parent::__construct();
			$this->load->model(array("M_PackageType"=>'mCat','M_Package'=>'mPackage'));
		}

		function index(){
            $this->loadPage();
		}

		function loadPage($action=ACTION_ADD,$formData=array()){
		    $this->setActiveMenu(MENU_MAIN_PACKAGE,MENU_PACKAGE);
		    $formData['packageType'] = $this->generateSelectItems($this->mCat->getDataSpecifyField('package_type_id as id,package_type_name as label'));
		    $formData['action'] = $action;
		    $data['list'] = $this->mPackage->getPackageList();
		    $view['detail'] = $this->load->view('admin/package/list_package',$data,true);
		    $view['form'] = $this->load->view('admin/package/form_add_package',$formData,true);
		    
		    $this->template['body'] = $this->load->view(MAIN_CONTAINER,$view,true);
		    $this->load->view(ADMIN_LAYOUT,$this->template);
		}
		
		public function refreshPage(){
		    
		}
		
		function view(){
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
		
		function update(){
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
		                $packageData['thumbnail'] = $this->path.$this->upload->data()['file_name'];
		                //-- remove old file
		                if(null != $this->input->post('tourProgram_hide') && $this->input->post('tourProgram_hide') != ""){
		                    unlink($this->input->post('tourProgram_hide'));
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
		                      $packageData['pdf_path'] = $this->path.$this->upload->data()['file_name'];
		                      if(null != $this->input->post('thumbnail_hide') && $this->input->post('thumbnail_hide') != ""){
		                          unlink($this->input->post('thumbnail_hide'));
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
		
		private function getRealFolder(){
		    $folderName = dirname($_SERVER["SCRIPT_FILENAME"]).$this->path;
		    if(!is_dir($folderName))
		    {
		        mkdir($folderName,0777,true);
		    }
		    return $folderName;
		}
		
		private function getConfigUpload(){
		    $config['upload_path'] = $this->getRealFolder();
		    $config['allowed_types'] = 'gif|jpg|png|pdf';
		    $config['encrypt_name'] =true;
		    $config['max_size']	= '2048';
		    $config['max_width']  = '1024';
		    $config['max_height']  = '768';
		    return $config;
		}
		
		function add(){
			$response = true;
			$this->log_debug('add');
			try
	        {
			    $pathThumbnail = '';
				$pathPdf = '';

				$this->load->library('upload', $this->getConfigUpload());
				
				if (!$this->upload->do_upload('thumbnail')){
					$response = false;
				}else{
				    $this->log_debug('upload data',print_r($this->upload->data(),true));
					$pathThumbnail = $path.$this->upload->data()['file_name'];
					if($this->upload->do_upload('tourProgram')){
						$pathPdf = $path.$this->upload->data()['file_name'];

						$packageData = $this->input->post();
						$packageData['thumbnail'] = $pathThumbnail;
						$packageData['pdf_path'] = $pathPdf;
						$response = $this->mPackage->insert($packageData);

					}

				}
	             
	        }
	        catch(Exception $err)
	        {
	            $this->log_error("error",$err->getMessage());
	            
	        }
			echo $response;
		}

		function uploadThumbnail(){
			
		}
		
	}