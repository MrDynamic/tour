<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/14/2016 AD
 * Time: 9:44 PM
 */
class M_RequestTour extends Abstract_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getTableName()
    {
        return "tbl_request_tour";
    }
}