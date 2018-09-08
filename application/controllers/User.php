<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12/08/2018
 * Time: 21:22
 */
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database('');
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->load->library('session');
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $group=$this->Users->groupUser($data['user_id']);
        $this->load->vars(array('isAdmin'=>$group[0]['uacc_group_fk']));
        if($group!=null){
            $this->load->vars(array('isAdmin'=>$group[0]['uacc_group_fk']));
        }
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
    }

    public function owenPosts($id){
        $this->load->model('Posts');
        $this->load->model('Users');
        $posts=$this->Posts->getAllPostByUser($id);
        $user=$this->Users->getUserById($id);
        $number_ads=$this->Posts->numberAdsByOneClient($id);
        $dateFirstLogin=$this->Users->getFirstLogin($user[0]['uacc_ID']);
        $this->load->view('headerWithImage');
        $this->load->view('owenPosts',array('posts'=>$posts,'owner_post'=>$user[0],'number_ads'=>$number_ads,
            'dateFirstLogin'=>$dateFirstLogin));
        $this->load->view('footer');

    }


}
?>