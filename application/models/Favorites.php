<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/08/2018
 * Time: 08:53
 */
class  Favorites extends CI_Model
{

    public function __construct()
    {
        parent::__construct();


    }


    public function getFavoritesUser($id){
        $this->db->where('client_ID',$id);
        $rs= $this->db->get('mrooglemarket_favorites');
        return $rs->result_array();
    }

    public function deleteFav($pub_ID,$client_ID){
        $this->db->where('pub_ID',$pub_ID);
        $this->db->where('client_ID',$client_ID);
        $this->db->delete('mrooglemarket_favorites');
    }
    public function insertFav($data){
        $this->db->insert('mrooglemarket_favorites',$data);


    }
    public function deleteFavorites($id){
        $this->db->where('pub_ID',$id);

        $this->db->delete('mrooglemarket_favorites');

    }
}