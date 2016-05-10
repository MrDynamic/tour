<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/8/2016 AD
 * Time: 9:17 AM
 */
class Portfolio extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array("M_Portfolio"=>'portfolio'));
    }

    public function index(){
        $this->loadPage();
    }

    public function save(){
        $response = true;
        $this->log_debug('submit data',print_r($this->input->post(),true));
        $this->load->library('upload', $this->getConfigUpload());
        if (!$this->upload->do_upload('image')){
            $response = false;
        }else{
            $this->log_debug('upload data',print_r($this->upload->data(),true));
            $data = array();
            $data['title'] = $this->input->post('title');
            $data['short_desc'] = $this->input->post('short_desc');
            $this->resize($this->upload->data());
            $data['image_path'] = $this->upload->data()['file_name'];
            $response = $this->portfolio->insert($data);
        }
        echo $response;
    }

    public function loadPage($action=ACTION_ADD,$formData=array()){
        $this->setActiveMenu(MENU_MAIN_PORTFOLIO,MENU_PORTFOLIO);
        $formData['action'] = $action;
        $data['list'] = $this->portfolio->getAllData(false);
        $view['detail'] = $this->load->view('admin/portfolio/list_portfolio',$data,true);
        $view['form'] = $this->load->view('admin/portfolio/form_portfolio',$formData,true);

        $this->template['body'] = $this->load->view(MAIN_CONTAINER,$view,true);
        $this->load->view(ADMIN_LAYOUT,$this->template);
    }

    public function deletePortfolioById(){
        $this->log_debug('delete data',print_r($this->input->post(),true));
        $imagePath = $this->input->post('imagePath');
        $portfolioId = $this->input->post('portfolioId');
        $this->deleteFile(getFilePath($imagePath));
        $this->portfolio->delete(array('portfolio_id'=>$portfolioId));
        echo $portfolioId;

    }

}