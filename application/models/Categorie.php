<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/07/2018
 * Time: 11:35
 */
class  Categorie extends CI_Model{

    public function __construct()
    {
        parent::__construct();


    }
    public function readAllTable($table){
        $rs= $this->db->get($table);
        return $rs->result_array();

    }
    public function getAllCategories(){
        $this->db->where('id_Parent',null);
        $rs= $this->db->get('mrooglemarket_categorie');
        return $rs->result_array();

    }
    public function getAllCategoriesPersonalized(){
        $this->db->where('id_Parent',null);
        $this->db->where('cat_ID!=',13);
        $rs= $this->db->get('mrooglemarket_categorie');
        return $rs->result_array();

    }
    public function getCategoryById($id){
        $this->db->where('id_Parent',$id);
        $rs= $this->db->get('mrooglemarket_categorie');
        return $rs->result_array();
}
    public function getSubCategory($id){
        $this->db->where('id_Parent',$id);
        $rs= $this->db->get('mrooglemarket_categorie');
        return $rs->result_array();
    }
    public function editCategory($cat_ID,$data){
        $this->db->where('cat_ID',$cat_ID);
        $this->db->update('mrooglemarket_categorie', $data);
    }
    public function getSubCategories(){
        $this->db->select('subcat.*,cat.cat_Name as catName');
        $this->db->from('mrooglemarket_categorie as subcat');
        $this->db->join('mrooglemarket_categorie as cat', 'cat.cat_ID = subcat.id_Parent ');
        $this->db->where('subcat.id_Parent!=',null)->order_by('subcat.id_Parent');
        $rs= $this->db->get();
        return $rs->result_array();
    }

    public function addSubCat($data){
        $this->db->insert('mrooglemarket_categorie',$data);
    }

    public function nameExist($subcat_name,$id){
        $this->db->where('id_Parent =',$id);
        $this->db->where('cat_Name',$subcat_name);
        $rs= $this->db->get('mrooglemarket_categorie');
        return $rs->result_array();
    }
}
?>