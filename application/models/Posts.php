<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/07/2018
 * Time: 11:35
 */
class  Posts extends CI_Model{

    public function __construct()
    {
        parent::__construct();


    }
    public function readallPosts($table){
        $rs= $this->db->get($table);
        return $rs->result_array();

    }
    public function readPosts(){
        $this->db->order_by('pub_Time','DESC');
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();

    }

    public function readallPostsWithFilter($table,$filter,$type,$search){
        if($filter=='recent'){
            $this->db->order_by('pub_Time','DESC');
        }
        if($filter=='oldest'){
            $this->db->order_by('pub_Time','ASC');
        }
        if($filter=='price_Low'){
            $this->db->order_by('pub_Price','ASC');
        }
        if($filter=='price_High'){
            $this->db->order_by('pub_Price','DESC');
        }
        if($search!=''){
            $this->db->like('pub_Name', $search, 'both');
        }
        if($type==1){
            $this->db->where('type_Post',true);
        }
        if($type==0){
            $this->db->where('type_Post',false);
        }

        $rs= $this->db->get($table);
        return $rs->result_array();

    }

    public function readTrendingPosts(){
        $this->db->limit(8);
        $this->db->order_by('pub_Time', 'Desc');
       // $this->db->where('pub_Photo !=','default_img.jpg');
        $this->db->where('home_Page',true);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();

    }

    //Update Post
    public function updateFields($data,$id){
        $this->db->where('pub_ID',$id);
        $this->db->update('mrooglemarket_post', $data);

    }

    public function selectPostsByCategory($categories,$filter,$type,$search){
        if($filter=='recent'){
            $this->db->order_by('pub_Time','DESC');
        }
        if($filter=='oldest'){
            $this->db->order_by('pub_Time','ASC');
        }
        if($filter=='price_Low'){
            $this->db->order_by('pub_Price','ASC');
        }
        if($filter=='price_High'){
            $this->db->order_by('pub_Price','DESC');
        }
        if($search!=''){
            $this->db->like('pub_Name', $search, 'both');
        }
        if($type==1){
            $this->db->where('type_Post',true);
        }
        if($type==0){
            $this->db->where('type_Post',false);
        }

        $ids='';
        // get on string all the id of sub-category
        foreach ($categories as $category){
            $ids=$ids.$category['cat_ID'].',';
        }
         // ids= "id1,id2,...,idn," so we have to remove the last character
        $ids=rtrim($ids,",");
        $where=" cat_ID in (".$ids.")";
         $this->db->where($where);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }

    public function getPostById($id){
        $this->db->where('pub_ID',$id);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }
    public function getOwnerPost($id){
        $this->db->where('client_ID',$id);
        $rs= $this->db->get('mrooglemarket_client');
        return $rs->result_array();
    }
    public function getZonePost($id){
        $this->db->where('zone_ID',$id);
        $rs= $this->db->get('mrooglemarket_zone');
        return $rs->result_array();
    }
    public function getCatPost($id){
        $this->db->where('cat_ID',$id);
        $rs= $this->db->get('mrooglemarket_categorie');
        return $rs->result_array();
    }
    public function getAllPostByUser($id){
        $this->db->where('client_ID',$id);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }
    public function getFeaturingPost($cat_id,$price,$id){
        $this->db->where('pub_ID!=',$id);
        $this->db->where('cat_id',$cat_id);
        $price1=$price+$price*0.1;
        $price2=$price-$price*0.1;
        $this->db->where('pub_Price >',$price2);
        $this->db->where('pub_Price <',$price1);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }
    public function numberAdsByOneClient($id){
        $this->db->where('client_ID',$id);
        $this->db->from('mrooglemarket_post');
       return $this->db->count_all_results();
    }

    public function adsForToday($date){
        $this->db->select('pub_ID , pub_Time , pub_Name ,pub_Date');
        $this->db->where('pub_Date',$date);
        $this->db->limit(5);
        $rs= $this->db->get('mrooglemarket_post');
        return $rs->result_array();
    }

        public function actifPosts(){
            $this->db->select('mrooglemarket_client.client_name,mrooglemarket_post.*');
            $this->db->from('mrooglemarket_post');
            $this->db->join('mrooglemarket_client','mrooglemarket_post.client_ID=mrooglemarket_client.client_ID');
            $this->db->where('pub_Status','active');
            $rs= $this->db->get();
            return $rs->result_array();
        }

    public function disactifPosts(){
        $this->db->select('mrooglemarket_client.client_name,mrooglemarket_post.*');
        $this->db->from('mrooglemarket_post');
        $this->db->join('mrooglemarket_client','mrooglemarket_post.client_ID=mrooglemarket_client.client_ID');
        $this->db->where('pub_Status','disactive');
        $rs= $this->db->get();
        return $rs->result_array();
    }
}
?>