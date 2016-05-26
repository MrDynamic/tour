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
        $page = empty($this->uri->segment(4))?1:$this->uri->segment(4);
        $this->loadPage(ACTION_ADD,array(),$page);
    }

    public function save(){
        $this->log_debug('submit data',print_r($this->input->post(),true));
        $this->load->library('upload', $this->getConfigUpload());
        if (!$this->upload->do_upload('image')){
            $this->session->set_flashdata(EXEC_MSG,STATUS_ERROR);
        }else{
            $this->log_debug('upload data',print_r($this->upload->data(),true));
            $data = array();
            $data['title'] = $this->input->post('title');
            $data['short_desc'] = $this->input->post('short_desc');
            $this->resize($this->upload->data());
            $data['image_path'] = $this->upload->data()['file_name'];
            $this->portfolio->insert($data);
            $this->session->set_flashdata(EXEC_MSG,STATUS_SUCCESS);
        }
        redirect('admin/portfolio','refresh');
    }

    public function loadPage($action=ACTION_ADD,$formData=array(),$page=1){
        $this->setActiveMenu(MENU_MAIN_PORTFOLIO,MENU_PORTFOLIO);
        $formData['action'] = $action;

        $this->load->library('my_pagination');
        $pagingConfig = $this->my_pagination->initAdmin('admin/portfolio/index',$this->portfolio->countAllWithCriteria(array(),false));
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $data["paginationData"]   = $this->pagination;
        $data['list'] = $this->portfolio->getDataByCriteriaWithOrderBy(array(),$limit,false,array('portfolio_id','desc'));

        $view['detail'] = $this->load->view('admin/portfolio/list_portfolio',$data,true);
        $view['form'] = $this->load->view('admin/portfolio/form_portfolio',$formData,true);

        $this->loadTemplate($view);
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