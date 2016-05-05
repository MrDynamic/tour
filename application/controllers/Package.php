<?php

class Package extends Abstract_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Package'=>'package','M_PackagePicture'=>'picture'));
    }

    public function index(){
        $data['packageData'] = $this->package->getPackageList();
        $data['areaData'];
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
