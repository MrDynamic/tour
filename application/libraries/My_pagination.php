<?php
class My_pagination {

    function __construct() {
        $this->ci =& get_instance();
    }

//    public function init($base_url,$total_rows,$uri_segment=3){
//        $config['per_page']          = 3;
//        $config['uri_segment']       = $uri_segment;
//        $config['base_url']          = base_url().$base_url;
//        $config['total_rows']        = $total_rows;
//        $config['use_page_numbers']  = TRUE;
//        $config['first_tag_open'] = $config['last_tag_open']= $config['num_tag_open'] = "<li id='paging'>";
//        $config['next_tag_open']='<li class="next hidden-xs">';
//        $config['prev_tag_open'] = '<li class="previous hidden-xs">';
//        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] ="</li>";
//        $config['cur_tag_open'] = '<li><span class="current">';
//        $config['cur_tag_close'] = "</span></li>";
//        $this->ci->pagination->initialize($config);
//        return $config;
//    }

    public function init($base_url,$total_rows,$uri_segment=3){
        $config['per_page']          = 10;
        $config['uri_segment']       = $uri_segment;
        $config['base_url']          = base_url().$base_url;
        $config['total_rows']        = $total_rows;
        $config['use_page_numbers']  = TRUE;
        $config['first_tag_open'] = $config['last_tag_open']= $config['num_tag_open'] = "<li>";
        $config['next_tag_open']='<li class="next hidden-xs">';
        $config['prev_tag_open'] = '<li class="previous hidden-xs">';
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] ="</li>";
        $config['cur_tag_open'] = '<li><span class="current">';
        $config['cur_tag_close'] = "</span></li>";
        $config['last_link'] = false;
        $config['first_link'] = false;
        $this->ci->pagination->initialize($config);
        return $config;
    }

    public function initPackage($base_url,$total_rows){
        $config['per_page']          = 8;
        $config['uri_segment']       = 3;
        $config['base_url']          = base_url().$base_url;
        $config['total_rows']        = $total_rows;
        $config['use_page_numbers']  = TRUE;
        $config['first_tag_open'] = $config['last_tag_open']= $config['num_tag_open'] = "<li id='package-paging'>";
        $config['next_tag_open']="<li class='next hidden-xs' id='package-paging'>";
        $config['prev_tag_open'] = "<li class='previous hidden-xs' id='package-paging'>";
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] ="</li>";
        $config['cur_tag_open'] = '<li><span class="current">';
        $config['cur_tag_close'] = "</span></li>";
        $config['last_link'] = false;
        $config['first_link'] = false;
        $this->ci->pagination->initialize($config);
        return $config;
    }

    public function initAdmin($base_url,$total_rows,$linkId=''){
        $config['per_page']          = 10;
        $config['uri_segment']       = 4;
        $config['base_url']          = base_url().$base_url;
        $config['total_rows']        = $total_rows;
        $config['use_page_numbers']  = TRUE;
        $config['first_tag_open'] = $config['last_tag_open']= $config['num_tag_open'] = "<li id='$linkId'>";
        $config['next_tag_open']="<li class='next hidden-xs' id='$linkId'>";
        $config['prev_tag_open'] = "<li class='previous hidden-xs' id='$linkId'>";
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] ="</li>";
        $config['cur_tag_open'] = '<li><span class="current">';
        $config['cur_tag_close'] = "</span></li>";
        $config['last_link'] = false;
        $config['first_link'] = false;
        $this->ci->pagination->initialize($config);
        return $config;
    }

}