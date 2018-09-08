<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/07/2018
 * Time: 11:35
 */
class  Students extends CI_Model
{

    public function __construct()
    {
        parent::__construct();


    }

    public function listStudents($id){
        $this->db->where('classe !=','');
        $this->db->where('idteacher',$id);
        $rs= $this->db->get('student');
        return $rs->result_array();
    }
    public function listStudentsOutClass($id){
        $this->db->where('classe ','');
        $this->db->where('idteacher',$id);
        $rs= $this->db->get('student');
        return $rs->result_array();
    }
    public function listStudentsOutTeacher(){
        $this->db->where('idteacher',0);
        $rs= $this->db->get('student');
        return $rs->result_array();
    }

    public function editClass($id,$class){
        $this->db->where('id',$id);
        $this->db->update('student', $class);

    }
    public function deleteTeacher($id,$class){
        $this->db->where('id',$id);
        $this->db->update('student', $class);

    }
    public function addStudent($data){

            $this->db->insert('student',$data);

    }
    public function addMsg($data){

        $this->db->insert('messages',$data);

    }

}