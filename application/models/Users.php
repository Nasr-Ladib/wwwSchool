<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18/08/2018
 * Time: 10:13
 */

class Users extends CI_Model{

    public function __construct()
    {
        parent::__construct();


    }
    public function getUserById($id){
        $this->db->where('id',$id);
        $rs= $this->db->get('mrooglemarket_client');
        return $rs->result_array();

    }
    public function getUserConnected($id){
        $this->db->where('uacc_ID',$id);
        $rs= $this->db->get('teacher');
        return $rs->result_array();

    }

    public function getFirstLogin($id){
        $this->db->select('uacc_date_added');
        $this->db->from('user_accounts');
        $this->db->where('uacc_id',$id);
        $reault_array = $this->db->get()->result_array();
        return $reault_array[0]['uacc_date_added'];

    }
    public function getLastLogin($id){
        $this->db->select('uacc_date_last_login');
        $this->db->from('user_accounts');
        $this->db->where('uacc_id',$id);
        $reault_array = $this->db->get()->result_array();
        return $reault_array[0]['uacc_date_last_login'];

    }

    public function changeLang($id,$data){
        $this->db->where('client_ID',$id);
        $this->db->update('mrooglemarket_client', $data);

    }
    public  function register($data){
        $this->db->insert('mrooglemarket_client', $data);
    }
    public function newAccounts($date){
        $this->db->where('uacc_date_added >=',$date);
        $rs= $this->db->get('user_accounts');
        return $rs->result_array();
    }

    public function groupUser($id){
        $this->db->select('uacc_group_fk');
        $this->db->where('uacc_id',$id);
        $rs= $this->db->get('user_accounts');
        return $rs->result_array();
    }

    public function allUsers(){
        $this->db->select('mrooglemarket_client.*,count(mrooglemarket_post.client_ID) as number_posts,user_accounts.*');
        $this->db->from('mrooglemarket_client');
        $this->db->join('user_accounts', 'user_accounts.uacc_id = mrooglemarket_client.uacc_ID');
        $this->db->join('mrooglemarket_post','mrooglemarket_post.client_ID=mrooglemarket_client.client_ID', 'left outer')->group_by('mrooglemarket_client.client_ID');
        $this->db->where('user_accounts.uacc_group_fk !=',3);
        $rs = $this->db->get();
        return $rs->result_array();
    }
    public function newUsers($date){
        $this->db->select('mrooglemarket_client.*,count(mrooglemarket_post.client_ID) as number_posts,user_accounts.*');
        $this->db->from('mrooglemarket_client');
        $this->db->join('user_accounts', 'user_accounts.uacc_id = mrooglemarket_client.uacc_ID');
        $this->db->join('mrooglemarket_post ','mrooglemarket_post.client_ID=mrooglemarket_client.client_ID', 'left outer' )->group_by('mrooglemarket_client.client_ID');
        $this->db->where('user_accounts.uacc_group_fk !=',3);
        $this->db->where('user_accounts.uacc_date_last_login >=',$date);
        $rs = $this->db->get();
        return $rs->result_array();
    }
    public function disactifUsers(){
        $this->db->select('mrooglemarket_client.*,count(mrooglemarket_post.client_ID) as number_posts,user_accounts.*');
        $this->db->from('mrooglemarket_client');
        $this->db->join('user_accounts', 'user_accounts.uacc_id = mrooglemarket_client.uacc_ID');
        $this->db->join('mrooglemarket_post ','mrooglemarket_post.client_ID=mrooglemarket_client.client_ID', 'left outer')->group_by('mrooglemarket_client.client_ID');
        $this->db->where('user_accounts.uacc_group_fk !=',3);
        $this->db->where('user_accounts.uacc_active',0);
        $rs = $this->db->get();
        return $rs->result_array();
    }
}
