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
			try
	        {
	        	$config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/upload/package"; 
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

				$this->load->library('upload', $config);
				log_message('debug',$config['upload_path']);

				if (!$this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
					log_message("error",$error['error']);
					echo $error['error'];
					// $this->load->view('', $error);
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					// $this->load->view('upload_success', $data);
				}
	             
	        }
	        catch(Exception $err)
	        {
	            log_message("error",$err->getMessage());
	            echo $err->getMessage();
	            //return show_error($err->getMessage());
	        }
			
			// print_r($this->input->post());
		}
		
	}