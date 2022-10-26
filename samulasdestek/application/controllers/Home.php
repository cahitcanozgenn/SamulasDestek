<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends User {

  public function __construct()
  {
    parent::__construct();
    $data = $this->data();
    if (!$data['user']) {
      redirect(base_url('login'));
      exit;
    }
  }

  function index()
  {
    $data = $this->data();

    $data['contents'] = $this->cm->childs(md5(0));

    // debug($data['contents'], true);

    $this->load->view('partials/header', $data);
    $this->load->view('home', $data);
    $this->load->view('partials/footer', $data);
  }

}
 ?>