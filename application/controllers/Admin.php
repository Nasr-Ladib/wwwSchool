<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 17/08/2018
 * Time: 13:11
 */

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database('');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
    }


    public function index(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->view('back_end/dashboard',array('user'=>$user));
        $this->load->view('back_end/hometeacher');
        $this->load->view('back_end/footer');
    }else
        redirect('');
    }
    public function listStudents(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Students');
            $students=$this->Students->listStudents($user[0]['id']);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/listStudents',array('students'=>$students));
            $this->load->view('back_end/footer');
        }else
            redirect('auth');
    }

    //ajax
    public function editClass(){
        $id = $this->input->post('id');
        $class_student = $this->input->post('classe');
        $classe=array('classe'=>$class_student);
        $this->load->model('Students');
        $this->Students->editClass($id,$classe);
    }
    public function deleteclass(){
        $id = $this->input->post('id');
        $classe=array('classe'=>'');
        $this->load->model('Students');
        $this->Students->editClass($id,$classe);
    }

    public function listStudentsOutClass(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Students');
            $students=$this->Students->listStudentsOutClass($user[0]['id']);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/liststudentsoutclass',array('students'=>$students));
            $this->load->view('back_end/footer');
        }else
            redirect('auth');
    }

    //ajax
    public function deleteTeacher(){
        $id = $this->input->post('id');
        $teacher=array('idteacher'=>0);
        $this->load->model('Students');
        $this->Students->deleteTeacher($id,$teacher);
    }

    public function listStudentsOutTeacher(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Students');
            $students=$this->Students->listStudentsOutTeacher($user[0]['id']);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/liststudentsoutteacher',array('students'=>$students));
            $this->load->view('back_end/footer');
        }else
            redirect('auth');

    }

    //ajax
    public function addClass($id_teacher){
        $id = $this->input->post('id');
        $class_student = $this->input->post('classe');
        $classe=array('classe'=>$class_student,'idteacher'=>$id_teacher);
        $this->load->model('Students');
        $this->Students->editClass($id,$classe);
    }

    public function readingExercices(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Exercices');
            $exercices=$this->Exercices->listReadingExercice($user[0]['id']);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/readingexercices',array('exercices'=>$exercices));
            $this->load->view('back_end/footer');
        }else
            redirect('auth');
    }
    public function writingExercices(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Exercices');
            $exercices=$this->Exercices->listWritingExercice($user[0]['id']);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/writingexercices',array('exercices'=>$exercices));
            $this->load->view('back_end/footer');
        }else
            redirect('auth');
    }
    public function formExercice(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Students');
            $students=$this->Students->listStudents($user[0]['id']);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/formexercice',array('students'=>$students));
            $this->load->view('back_end/footer');
        }else
            redirect('auth');
    }
    public function addExercice(){
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']    ='*';
        $this->load->library('upload', $config);
        $exercice = $this->input->post('exercice');
        $student = $this->input->post('student');
        if ( $this->upload->do_upload('ex_file')) {
            $image = $this->upload->data();
            $data=array('ExercicePicture'=>$image['file_name'],'Dateexercice'=>date('d/m/Y'),'Studentid'=>$student);
            $this->load->model('Exercices');
            $this->Exercices->addExercice($exercice,$data);
            redirect('');
        }else redirect('admin/formexercice');
    }

    public function formStudent(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/formstudent');
            $this->load->view('back_end/footer');
        }else
            redirect('auth');
    }
    public function formMsg(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Students');
            $students=$this->Students->listStudents($user[0]['id']);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/formmsg',array('students'=>$students));
            $this->load->view('back_end/footer');
        }else
            redirect('auth');
    }
    public function addMsg(){
        $student = $this->input->post('student');
        $title = $this->input->post('titlemsg');
        $msg = $this->input->post('msg');
         $data=array('objectmessage'=>$title,'message'=>$msg,'Studentid'=>$student);
            $this->load->model('Students');
            $this->Students->addMsg($data);
            redirect('');
         redirect('');
    }
    public function addStudent(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']    ='*';
        $this->load->library('upload', $config);
        $name = $this->input->post('nametext');
        $classe = $this->input->post('classe');
        if ( $this->upload->do_upload('student_file')) {
            $image = $this->upload->data();
            $data=array('picture'=>$image['file_name'],'name'=>$name,'classe'=>$classe,'idteacher'=>$user[0]['id']);
            $this->load->model('Students');
            $this->Students->addStudent($data);
            redirect('');
        }else redirect('admin/formstudent');
    }
    public function listAdmin(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
        $this->load->view('back_end/dashboard');
        $this->load->view('back_end/list');
        $this->load->view('back_end/footer');
        }else
            redirect('');

    }
    public function listCategory(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Categorie');
           $categories=$this->Categorie->getAllCategories();
            $this->load->view('back_end/dashboard');
            $this->load->view('back_end/listcategory',array('categories'=>$categories));
            $this->load->view('back_end/footer');
        }else
            redirect('');

    }
    public function listSubCategory(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Categorie');
            $categories=$this->Categorie->getSubCategories();
            $this->load->view('back_end/dashboard');
            $this->load->view('back_end/listsubcategory',array('categories'=>$categories));
            $this->load->view('back_end/footer');
        }else
            redirect('');

    }
    public function loginAdmin(){
    $this->load->model('Users');
    $data=$this->session->userdata('flexi_auth');
    $user=$this->Users->getUserConnected($data['user_id']);
    $this->load->vars(array('user'=>$user));
    if($user!=null){
        $this->load->view('back_end/login');
    }else
        redirect('');
    }

    public function formAdmin(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
        $this->load->view('back_end/dashboard');
        $this->load->view('back_end/form');
        $this->load->view('back_end/footer');
    }else
