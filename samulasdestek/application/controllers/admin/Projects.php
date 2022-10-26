<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Admin{

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

      $data['activeMenu'] = 'projects';

       $items=$this->Client_model->getAll();
       $viewData=array(
        "project"=>$items
    );

    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/projects/home', $viewData);
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
         if ($this->db->insert('project', $post)) 
         {
         $alert = [
          'status' => 'success',
          'content' => 'Proje Ekleme İşlemi Başarılı.',
          'redirect' => 'admin/projects',
        ];
        $this->alert($alert);
      }
      else 
      {
           $alert = [
          'status' => 'error',
          'content' => 'Proje Ekleme İşlemi Başarısız.',
          'redirect' => 'admin/projects/add',
        ];
        $this->alert($alert);
      }
    }


    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/projects/add', $data);
    $this->load->view('admin/partials/footer', $data);

  }

  public function update($id = NULL)
  {
        $data=$this->data();
        if($id==null)
        {
           redirect(base_url("admin/Projects"));
        }
    
         $data['project'] = $this->db->where("md5(project_id)", $id)->get("project")->row();

    

        if(!$data['project'])
        {
            redirect(base_url("admin/Projects"));
        }

    if (post()) 
    {
          $post = secure();
          $this->db->where("md5(project_id)", $id);
          if ($this->db->update('project', $post)) 
          {
             $alert = [
            'status' => 'success',
            'content' => 'Proje Güncelleme İşlemi Başarılı.',
            'redirect' => 'admin/projects',
        ];
        $this->alert($alert);
      }
      else 
      {
        $alert = [
          'status' => 'error',
          'content' => 'Proje Güncelleme İşlemi Başarısız.',
          'redirect' => 'admin/projects/update',
        ];
        $this->alert($alert);
      }
    }
   



    $this->load->view('admin/partials/head',$data);
    $this->load->view('admin/partials/header',$data);
    $this->load->view('admin/projects/update',$data);
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
           redirect(base_url("admin/Projects"));
        }
    
         $data['project'] = $this->db->where("md5(project_id)", $id)->get("project")->row();

    

        if(!$data['project'])
        {
            redirect(base_url("admin/Projects"));
        }

    
   



    $this->load->view('admin/partials/head',$data);
    $this->load->view('admin/partials/header',$data);
    $this->load->view('admin/projects/detail',$data);
    $this->load->view('admin/partials/footer',$data);
    
  }

}