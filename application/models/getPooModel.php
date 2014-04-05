<?php

class getPooModel extends CI_Model{

	public function pooData(){
	
		 return $this->db->get('crud_example');

			
	
	}
	
	public function insertItem($getname,$gettitle,$getcont){
	
		$data = array(
		
			'id'=>'',
			'Name' => ''.$getname.'',
			'title' => ''.$gettitle.'',
			'content' => ''.$getcont.''
		);
		$this->db->insert('crud_example',$data);
	}
}