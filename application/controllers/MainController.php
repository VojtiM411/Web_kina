<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller 
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('main_page');
        $this->load->view('logged_menu');
        
    }
    public function login()
    {
        $this->load->view('header');
        $this->load->view('auth/login');
    }
    public function register()
    {
        $this->load->helper('form');
        $this->load->view('register');
    }
    
}