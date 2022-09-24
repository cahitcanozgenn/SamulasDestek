<?php 

class Content extends Admin
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Client_model");
        $data=$this->data();
        if (!$data['admin']) 
        {
           redirect(base_url('admin/login'));
           exit;
        }
    }

    public function index()
    {
        $data=$this->data();
        $items=$this->Client_model->getAll("content");
        $viewData=array(
        "content"=>$items,
        "category"=>$this->Client_model->getAll(),
    );

    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/content/home', $viewData);
    $this->load->view('admin/partials/footer', $data);

    }


    public function update($id = NULL)
    {
          $data=$this->data();
          if($id==null)
          {
             redirect(base_url("admin/Content"));
          }
 
            $data['content'] = $this->db->where("md5(contentId)", $id)->get("content")->row();
             $viewData=array(
                "category"=>$this->Client_model->getAll(),
               
               
               );

             if(!$data['content'])
             {
                redirect(base_url("admin/Content"));
             }

                  if (post()) 
                  {
                      $post = secure();
                      $this->db->where("md5(contentId)", $id);
                      if ($this->db->update('content', $post)) 
                      {
                             $alert = 
                             [
                                  'status' => 'success',
                                  'content' => 'Makale Güncelleme İşlemi Başarılı.',
                                  'redirect' => 'admin/content',
                             ];
                             $this->alert($alert);
                    }
                    else 
                    {
                       $alert =
                       [
                             'status' => 'error',
                             'content' => 'Makale Güncelleme İşlemi Başarısız.',
                             'redirect' => 'admin/content/update',
                      ];
                      $this->alert($alert);
                    }
                }




 $this->load->view('admin/partials/head',$data);
 $this->load->view('admin/partials/header',$data);
 $this->load->view('admin/content/update',$viewData);
 $this->load->view('admin/partials/footer',$data);
 
}



public function add()
  {
       $data = $this->data();
      
       $viewData=array(
        "category"=>$this->Client_model->getAll(),
       );
    if (post()) 
    {
         $post = secure();
         if ($this->db->insert('content', $post)) 
         {
         $alert = [
          'status' => 'success',
          'content' => 'Makale Ekleme İşlemi Başarılı.',
          'redirect' => 'admin/content',
        ];
        $this->alert($alert);
      }
      else 
      {
           $alert = [
          'status' => 'error',
          'content' => 'Makale Ekleme İşlemi Başarısız.',
          'redirect' => 'admin/content/add',
        ];
        $this->alert($alert);
      }
    }


    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/content/add', $viewData);
    $this->load->view('admin/partials/footer', $data);

  }

  public function idContent($id)
  {
    if($id==null)
    {
       redirect(base_url("admin/Content"));
    }

     $data['content'] = $this->db->where("md5(contentId)", $id)->get("content")->row();



    if(!$data['content'])
    {

      $alert = [
          'status' => 'error',
          'content' => 'Makale Bulunamadı.',
          'redirect' => 'admin/category/',
      ];
      $this->alert($alert);
    }
  

  $this->load->view('admin/partials/head', $data);
  $this->load->view('admin/partials/header', $data);
  $this->load->view('admin/content/idContent', $data);
  $this->load->view('admin/partials/footer', $data);

  }




}


?>