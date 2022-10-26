<?php

class Contents extends Admin
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

          $data['activeMenu'] = 'content';

          $where = [];
          if ($this->input->get('parent')) {
            $where['MD5(contents_parents)'] = $this->input->get('parent');
          }else {
            $where['contents_parents'] = '0';
          }
           $items=$this->db->where($where)->order_by('seq', 'ASC')->get('contents')->result();
           $viewData=array(

            "contents"=>$items,
        );

        $viewData['currentContent'] = false;
        if ($this->input->get('parent')) {
          $viewData['currentContent'] = $this->db->where('MD5(contents_id)', $this->input->get('parent'))->get('contents')->row();
        }

        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/contents/home', $viewData);
        $this->load->view('admin/partials/footer', $data);
    }



    public function detail()
{
      $data=$this->data();


      if (post()) {
        $post = secure();
      }
      $id = $post['id'];
       $data['contents'] = $this->db->where("md5(contents_id)", $id)->get("contents")->row();

      if(!$data['contents'])
      {
          redirect(base_url("admin/Contents"));
      }


  $this->load->view('admin/contents/detail',$data);

}


public function add()
{
     $data = $this->data();


  if (post())
  {
       $post = secure();
       if ($this->db->insert('contents', $post))
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
  $this->load->view('admin/contents/add', $data);
  $this->load->view('admin/partials/footer', $data);

}


public function Adetail($id=null)
{
    $data=$this->data();

      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("admin/Contents"));
      }

       $data['contents'] = $this->db->where("md5(contents_id)", $id)->get("contents")->row();



      if(!$data['contents'])
      {

        $alert = [
            'status' => 'error',
            'content' => 'Alt İçerik Bulunamadı',
            'redirect' => 'admin/contents/',
        ];
        $this->alert($alert);
      }








  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/contents/detail',$data);
  $this->load->view('admin/partials/footer',$data);
}


public function getupdate(){
  $data = $this->data();

  if (post()) {
    $post = secure();
  }
  $id = $post['id'];
  $data['cont'] = $this->db->where("md5(contents_id)", $id)->get("contents")->row();
  $data['contents'] = $this->Client_model->getAll('contents');
  $this->load->view('admin/contents/getupdate', $data);

}

public function update($id){
  $data = $this->data();
  $post = secure();

  $this->db->where('MD5(contents_id)', $id)->update('contents', $post);

  header('Location: '.$_SERVER['HTTP_REFERER']);

}

private function altelemanlar($id){
  $arr = [];
  $conts = $this->db->where('contents_parents', $id)->get('contents')->result();

  $conts = json_decode(json_encode_tr($conts), true);
  foreach ($conts as $key => $value) {
    if ($this->altelemanlar($value['contents_id'])) {
      $conts[$key][$value['contents_title']] = $this->altelemanlar($value['contents_id']);
    }
    unset($conts[$key]['contents_id']);
  }

  return (count($conts) > 0) ? $conts : false ;
}


public function tree($gelen_id){
  $data = $this->data();

  $id = $gelen_id;

  $anakat = $this->db->where('MD5(contents_id)', $id)->get('contents')->row();
  $anakat = (array)$anakat;
  $alt = $anakat[$anakat['contents_title']] = $this->altelemanlar($anakat['contents_id']);
  unset($anakat['contents_id']);

  $json = json_encode_tr($anakat);
  $json = addslashes($json);
  $json = str_replace('contents_id', 'ID', $json);
  $json = str_replace('contents_title', 'BAŞLIK', $json);
  $json = str_replace('contents_description', 'AÇIKLAMA', $json);
  $json = str_replace('contents_code', 'KOD', $json);
  $json = str_replace('seq', 'SIRA', $json);
  // echo "<pre>";
  // print_r($json);
  // echo "</pre>";
  // exit;
  // // redirect('https://jsoncrack.com/editor?json='.urlencode($json));
  // echo $json;

  $data = [
    'json' => $json
  ];

  $this->load->view('admin/contents/diagram', $data);

}


public function delete(){
  $data = $this->data();
  if (!$data['admin']) {
    exit('hata');
  }

  $id = post('id');

  $sil = $this->db->where('md5(contents_id)', $id)->or_where('md5(contents_parents)', $id)->delete('contents');

  if ($sil) {
    exit('success');
  }else {
    exit('Hata');
  }

}



}



?>