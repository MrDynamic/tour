<?php

class Package extends Main_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Package'=>'package','M_PackagePicture'=>'picture','M_Area'=>'area'));
    }

    public function index(){
        $page = empty($this->uri->segment(3))?1:$this->uri->segment(3);
        $criteria = array();
        $this->renderPackage($criteria,$page);
        
    }

    public function renderPackage($criteria=array(), $page,$baseUrl='package/index',$data=array(),$uri_segment=3){
        // Paging
        $this->load->library(array('pagination','my_pagination'));
        $pagingConfig = $this->my_pagination->init($baseUrl,$this->package->countPackage($criteria),$uri_segment);
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $data["paginationData"]   = $this->pagination;
        $data['packageData'] = $this->package->getPackageList($criteria,$limit);
        $data['areaData'] = $this->generateSelectItems($this->area->getDataSpecifyField('area_id id,area_name label'),'เลือกภูมิภาค');
        $this->setContentPage('package/package_page',$data);
        $this->loadLayoutContent($this->template);
    }

    public function filterByArea(){
        $this->log_debug('filter area',print_r($this->input->post(),true));
        $page = empty($this->uri->segment(4))?1:$this->uri->segment(4);
        $areaId = ($this->uri->segment(3))?$this->uri->segment(3):$this->input->post('areaId');

        $criteria = array('p.area_id'=>$areaId);
        $this->renderPackage($criteria,$page,"package/filterByArea/$areaId",array('areaSelected'=>$areaId),4);

    }
    
    public function detail(){
        $packageId = $this->uri->segment('3');
        $data['packagePicture'] = $this->picture->getDataSpecifyField('image_title,image_path',array('package_id'=>$packageId));
        $data['packageData'] = $this->package->getPackageByPackageId($packageId)[0];
        $this->setContentPage('package/package_detail',$data);
        $this->loadLayoutContent($this->template);
    }
    
    
    function __destruct()
    {}
}
