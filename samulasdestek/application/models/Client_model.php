<?php
/**
 *
 */
class Client_model extends CI_Model
{

  public function login($email, $password){
    $where = [
      'adminEmailAddress' => $email,
      'adminPassword' => $password 
    ];
    $user = $this->db->where($where)->get('admin')->row();

    return $user;
    
  }



  public function getAll($tableName = 'category')
  {
   return $this->db->get($tableName)->result();
  }

  public function delete($id)
  {
      return $this->db->where("project_id",$id)->delete($this->tableName);
  }

  public function update($id)
  {
      return $this->db->where("project_id",$id)->update($this->tableName);
  }

  public function getCategory($id)
  {
      return $this->db->where("contentCategory",$id)->update($this->tableName);
  }

  public function allContent(){
    $this->db->select('*')->from('content');
    $this->db->join('category as ctg', 'ctg.categoryId = content.contentCategory', 'INNER');
    return $this->db->get()->result();
  }


}
 ?>