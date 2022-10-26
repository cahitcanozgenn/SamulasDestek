<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends User {

  public function __construct()
  {
    parent::__construct();

  }

  function index()
  {

    $data = $this->data();

    if (post()) {
      $post = secure();

      if ($post['pin'] == '5481' || $post['pin'] == '4326') {
        $this->session->set_userdata('user', true);
        redirect(base_url());
      }else {
        $alert = [
          'status' => 'error',
          'content' => 'Yanlış pin girdiniz',
          'redirect' => 'login',
        ];
        $this->alert($alert);
        exit;
      }

    }



    $this->load->view('partials/header', $data);
    $this->load->view('login', $data);
    $this->load->view('partials/footer', $data);
  }

}
 ?>