<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ProfileModel');
  }

  public function index()
  {
    $content['main_view'] = 'ProfileView';
    $content['title'] = 'Data Profile';

    $this->load->view('Body', $content);
  }

  public function profile()
  {
    $content['main_view'] = 'ProfileView';
    $content['title'] = "Profile " . $this->session->userdata('nama');
    $this->load->view('Body', $content);

/* End of file Controllername.php */