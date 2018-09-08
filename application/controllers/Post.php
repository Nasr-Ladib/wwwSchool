<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 18/07/2018
 * Time: 12:31
 */
 class Post extends CI_Controller{

     public function __construct()
     {
         parent::__construct();

         $this->load->database('');
         $this->load->helper('url');
         $this->load->library('grocery_CRUD');
         $this->load->library('session');
         $this->load->library('user_agent');
         $this->load->model('Users');
         $data=$this->session->userdata('flexi_auth');
         $group=$this->Users->groupUser($data['user_id']);
         $user=$this->Users->getUserConnected($data['user_id']);
         $this->load->vars(array('user'=>$user));
         if($group!=null){
             $this->load->vars(array('isAdmin'=>$group[0]['uacc_group_fk']));
         }
         $this->load->model('Favorites');
         if($user!=null){
         $favorites=$this->Favorites->getFavoritesUser($user[0]['client_ID']);
         $this->load->vars(array('favorites'=>$favorites));
         }
     }




    // Display Page Home
     public function index()
     {
            // read the last 8 posts with image
         $this->load->model('Posts');
         $posts['resultat']=$this->Posts->readTrendingPosts();
         //read all categories
         $this->load->model('Categorie');
         $cat['resultat']=$this->Categorie->getAllCategoriesPersonalized();
         $this->load->view('headerWithImage');
         $this->load->view('accueil.php',array('posts'=>$posts['resultat'],'categories'=> $cat['resultat']));
         $this->load->view('footer.php');

     }


     public function _post_output($output = null)
     {
         $this->load->view('headerWithImage.php');
         $this->load->view('output.php',(array)$output);
         $this->load->view('footer.php');
     }
     public function _post_table($output = null)
     {
         $this->load->view('headerWithImage.php');
         $this->load->view('tablePost',(array)$output);
         $this->load->view('footer.php');
     }

     public function DisplayOnePost(){
         try{
             $this->load->model('Users');
             $data=$this->session->userdata('flexi_auth');
             $user=$this->Users->getUserConnected($data['user_id']);
             $this->load->vars(array('user'=>$user));
             if($user!=null){
             $crud = new grocery_CRUD();
             $crud->set_theme('flexigrid');
             $crud->set_subject('Post');
             $crud->set_table('mrooglemarket_post');
             //Display on table
             $crud->columns('pub_Name','pub_Code','pub_Price','pub_Photo','client_ID','zone_ID','cat_ID','sub_cat','home_Page','type_Post' );
            //Relation with other table
             $crud->set_relation('zone_ID','mrooglemarket_zone','zone_name');

             //ajax to get id category selected
             $crud->set_relation('cat_ID','mrooglemarket_categorie','cat_name','id_Parent !=',null);
                 $crud->set_rules('sub-cat_ID', 'Select Sub-Category');

                 $this->load->model('Categorie');
                 $sub_cat=$this->Categorie->getSubCategory(3);
                 $data = [];
                 for ( $i = 0; $i < count($sub_cat); $i++ ) {
                     $data += [ $sub_cat[$i]['cat_ID'].','.$sub_cat[$i]['id_Parent'] => $sub_cat[$i]['cat_Name'] ];
                 }
                 $crud->field_type('sub-cat_ID','dropdown',$data);

                 //Display var :
             $crud->display_as('pub_Name','Post Name');
             $crud->display_as('pub_Price','Your Price');
             $crud->display_as('pub_Desc','Your Description');
             $crud->display_as('pub_Photo','Post Photo');
             $crud->display_as('home_Page','Do you want to display on the Home Page?');
             $crud->display_as('client_ID','Client Name');
             $crud->display_as('zone_ID',"Zone");
             $crud->display_as('cat_ID','Category');
             $crud->display_as('sub-cat_ID','Sub-Category');
                 //Upload images
             $crud->set_field_upload('pub_Photo','assets/uploads');
             //Display fields on Add and Edit
             $crud->fields('type_Post','pub_Name','pub_Price','pub_Desc','pub_Photo','sub-cat_ID','cat_ID','zone_ID','home_Page','pub_Code','pub_Views','pub_Time','pub_Date','client_ID');
             //Types Of Fields
             $crud->field_type('pub_Price','integer');
             //Post = True , Need = False
             $crud->field_type('type_Post', 'true_false', array('Need', 'Post'));
             //To display on Home Page
             $crud->field_type('home_Page', 'true_false',array('No','Yes'));
             //To display all categories on select
//             $crud->field_type('category_Name', 'dropdown',array('1'=>'Mobile','2'=>'Electronics & Appliances'));
             //Invisible fields
             $crud->field_type('pub_Code','invisible');
             $crud->field_type('pub_Views','invisible');
             $crud->field_type('client_ID','invisible');
             $crud->field_type('pub_Time','invisible');
             $crud->field_type('pub_Date','invisible');
             //get $subcat

                 //Add
             //Required fields
             $crud->required_fields('type_Post','pub_Name','pub_Price','pub_Desc','zone_ID','home_Page');
             // insert the actual date, time , client and views and post_Code on Table Post
             $crud->callback_before_insert(array($this,'callback_fields'));
             //insert default image
             $crud->callback_after_insert(array($this,'callback_fields_update'));
             //redirect after insert
             $crud->set_lang_string('Insert_success_message',
                         'Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the list page.
		 <script type="text/javascript">
		  window.location = "' .site_url(strtolower(__CLASS__).'/redirect_to_url/'). '";
		 </script>
		 <div style="display:none">
		 '
                     );
             //delete
                 $crud->callback_before_delete(array($this,'favorites_delete'));
             $crud->callback_after_delete(array($this,'redirect_after_delete'));
         //    $crud->add_fields('category','zone_Name','pub_Name','pub_Price','pub_Status','pub_Desc','pub_Photo','cat_ID');
             /*
                          $this->load->model('categorie');
                         $param['resultat']=$this->categorie->readalltable('categorie');
                         var_dump($param['resultat']);
                         $i=0;
                         $p2[$i]=null;
                         foreach ($param['resultat'] as $p){
                             $p[$i]=$param['resultat'][$i]['cat_name'];
                             $p2[$i]=$p[$i];
                             $i++;
                         }*/
         //   $crud->field_type('category','dropdown',$p2);
             $crud->order_by('pub_Price','desc');
             //   $crud->where('pub_ID =',$id);
              /*
               $crud->unset_add();
               $crud->unset_edit();
               $crud->unset_delete();
             */
             // $crud->unset_operations();
             $output = $crud->render();
             $this->_post_output($output);
             }else
             {         $this->load->library('flexi_auth');
                 $this->flexi_auth->set_error_message('You have To Sign In before Add Post', TRUE);
                 $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
                 redirect('auth/login');
             }

         }catch(Exception $e){
             show_error($e->getMessage().' --- '.$e->getTraceAsString());
         }
     }


     // insert the actual date, time , client and views and post_Code on Table Post
     function callback_fields($post_array=null){
         $post_array['pub_Date'] = date('Y-m-d' );
         $post_array['pub_Time'] = date('Y-m-d H:i:s' );
         $post_array['pub_Code'] = 0;
         $data=$this->session->userdata('flexi_auth');
         $this->load->model('Users');
         $user=$this->Users->getUserConnected($data['user_id']);
         $post_array['client_ID'] = $user[0]['client_ID'];
         $post_array['pub_Views'] = 0;
         $post_array['pub_Status'] ='active';
       //  $id = $this->input->post('id');
         //$post_array['cat_ID'] =$id;
         return $post_array;
     }
     //delete favorites
     public function favorites_delete($id){
         $this->load->model('Favorites');
         $this->Favorites->deleteFavorites($id);
     }
     //redirect after delete();
        function redirect_after_delete($id){
            $data=$this->session->userdata('flexi_auth');
            $user=$this->Users->getUserConnected($data['user_id']);
            $this->session->set_flashdata('message', '<div id="Myalert" class="alert alert-success alert-dismissible"   style="position: fixed;width:25%;bottom: 0;right: 0;">
                                <a id="mylink" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <i class="material-icons" style="color:#4CAF50;">check_circle</i>
                                <strong>Success!</strong> Your Post was deleted.
                            </div>
                           <script>
setTimeout(function() {
        $("#Myalert").fadeOut(1000);
    }, 3000);</script>');
        redirect('user/owenPosts/'.$user[0]['client_ID']);
        }
     //insert default image
     function callback_fields_update($post_array,$primary_key){
         $post_array['pub_Status'] ='active';
         if($post_array['pub_Photo']==null){
             $post_array['pub_Photo']  = 'default_img.jpg';
         }
            //Construction Post code
         $date = strtotime($post_array['pub_Time']);
         $code=(string)str_pad($primary_key, 4, '0', STR_PAD_RIGHT)
             .(string)$post_array['cat_ID']
             .(string)date('m', $date)
             .(string)substr(date('Y', $date),2,2);
         $getloc = json_decode(file_get_contents("http://ipinfo.io/"));
         $coordinates = explode(",", $getloc->loc);
         $data = array(
             'pub_Code' =>  $code,
             'pub_Photo'  => $post_array['pub_Photo'] ,
             'pub_GPSLONG'=>$coordinates[0],
             'pub_GPSLAT'=>$coordinates[1]
         );

         $this->load->model('Posts');
         $this->Posts->updateFields($data,$primary_key);
         $this->session->set_userdata('message', '<div id="Myalert" class="alert alert-success alert-dismissible"   style="position: fixed;width:25%;bottom: 0;right: 0;">
                                <a id="mylink" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <i class="material-icons" style="color:#4CAF50;">check_circle</i>
                                <strong>Success!</strong> Your Post was Added.
                            </div>
                           <script>
setTimeout(function() {
        $("#Myalert").fadeOut(1000);
    }, 3000);</script>');
         $this->session->set_flashdata('last_pk', $primary_key);
        return true;
     }

     public function redirect_to_url()
     {
         redirect(base_url('post/readonepost/'.$this->session->flashdata('last_pk')),'refresh');
     }


     public function categories($id)
     {

         //return sub-cat of category selected
         $this->load->model('Categorie');
         $cat['resultat']=$this->Categorie->getAllCategories();
         $category['resultat']=$this->Categorie->getCategoryById($id);
         // return all posts of sub-cat
         $this->load->model('Posts');
         if($id==0){
             $post['resultat']=$this->Posts->readPosts();

         }else{
         $post['resultat']=$this->Posts->selectPostsByCategory($category['resultat'],'recent',2,'');
         }
         $this->load->view('headerWithImage.php');
         $this->load->view('categories.php',array('posts'=>$post['resultat'],'categories'=>  $cat['resultat'],'id_category_initial'=>$id));
         $this->load->view('footer.php');
     }
     //Ajax methode return  posts with specifique category
    public function choiceCat(){
        $id = $this->input->post('id');
        $filter=$this->input->post('filter');
        $type=$this->input->post('type');
        $search=$this->input->post('search');
        //return sub-cat of category selected
        $this->load->model('Categorie');
        $cat['resultat']=$this->Categorie->getCategoryById($id);
        // return all posts of sub-cat
        $this->load->model('Posts');
        $post['resultat']=$this->Posts->selectPostsByCategory($cat['resultat'],$filter,$type,$search);
         echo json_encode($post['resultat']);
    }
    //Ajax methode return all posts
     public function choiceAllCat(){
         $id = $this->input->post('id');
         $filter=$this->input->post('filter');
         $type=$this->input->post('type');
         $search=$this->input->post('search');
         // return all posts of sub-cat
         $this->load->model('Posts');
         $post['resultat']=$this->Posts->readallPostsWithFilter('mrooglemarket_post',$filter,$type,$search);
         echo json_encode($post['resultat']);
     }


     public  function readOnePost($id){
         $this->load->model('Posts');
         $post['resultat']=$this->Posts->getPostById($id);
         $client['resultat']=$this->Posts->getOwnerPost( $post['resultat'][0]['client_ID']);
         $zone['resultat']=$this->Posts->getZonePost( $post['resultat'][0]['zone_ID']);
         $cat['resultat']=$this->Posts->getCatPost( $post['resultat'][0]['cat_ID']);
         $post_featuring['resultat']=$this->Posts->getFeaturingPost( $cat['resultat'][0]['cat_ID'],$post['resultat'][0]['pub_Price'],$post['resultat'][0]['pub_ID']);
         $this->load->model('Posts');
         $this->load->model('Users');
         $number_ads=$this->Posts->numberAdsByOneClient($post['resultat'][0]['client_ID']);
         $dateFirstLogin=$this->Users->getFirstLogin($client['resultat'][0]['uacc_ID']);
         $this->load->view('headerWithImage.php');
         $this->load->view('readOnePost.php',array('post'=>$post['resultat'][0],
         'owner_post'=>$client['resultat'][0],
         'zone'=>$zone['resultat'][0],
         'cat'=>$cat['resultat'][0],
         'post_featuring'=>$post_featuring['resultat'],
         'number_ads'=>$number_ads,
             'dateFirstLogin'=>$dateFirstLogin));
         $this->load->view('footer.php');
     }

     public function report($id){
         $this->load->view('headerWithImage');
         $this->load->view('report');
         $this->load->view('footer');

     }

     public  function changeLang($id){
         $lang=$this->input->post('lang');
         $this->load->model('Users');
         $data=array(
             'client_Language'=>$lang
         );

         $this->Users->changeLang($id,$data);

     }

     public function favorite($pub_ID,$client_ID){
         $fav=$this->input->post('fav');
         $this->load->model('Favorites');
         if($fav=='turned_in'){
                $this->Favorites->deleteFav($pub_ID,$client_ID);
                echo json_encode('delete');
            }
            if($fav=='turned_in_not'){
             $data=array(
                 'client_ID'=>$client_ID,
                 'pub_ID'=>$pub_ID,
                 'fav_Date'=>date('Y-m-d' )
             );
                $this->Favorites->insertFav($data);
                echo json_encode('insert');
            }

     }
     public function tablePost($id){
         try{

                 $crud = new grocery_CRUD();
                 $crud->set_theme('twitter-bootstrap');
                 $crud->set_subject('Post');
                 $crud->set_table('mrooglemarket_post');
                 //Display on table
                 $crud->columns('pub_Name','pub_Code','pub_Price','pub_Photo','pub_Time','zone_ID','cat_ID','sub-cat_ID','type_Post' );
                 //Relation with other table
                 $crud->set_relation('zone_ID','mrooglemarket_zone','zone_name');
                 //ajax to get id category selected
                 $crud->set_relation('cat_ID','mrooglemarket_categorie','cat_name','id_Parent =',null);
             //Display var :
                 $crud->display_as('pub_Name','Post Name');
                 $crud->display_as('pub_Price','Your Price');
                 $crud->display_as('pub_Desc','Your Description');
                 $crud->display_as('pub_Photo','Post Photo');
                 $crud->display_as('home_Page','Do you want to display on the Home Page?');
                 $crud->display_as('client_ID','Client Name');
                 $crud->display_as('zone_ID',"Zone");
                 $crud->display_as('cat_ID','Category');
                 $crud->display_as('sub-cat_ID','Sub-Category');
                 //Upload images
                 $crud->set_field_upload('pub_Photo','assets/uploads');
                 $crud->order_by('pub_Time','ASC');
                 $crud->where('client_ID =',$id);
                 $crud->unset_add();
                 $output = $crud->render();
                 $this->_post_table($output);
         }catch(Exception $e){
             show_error($e->getMessage().' --- '.$e->getTraceAsString());
         }

     }

     public function evaluator($id){
                    $this->load->model('Evaluator');
                    $post_seen=$this->Evaluator->getPostSeen($id);
                    $posts=$this->Evaluator->getPostToEvaluate($post_seen,$id);
                    $post_not_seen=$this->Evaluator->getPostNotSeen($post_seen);
                    $posts_evaluted=$this->Evaluator->evaluatePost($id);
                    $this->load->view('evaluator',array('post_seen'=>$post_seen,
                        'posts'=>$posts,'posts_not_seen'=>$post_not_seen,
                        'posts_evaluted'=>$posts_evaluted));
                    $this->load->view('footer');
     }

     public function evaluatepost($pub_ID){
         $preview = $this->input->post('preview');
         $note = $this->input->post('note');
         $evaluator_note=round($note / 3 );
         $client_ID = $this->input->post('id');
         $this->load->model('Evaluator');
         $data=array(
             'client_ID'=>$client_ID,
             'pub_ID'=>$pub_ID,
             'evaluator_Note'=>$evaluator_note,
             'evaluator_Preview'=>$preview
         );
         $this->Evaluator->addEvaluator($data);
         echo 'work';
     }

    public function postSeen($pub_ID,$client_ID){
        $this->load->model('Evaluator');
        $data=array(
            'client_ID'=>$client_ID,
            'pub_ID'=>$pub_ID,

        );
        $this->Evaluator->markAsSeen($data);

    }
     public function active(){
         $this->load->view('head');
        echo 'Go to your Mail To activate your Account';
     }

 }