<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/15/2016 AD
 * Time: 9:50 PM
 */
class ManageOrder extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Package'=>'package','M_PackageType'=>'packageType','M_Order'=>'order'));
    }

    public function index(){
        $packageId = $this->input->post('packageId');
        $customerName = $this->input->post('customerName');

        $this->setActiveMenu(MENU_MAIN_ORDER,MENU_ORDER);
        /*
         * Form Criteria
         */
        $formData['packageData'] = $this->generateSelectItems($this->package->getDataSpecifyField('package_id as id,package_name as label'));
        $formData['packageSelected'] = $packageId;
        $formData['customerName'] =$customerName;
        $data['form'] = $this->load->view('admin/order/form_order_criteria',$formData,true);

        /*
         * List order detail
         */
        $this->load->library('my_pagination');
        $page = empty($this->uri->segment(4))?1:$this->uri->segment(4);
        $criteria = array();
        if(!empty($packageId)){
            $criteria['d.package_id'] = $packageId;
        }
        if(!empty($customerName)){
            $criteria['r.firstname'] = $customerName;
        }
        $pagingConfig = $this->my_pagination->initAdmin('admin/manageOrder/index',$this->order->countByCriteria($criteria),'admin-paging');
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $detailData['orderData'] = $this->order->getOrderByCriteria($criteria,$limit);
        $detailData["paginationData"]   = $this->pagination;
        $data['detail'] = $this->load->view('admin/order/list_order',$detailData,true);

        $this->template['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
        $this->load->view(ADMIN_LAYOUT,$this->template);
    }


    public function requestTour(){
        $this->load->model(array('M_RequestTour'=>'requestTour'));
        $customerName = $this->input->post('customerName');

        $this->setActiveMenu(MENU_MAIN_ORDER,MENU_RQUEST_TOUR);
        /*
         * Form Criteria
         */
        $formData['customerName'] =$customerName;
        $data['form'] = $this->load->view('admin/order/form_request_tour_criteria',$formData,true);

        /*
         * List order detail
         */
        $this->load->library('my_pagination');
        $page = empty($this->uri->segment(4))?1:$this->uri->segment(4);
        $criteria = array();
        
        if(!empty($customerName)){
            $criteria['contact_name'] = $customerName;
        }
        $pagingConfig = $this->my_pagination->initAdmin('admin/manageOrder/requestTour',$this->requestTour->countByCriteria($criteria),'admin-paging');
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $detailData['requestData'] = $this->requestTour->getRequestTour($criteria,$limit);
        $detailData["paginationData"]   = $this->pagination;
        $data['detail'] = $this->load->view('admin/order/list_request_tour',$detailData,true);

        $this->template['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
        $this->load->view(ADMIN_LAYOUT,$this->template);
    }

    public function requestDetail($requestId=''){
        $formData = array();
        $this->load->model(array('M_RequestTour'=>'requestTour','M_Status'=>'status'));
        if(!empty($requestId)){
            $requestData = $this->requestTour->getRequestTour(array('request_id'=>$requestId));
            if(sizeof($requestData) > 0){
                $formData['requestData']=$requestData[0];
            }
            $this->log_debug('formData',print_r($formData,true));

        }
        $formData['requestId'] = $requestId;
        $data['form'] = $this->load->view('admin/order/request_order_detail',$formData,true);
        $detailData['statusData'] = $this->generateSelectItems($this->status->getDataSpecifyField('status_code id,status_name label',array('status_type'=>2)));
        $data['detail'] = $this->load->view('admin/order/form_save_status',$detailData,true);
        $this->template['body'] = $this->load->view(MAIN_CONTAINER,$data,true);
        $this->load->view(ADMIN_LAYOUT,$this->template);
    }

    public function saveStatus(){
        $this->log_debug('saveStatus',print_r($this->input->post(),true));
        $this->load->model(array('M_RequestTour'=>'requestTour'));
        $statusCode = $this->input->post("statusId");
        $requestId = $this->input->post('requestId');
        $remark = $this->input->post("remark");
        if(!empty($statusCode)){
            $data['status_code'] = $statusCode;
            $data['remark'] = $remark;
            $this->requestTour->update($data,array('request_id'=>$requestId));
            $this->log_debug('query',$this->requestTour->getLastQuery());
        }
        redirect('admin/manageOrder/requestTour','refresh');

    }
}