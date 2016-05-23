<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 5/23/2016 AD
 * Time: 10:14 PM
 */
class M_Contact extends Abstract_Model
{

    protected function getTableName()
    {
        return "tbl_contact";
    }

    protected function generateQuery($criteria = array(), $limit = array())
    {
        // TODO: Implement generateQuery() method.
    }
}