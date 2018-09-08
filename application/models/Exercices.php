<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18/08/2018
 * Time: 10:13
 */

class Exercices extends CI_Model
{

    public function __construct()
    {
        parent::__construct();


    }
    public function listReadingExercice($id){
        $this->db->select('student.*,readingexercice.*');
        $this->db->from('readingexercice');
        $this->db->join('student ','student.id=readingexercice.Studentid');
        $this->db->where('student.idteacher',$id);
        $rs = $this->db->get();
        return $rs->result_array();
    }
    public function listWritingExercice($id){
        $this->db->select('student.*,writingexercice.*');
        $this->db->from('writingexercice');
        $this->db->join('student ','student.id=writingexercice.Studentid');
        $this->db->where('student.idteacher',$id);
        $rs = $this->db->get();
        return $rs->result_array();
    }

    public function addExercice($type,$data){
        if($type==1){
            $this->db->insert('readingexercice',$data);
        }else{
            $this->db->insert('writingexercice',$data);

        }
    }
}

