<?php 

class Content extends Admin
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
    $feature_id = ($this->input->get('feature_id')) ? $this->input->get('feature') : false ;

      $data['activeMenu'] = 'content';

      $proje = ($this->input->get('feature')) ? $this->input->get('feature') : false ;
   

       $items=$this->Client_model->getAll('content');
       $viewData=array(
        "features"=>$this->Client_model->getAll(),
        "content"=>$items,
        "currentProject" => $proje
    );
    $viewData['features'] = (!$proje) ?  $this->Client_model->allFeatures() : $this->Client_model->featuresOfProject($proje);

    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/content/home', $viewData);
    $this->load->view('admin/partials/footer', $data);
}


public function add()
{
     $data = $this->data();
    
  
  if (post()) 
  {
       $post = secure();
       if ($this->db->insert('content', $post)) 
       {
       $alert = [
        'status' => 'success',
        'content' => 'İçerik Ekleme İşlemi Başarılı.',
        'redirect' => 'admin/content',
      ];
      $this->alert($alert);
    }
    else 
    {
         $alert = [
        'status' => 'error',
        'content' => 'İçerik Ekleme İşlemi Başarısız.',
        'redirect' => 'admin/content/add',
      ];
      $this->alert($alert);
    }
  }


  $this->load->view('admin/partials/head', $data);
  $this->load->view('admin/partials/header', $data);
  $this->load->view('admin/content/add', $data);
  $this->load->view('admin/partials/footer', $data);

}



public function update($id = NULL)
{
      $data=$this->data();

      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("admin/Content"));
      }
  
       $data['content'] = $this->db->where("md5(content_id)", $id)->get("content")->row();

  

      if(!$data['content'])
      {
          redirect(base_url("admin/Content"));
      }


  if (post()) 
  {
        $post = secure();
        $this->db->where("md5(content_id)", $id);
        if ($this->db->update('content', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'İçerik Güncelleme İşlemi Başarılı.',
          'redirect' => 'admin/content',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'İçerik Güncelleme İşlemi Başarısız.',
        'redirect' => 'admin/content/update',
      ];
      $this->alert($alert);
    }
  }
 



  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/content/update',$data);
  $this->load->view('admin/partials/footer',$data);
  
}

public function detail($id = NULL)
{
      $data=$this->data();

      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("admin/Content"));
      }
  
       $data['content'] = $this->db->where("md5(content_id)", $id)->get("content")->row();

  

      if(!$data['content'])
      {
          redirect(base_url("admin/Content"));
      }


 
 



  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/content/detail',$data);
  $this->load->view('admin/partials/footer',$data);
  
}













}


?>