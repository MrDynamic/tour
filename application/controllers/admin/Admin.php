<?php

	class Admin extends Abstract_Controller{
		public  function index(){
			$this->load->view(ADMIN_LAYOUT,$this->html);
		}
	}