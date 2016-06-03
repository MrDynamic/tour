<?php

class M_Mail extends Abstract_Model{
    function getTableName(){
		return 'tbl_mail';
	}

	protected function generateQuery($criteria = array(), $limit = array())
	{
		// TODO: Implement generateQuery() method.
	}
}