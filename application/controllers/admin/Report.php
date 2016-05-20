<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/20/2016 AD
 * Time: 8:01 AM
 */
class Report extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Report'=>'report','M_Package'=>'package'));
    }
    
    public function index(){
        $this->setActiveMenu(MENU_MAIN_REPORT,MENU_REPORT_ORDER);
        $formData['packageData'] = $this->generatePackageItems();
        $data['form'] = $this->load->view('admin/report/form_report_criteria',$formData,true);
        $this->loadTemplate($data);
    }

    public function generate(){
       $packageId = $this->input->post('packageId');
       if(!empty($packageId)){
           $data['packageData'] = $this->package->getDataSpecifyField('package_name')[0];
           $data['orderDetails'] = $this->report->generateReportByCriteria(array('d.package_id'=>$packageId));
           $html = $this->load->view('admin/report/order_report',$data,true);
           $reportName = $data['packageData']->package_name.'_'.date('Ymds');
           $this->generatePDF($html,$reportName);
       }
    }

}