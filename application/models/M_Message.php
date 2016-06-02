<?php

/**
 * Created by PhpStorm.
 * User: ibadboy
 * Date: 6/2/2016 AD
 * Time: 9:39 PM
 */
class M_Message extends Abstract_Model
{

    protected function getTableName()
    {
        return "tbl_message";
    }

    protected function generateQuery($criteria = array(), $limit = array())
    {
        // TODO: Implement generateQuery() method.
    }
}