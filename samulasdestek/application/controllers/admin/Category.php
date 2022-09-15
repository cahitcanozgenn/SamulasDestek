<?php 

class Category extends Admin
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
        $items=$this->Client_model->getAll();
        $viewData=array(
        "category"=>$items
    );

    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/category/home', $viewData);
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
            if ($this->db->insert('category', $post)) 
            {
                $alert = 
                [
                'status' => 'success',
                'content' => 'Kategori Ekleme İşlemi Başarılı.',
                'redirect' => 'admin/category',
                ];
               $this->alert($alert);
            }
            else 
            {
                $alert = 
                [
                'status' => 'error',
                'content' => 'Kategori Ekleme İşlemi Başarısız.',
                'redirect' => 'admin/category/add',
                ];
                $this->alert($alert);
            }
    }


            $this->load->view('admin/partials/head', $data);
            $this->load->view('admin/partials/header', $data);
            $this->load->view('admin/category/add', $data);
            $this->load->view('admin/partials/footer', $data);

  }


       public function update($id = NULL)
       {
             $data=$this->data();
             if($id==null)
             {
                redirect(base_url("admin/Category"));
             }
    
                $data['category'] = $this->db->where("md5(categoryId)", $id)->get("category")->row();

                if(!$data['category'])
                {
                   redirect(base_url("admin/Category"));
                }

                     if (post()) 
                     {
                         $post = secure();
                         $this->db->where("md5(categoryId)", $id);
                         if ($this->db->update('category', $post)) 
                         {
                                $alert = 
                                [
                                     'status' => 'success',
                                     'content' => 'Kategori Güncelleme İşlemi Başarılı.',
                                     'redirect' => 'admin/category',
                                ];
                                $this->alert($alert);
                       }
                       else 
                       {
                          $alert =
                          [
                                'status' => 'error',
                                'content' => 'Kategori Güncelleme İşlemi Başarısız.',
                                'redirect' => 'admin/category/update',
                         ];
                         $this->alert($alert);
                       }
                   }
   



    $this->load->view('admin/partials/head',$data);
    $this->load->view('admin/partials/header',$data);
    $this->load->view('admin/category/update',$data);
    $this->load->view('admin/partials/footer',$data);
    
  }

}


?>