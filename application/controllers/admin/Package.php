<?php
	class Package extends Abstract_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array("M_PackageType"=>'mCat','M_Package'=>'mPackage'));
		}

		function index(){
		    $this->setActiveMenu(PACKAGE_MENU,'MANAGE_PACK');
		    $formData['packageType'] = $this->generateSelectItems($this->mPackage->getDataSpecifyField('package_type_id as id,package_type_name as label',TBL_PACKAGE_TYPE));
		    $data['form'] = $this->load->view('admin/package/form_add_package',$formData,true);
		    $data['list'] = $this->mPackage->getAllData(TBL_PACKAGE);
		    $this->html['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
			$this->load->view(ADMIN_LAYOUT,$this->html);

		}

		function add(){
			$response = true;
			log_message('debug','########## function add package');
			try
	        {
	        	$folderName = dirname($_SERVER["SCRIPT_FILENAME"])."/resources/upload/package";
	        	log_message('debug','folder upload'.$folderName);

	        	if(!is_dir($folderName))
				{
				   mkdir($folderName,0777,true);
				}

	        	$config['upload_path'] = $folderName; 
				$config['allowed_types'] = 'gif|jpg|png|pdf';
				$config['max_size']	= '2048';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';
				$pathThumbnail = '';
				$pathPdf = '';

				$this->load->library('upload', $config);
				
				if (!$this->upload->do_upload('thumbnail')){
					$response = false;
				}else{
					$pathThumbnail = $this->upload->data()['full_path'];
					if($this->upload->do_upload('tourProgram')){
						$pathPdf = $this->upload->data()['full_path'];

						$packageData = $this->input->post();
						$packageData['thumbnail'] = $pathThumbnail;
						$packageData['pdf_path'] = $pathPdf;
						// log_message('debug',$this->mPackage->tableName);
						$response = $this->mPackage->insert('TBL_PACKAGE',$packageData);

					}

				}
	             
	        }
	        catch(Exception $err)
	        {
	            log_message("error",$err->getMessage());
	            echo $err->getMessage();
	            //return show_error($err->getMessage());
	        }
			echo $response;
		}

		function uploadThumbnail(){
			
		}
		
	}