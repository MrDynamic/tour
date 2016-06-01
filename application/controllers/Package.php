<?php

class Package extends Main_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Package'=>'package','M_PackagePicture'=>'picture','M_Area'=>'area','M_PackageType'=>'packageType'));
    }

    public function index(){
        $page = empty($this->uri->segment(3))?1:$this->uri->segment(3);
//        $areaId = $this->uri->segment(4);
//        $packageTypeId = $this->uri->segment(5);
        $areaId = $this->input->get("areaId");
        $packageTypeId = $this->input->get("packageTypeId");
        $criteria = array();
        $this->renderPackage($criteria,$page,$areaId,$packageTypeId);

    }
    
    public function renderPackage($criteria=array(), $page,$areaId,$packageTypeId){
        // Paging
        $this->load->library(array('Ajax_pagination'));

        if(!empty($areaId) && $areaId !=0){
            $criteria['p.area_id']=$areaId;
            $data['areaSelected']=$areaId;
        }

        if(!empty($packageTypeId) && $packageTypeId !=0){
            $criteria['p.package_type_id'] = $packageTypeId;
            $data['packageTypeSelected'] = $packageTypeId;
        }

        $config = $this->ajax_pagination->getConfig();
        $config['total_rows']  = $this->package->countByCriteria($criteria);
        $this->ajax_pagination->initialize($config);
        $limit = array($config['per_page'],0);

        $data['packageData'] = $this->package->getPackageList($criteria,$limit);
        $data['areaData'] = $this->generateSelectItems($this->area->getDataSpecifyField('area_id id,area_name label'),'เลือกภูมิภาค');
        $data['packageTypeData'] = $this->generateSelectItems($this->packageType->getDataSpecifyField('package_type_id id,package_type_name label'),'เลือกประเภท');
        $this->setContentPage('package/package_page',$data);
        $this->loadLayoutContent($this->template);
    }

    public function renderPackageByAjax(){
        // Paging
        $this->load->library(array('Ajax_pagination'));
        $areaId = $this->input->post("areaId");
        $packageTypeId = $this->input->post("packageTypeId");

        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }

        $criteria = array();
        if(!empty($areaId) && $areaId !=0){
            $criteria['p.area_id']=$areaId;
            $data['areaSelected']=$areaId;
        }

        if(!empty($packageTypeId) && $packageTypeId !=0){
            $criteria['p.package_type_id'] = $packageTypeId;
            $data['packageTypeSelected'] = $packageTypeId;
        }


        //-- paging
        $totalRec = $this->package->countByCriteria($criteria);
        $config = $this->ajax_pagination->getConfig();
        $config['total_rows']  = $totalRec;
        $this->ajax_pagination->initialize($config);
        $limit = array($config['per_page'],$offset);
        $data['packageData'] = $this->package->getPackageList($criteria,$limit);
        $this->setContentPage('package/package_list',$data);
        echo $this->template['content'];
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
