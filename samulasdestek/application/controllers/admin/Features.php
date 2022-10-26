<?php 

class Features extends Admin
{
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

  public function index()
   {
       $data = $this->data();
      
       $project_id = ($this->input->get('project')) ? $this->input->get('project') : false ;

       $data['activeMenu'] = 'projects';

       $proje = ($this->input->get('project')) ? $this->input->get('project') : false ;
        
        $viewData=array(
         "projects"=>$this->Client_model->getAll(),
         "currentProject" => $proje
        );
     $viewData['features'] = (!$proje) ?  $this->Client_model->allFeatures() : $this->Client_model->featuresOfProject($proje);
 
     $this->load->view('admin/partials/head', $data);
     $this->load->view('admin/partials/header', $data);
     $this->load->view('admin/features/home', $viewData);
     $this->load->view('admin/partials/footer', $data);
 
   }


   public function add()
  {
       $data = $this->data();
      
       $viewData=array(
        "projects"=>$this->Client_model->getAll(),
        "features" => $this->Client_model->allFeatures()
       );
    if (post()) 
    {
         $post = secure();
         if ($this->db->insert('feature', $post)) 
         {
         $alert = [
          'status' => 'success',
          'content' => 'Özellik Ekleme İşlemi Başarılı.',
          'redirect' => 'admin/features',
        ];
        $this->alert($alert);
      }
      else 
      {
           $alert = [
          'status' => 'error',
          'content' => 'Özellik Ekleme İşlemi Başarısız.',
          'redirect' => 'admin/features/add',
        ];
        $this->alert($alert);
      }
    }


    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/features/add', $viewData);
    $this->load->view('admin/partials/footer', $data);

  }


  public function update($id = NULL)
  {
        $data=$this->data();
        if($id==null)
        {
           redirect(base_url("admin/Features"));
        }
    
         $data['feature'] = $this->db->where("md5(feature_id)", $id)->get("feature")->row();

         $viewData=array(
          "projects"=>$this->Client_model->getAll(),
          "features" => $this->Client_model->allFeatures()
         );

        if(!$data['feature'])
        {
            redirect(base_url("admin/Features"));
        }

    if (post()) 
    {
          $post = secure();
          $this->db->where("md5(feature_id)", $id);
          if ($this->db->update('feature', $post)) 
          {
             $alert = [
            'status' => 'success',
            'content' => 'Özellik Güncelleme İşlemi Başarılı.',
            'redirect' => 'admin/features',
        ];
        $this->alert($alert);
      }
      else 
      {
        $alert = [
          'status' => 'error',
          'content' => 'Özellik Güncelleme İşlemi Başarısız.',
          'redirect' => 'admin/features/update',
        ];
        $this->alert($alert);
      }
    }
   



    $this->load->view('admin/partials/head',$data);
    $this->load->view('admin/partials/header',$data);
    $this->load->view('admin/features/update',$viewData);
    $this->load->view('admin/partials/footer',$data);
    
  }

  public function detail($id = NULL)
  {
        $data=$this->data();
        if($id==null)
        {
           redirect(base_url("admin/Features"));
        }
    
         $data['feature'] = $this->db->where("md5(feature_id)", $id)->get("feature")->row();

         $viewData=array(
          "projects"=>$this->Client_model->getAll(),
          "features" => $this->Client_model->allFeatures()
         );

        if(!$data['feature'])
        {
            redirect(base_url("admin/Features"));
        }

   
   



    $this->load->view('admin/partials/head',$data);
    $this->load->view('admin/partials/header',$data);
    $this->load->view('admin/features/detail',$viewData);
    $this->load->view('admin/partials/footer',$data);
    
  }





}



?>