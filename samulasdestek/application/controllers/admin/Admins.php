<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends Admin{

  public function __construct()
  {
       parent::__construct();
       $this->load->model("Client_model");
       $data = $this->data();
       if (!$data['admin']) 
       {
         redirect(base_url('admin/login'));
        exit;
       }
  }

  function index()
  {
      $data = $this->data();

      $data['activeMenu'] = 'admin';

       $items=$this->Client_model->getAll("admin");
       $viewData=array(
        "admin"=>$items
    );

    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/admins/home', $viewData);
    $this->load->view('admin/partials/footer', $data);

  }


  public function add()
  {
       $data = $this->data();
       if (!$data['admin'])
       {
          redirect(base_url('admin/login'));
          exit;
       }

    if (post()) 
    {
         $post = secure();
         if ($this->db->insert('admin', $post)) 
         {
         $alert = [
          'status' => 'success',
          'content' => 'Admin Ekleme İşlemi Başarılı.',
          'redirect' => 'admin/admins',
        ];
        $this->alert($alert);
      }
      else 
      {
           $alert = [
          'status' => 'error',
          'content' => 'Admin Ekleme İşlemi Başarısız.',
          'redirect' => 'admin/admins/add',
        ];
        $this->alert($alert);
      }
    }


    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/admins/add', $data);
    $this->load->view('admin/partials/footer', $data);

  }

  public function update($id = NULL)
  {
        $data=$this->data();
        if($id==null)
        {
           redirect(base_url("admin/Admins"));
        }
    
         $data['admin'] = $this->db->where("md5(adminId)", $id)->get("admin")->row();

    

        if(!$data['admin'])
        {
            redirect(base_url("admin/Admins"));
        }

    if (post()) 
    {
          $post = secure();
          $this->db->where("md5(adminId)", $id);
          if ($this->db->update('admin', $post)) 
          {
             $alert = [
            'status' => 'success',
            'content' => 'Admin Güncelleme İşlemi Başarılı.',
            'redirect' => 'admin/adminus',
        ];
        $this->alert($alert);
      }
      else 
      {
        $alert = [
          'status' => 'error',
          'content' => 'Admin Güncelleme İşlemi Başarısız.',
          'redirect' => 'admin/admins/update',
        ];
        $this->alert($alert);
      }
    }
   



    $this->load->view('admin/partials/head',$data);
    $this->load->view('admin/partials/header',$data);
    $this->load->view('admin/admins/update',$data);
    $this->load->view('admin/partials/footer',$data);
    
  }

  public function delete($id=null)
  {
    if($id==null)
    {
      redirect(base_url("admin/Projects"));
    }
    //$delete=$this->Client_model->delete($id = null);
    //redirect(base_url("admin/Projects"));

    $project=$this->db->where("md5(project_id)", $id)->get("project")->row();
    
    if(!$project)
    {
      redirect(base_url("admin/Projects"));
    }
    
    if($this->db->delete("project", ["project_id" => $project->project_id]))
    {
      $alert = [
        'status' => 'success',
        'content' => 'Proje Silme İşlemi Başarılı',
        'redirect' => 'admin/projects/',
      ];
      $this->alert($alert);
    }

  }



  public function detail($id = NULL)
  {
        $data=$this->data();
        if($id==null)
        {
           redirect(base_url("admin/Admins"));
        }
    
         $data['admin'] = $this->db->where("md5(adminId)", $id)->get("admin")->row();

    

        if(!$data['admin'])
        {
            redirect(base_url("admin/Admins"));
        }

    
   



    $this->load->view('admin/partials/head',$data);
    $this->load->view('admin/partials/header',$data);
    $this->load->view('admin/admins/detail',$data);
    $this->load->view('admin/partials/footer',$data);
    
  }

}