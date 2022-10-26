<?php
/**
 *
 */
class Client_model extends CI_Model
{

  public function login($email, $password){
    $where = [
      'adminUserName' => $email,
      'adminPassword' => $password
    ];
    $user = $this->db->where($where)->get('admin')->row();

    return $user;

  }

  public function content($md5id){
    return $this->db->where('MD5(contents_id)', $md5id)->get('contents')->row();
  }

  public function childs($md5id){
    return $this->db->where('MD5(contents_parents)', $md5id)->order_by('seq', 'ASC')->get('contents')->result();
  }


  public function getAll($tableName = 'project')
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


  public function projectFeautres($project_id = false){
    if(!$project_id){
      return false;
    }

    return $this->db->where('MD5(project_id)', $project_id)->order_by('feature_seq', 'ASC')->get('features')->result();
  }

  public function allFeatures(){
    $this->db->select('*')->from('feature');
    $this->db->join('project as pr', 'pr.project_id = feature.project_id', 'INNER');
    return $this->db->get()->result();
  }

  public function featuresOfProject($project_id){
    $this->db->select('*')->from('feature');

    $this->db->join('project as pr', 'pr.project_id = feature.project_id', 'INNER');
    $this->db->where('MD5(pr.project_id)', $project_id);
    return $this->db->get()->result();
  }




}
 ?>