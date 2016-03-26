<?php
class M_Menu extends Abstract_Model{

	function getTableName(){
		return 'tbl_menus';
	}
	
	function getAdminMenu(){
		/*
			select menu_id,menu_name,menu_key,menu_url,is_main
		    from tbl_menus m
		    where m.delete_flag <> 'Y' and m.is_main = 'Y'
		    UNION
		    select menu_id,menu_name,menu_key,menu_url,is_main
		    from tbl_menus m
		    where m.delete_flag <> 'Y' and m.is_main = 'N'

		    select m.* from tbl_menus m
			where m.delete_flag <> 'Y'
			order by m.menu_id, m.sequence
		*/

	}
}