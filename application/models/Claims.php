<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18/08/2018
 * Time: 09:34
 */
class Claims extends CI_Model{
    public function __construct()
    {
        parent::__construct();


    }
    public function getClaimsToTrait(){
        $this->db->where('status',false);
        $this->db->order_by('pub_ID','DESC');
        $this->db->limit(3);
        $rs= $this->db->get('mrooglemarket_claim');
        return $rs->result_array();
    }
    public function getClaims(){
        $this->db->where('status',false);
        $rs= $this->db->get('mrooglemarket_claim');
        return $rs->result_array();
    }
    public function getPostClaimed(){
        $sql = "SELECT group_concat(pub_ID separator ',') as id  FROM `mrooglemarket_claim`";
        $query = $this->db->query($sql);
        $array1=$query->result_array();
        $ids = explode(',',$array1[0]['id']);
        return $ids;
    }
    public function getAllPostClaimed($ids){
        $this->db->where_in('pub_ID', $ids);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }
}