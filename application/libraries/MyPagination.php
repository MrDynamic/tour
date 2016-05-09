<?php
class MyPagination {

    function __construct() {
        $this->ci =& get_instance();
    }

    public function init($base_url,$total_rows,$uri_segment=3){
        $config['per_page']          = 15;
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
        $this->ci->pagination->initialize($config);
        return $config;
    }

}