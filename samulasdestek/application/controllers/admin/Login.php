<?php
/**
 *
 */
class Login extends Admin
{

    public function index(){
      $this->load->model(['Client_model' => 'cm']);
      $data = $this->data();

      if (post()) {
        $post = secure();
        $admin = $this->cm->login($post['adminEmailAddress'], $post['adminPassword']);
        if (!$admin) {
          $alert = [
            'status' => 'OPPPSS!!',
            'content' => 'Böyle bir kullanıcı yok',
            'redirect' => 'admin/login',
          ];
          $this->alert($alert);
          exit;
        }

        $this->session->set_userdata('admin/category', $admin);
        redirect(base_url('admin/category'));

      }

      $this->load->view('admin/partials/head', $data);
      $this->load->view('admin/login', $data);
      $this->load->view('admin/partials/footer', $data);
    }

}

 ?>