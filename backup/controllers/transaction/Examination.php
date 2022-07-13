<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examination extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if (!isset($this->session->emr_login))
         {
		      	redirect('login');
         }
         
    }

    public function index()
   {
      $data['title']='EMR::Examination';
      $data['activecls']='Examination';
      $content=$this->load->view('transaction/examination/insert',$data,true);
      $this->load->view('includes/layout',['content'=>$content]);  
   }
    

 }