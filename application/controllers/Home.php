<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author ibadboy
 */
class Home extends Abstract_Controller{
    function index(){
        $this->load->view("admin/layout",$this->html);

    }

}
