<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller 
{
    public function index()
    {
        $this->load->view('main_page');
        $this->load->view('logged_menu');
    }
    
}