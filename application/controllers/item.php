<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class item extends CI_Controller {


   public $item;


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data = 123;
     
       $this->load->view('item/list',$data);
   }


}