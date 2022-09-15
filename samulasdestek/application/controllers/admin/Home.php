<?php 

class Home extends Admin
{
    function __construct()
    {
        parent::__construct();
        $data = $this->data();
        if (!$data['admin']) {
          redirect(base_url('admin/login'));
          exit;
        }
    }

    public function index()
    {
        $data = $this->data();
        print_r($data['admin']);
    
    }
}




?>