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
        $this->load->library(array('pagination','my_pagination'));

        if(!empty($areaId) && $areaId !=0){
            $criteria['p.area_id']=$areaId;
            $data['areaSelected']=$areaId;
        }

        if(!empty($packageTypeId) && $packageTypeId !=0){
            $criteria['p.package_type_id'] = $packageTypeId;
            $data['packageTypeSelected'] = $packageTypeId;
        }

        $pagingConfig = $this->my_pagination->initPackage("package/index",$this->package->countPackage($criteria));
        $limit = array($pagingConfig['per_page'],(($page-1) * $pagingConfig['per_page']));
        $data["paginationData"]   = $this->pagination;
        $data['packageData'] = $this->package->getPackageList($criteria,$limit);
        $data['areaData'] = $this->generateSelectItems($this->area->getDataSpecifyField('area_id id,area_name label'),'เลือกภูมิภาค');
        $data['packageTypeData'] = $this->generateSelectItems($this->packageType->getDataSpecifyField('package_type_id id,package_type_name label'),'เลือกประเภท');
        $this->setContentPage('package/package_page',$data);
        $this->loadLayoutContent($this->template);
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
