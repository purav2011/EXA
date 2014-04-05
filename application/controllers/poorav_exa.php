<?php

class Poorav_Exa extends CI_Controller{


	public function index(){
	
		//$this->load->view('poo_exa_html');
		$this->load->model('getPooModel');
		$getItem = $this->getPooModel->pooData();
		$get = $getItem->result();
		$getitem['allitem']=$get;
		$this->load->view('poo_exa_html',$getitem);
		
		
	}
	
	public function inserItem(){
	$this->load->model('getPooModel');
	 $getName = $this->input->post('name');
	 $getTitle = $this->input->post('title');
	 $getContent = $this->input->post('content');
	 if($getName!=="" && $getTitle !== "" && $getContent!=="" ){
	 $this->getPooModel->insertItem($getName,$getTitle,$getContent);
	}else{
		echo 'Please Insert Fields';
	
	}
		$getItem = $this->getPooModel->pooData();
		$get = $getItem->result();
		$getitem['allitem']=$get;
		$this->load->view('poo_exa_html',$getitem);
		//$this->load->view('poo_exa_html',$getitem);
	
	}


}