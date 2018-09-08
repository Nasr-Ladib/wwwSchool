<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18/08/2018
 * Time: 10:13
 */

class Evaluator extends CI_Model
{

    public function __construct()
    {
        parent::__construct();


    }

    public function getPostSeen($id){
        $sql = "SELECT group_concat(pub_ID separator ',') as id  FROM `mrooglemarket_post_seen`  WHERE `client_ID`=".$id;
        $query = $this->db->query($sql);
        $array1=$query->result_array();
        $ids = explode(',',$array1[0]['id']);
        return $ids;
    }
    public function getPostToEvaluate($ids,$client_ID){
        $this->db->where('client_ID !=', $client_ID);
        $this->db->where_in('pub_ID', $ids);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }
    public function getPostNotSeen($ids){
        $this->db->where_not_in('pub_ID', $ids);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }
    public function getPostNotSeenAdmin($ids){
        $this->db->select('mrooglemarket_client.client_name,mrooglemarket_post.*');
        $this->db->from('mrooglemarket_post');
        $this->db->join('mrooglemarket_client','mrooglemarket_post.client_ID=mrooglemarket_client.client_ID');
        $this->db->where_not_in('pub_ID', $ids);
        $this->db->order_by('pub_Time','DESC');
        $rs= $this->db->get();
        return $rs->result_array();
    }

    public function evaluatePost($client_ID){
        $this->db->where('client_ID', $client_ID);
        $rs= $this->db->get('mrooglemarket_evaluator');
        return $rs->result_array();
    }

    public function addEvaluator($data){
        $this->db->insert('mrooglemarket_evaluator',$data);
    }
    public function markAsSeen($data){
        $this->db->insert('mrooglemarket_post_seen',$data);

    }

}