redirect('');
    }

    public function saveCategory($cat_ID){
        $cat_Name = $this->input->post('name');
        $cat_Icon = $this->input->post('icone');
        $this->load->model('Categorie');
        $data=array('cat_Name'=>$cat_Name,
            'cat_Icon'=>$cat_Icon);
        $this->Categorie->editCategory($cat_ID,$data);
        echo 'work';
    }

    public function newPosts(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Evaluator');
            $post_seen=$this->Evaluator->getPostSeen($user[0]['client_ID']);
            $post_not_seen=$this->Evaluator->getPostNotSeenAdmin($post_seen);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/newposts',array('new_ads'=>$post_not_seen));
            $this->load->view('back_end/footer');
        }else
            redirect('');
    }

    public function actifPosts(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Posts');
           $actif_posts=$this->Posts->actifPosts();
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/actifposts',array('actif_ads'=>$actif_posts));
            $this->load->view('back_end/footer');
        }else
            redirect('');
    }


    public function claimedPosts(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Claims');
            $pub_ids=$this->Claims->getPostClaimed();
            $claimed_posts=$this->Claims->getAllPostClaimed($pub_ids);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/claimedposts',array('claimed_ads'=>$claimed_posts));
            $this->load->view('back_end/footer');
        }else
            redirect('');
    }

    public function disactifPosts(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Posts');
            $disactif_posts=$this->Posts->disactifPosts();
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/disactifposts',array('disactif_ads'=>$disactif_posts));
            $this->load->view('back_end/footer');
        }else
            redirect('');
    }

    public function allUsers(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Users');
            $all_users=$this->Users->allUsers();
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/allusers',array('all_users'=>$all_users));
            $this->load->view('back_end/footer');
        }else
            redirect('');

    }
    public function newUsers(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Users');
            $date_last_login=$this->Users->getLastLogin($data['user_id']);
            $new_users=$this->Users->newUsers($date_last_login);
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/newusers',array('new_users'=>$new_users));
            $this->load->view('back_end/footer');
        }else
            redirect('');

    }
    public function disactifUsers(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Users');
            $disactif_users=$this->Users->disactifUsers();
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/allusers',array('all_users'=>$disactif_users));
            $this->load->view('back_end/footer');
        }else
            redirect('');

    }

    public function formSubcategory(){
        $this->load->model('Users');
        $data=$this->session->userdata('flexi_auth');
        $user=$this->Users->getUserConnected($data['user_id']);
        $this->load->vars(array('user'=>$user));
        if($user!=null){
            $this->load->model('Categorie');
            $categories=$this->Categorie->getAllCategories();
            $this->load->view('back_end/dashboard',array('user'=>$user));
            $this->load->view('back_end/formsubcategory',array('categories'=>$categories));
            $this->load->view('back_end/footer');
        }else
            redirect('');
    }

    public function addSubCat(){
        $cat = $this->input->post('cat');
        $subcat = $this->input->post('subcat');
        $this->load->model('Categorie');
        $subcatname_exist=$this->Categorie->nameExist($subcat,$cat);
        $data=array(
          'cat_Name'=>$subcat,
          'id_Parent'=>$cat
        );
        if(($subcatname_exist==null) &&($subcat!=null) &&($cat!=null)){
        $this->Categorie->addSubCat($data);
        }
        else echo 'exist';
    }
}