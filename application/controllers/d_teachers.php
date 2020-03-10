<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_teachers extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("teachers_model","obj_teacher");
    }   
                
    public function index(){  
            //GER SESSION
            $this->get_session();
            //SET PARAM
            $params = array(
                        "select" =>"teacher_id,
                                    name,
                                    profetion,
                                    img,
                                    date,
                                    active",
            );
            //GET DATA COMMENTS
            $obj_teachers = $this->obj_teacher->search($params);
            /// VISTA
            $this->tmp_mastercms->set("obj_teachers",$obj_teachers);
            $this->tmp_mastercms->render("dashboard/profesores/teacher_list");
    }
    
    public function load($teacher_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($teacher_id != ""){
            /// PARAM FOR SELECT 
            $where = "teacher_id = $teacher_id";
            $params = array(
                        "select" =>"*",
                        "where" => $where,
            ); 
            $obj_teacher  = $this->obj_teacher->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_teacher",$obj_teacher);
          }
         $this->tmp_mastercms->render("dashboard/profesores/teacher_form");    
    }
    
    public function validate(){
        
        //GET COURSE_ID
        $teacher_id = $this->input->post("teacher_id");
        $img2 = $this->input->post("img2");
        
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './assets/cms/img/profesores/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image_file')){
                         $error = array('error' => $this->upload->display_errors());
                          echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                    }
                $img = $_FILES["image_file"]["name"];        
                 if($img == ""){
                     $img = $img2;
                 }   
            }
            
        if($teacher_id != ""){
             $data = array(
                'name' => $this->input->post("name"),
                'profetion' => $this->input->post("profetion"), 
                'description' => $this->input->post('description'),
                'twiter' => $this->input->post('twiter'),
                'facebook' => $this->input->post('facebook'),
                'instagram' => $this->input->post('instagram'),
                'img' => $img,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $this->input->post('active'),  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
             $this->obj_teacher->update($teacher_id, $data);
        
        }else{
            $data = array(
                'name' => $this->input->post("name"),
                'profetion' => $this->input->post("profetion"), 
                'description' => $this->input->post('description'),
                'twiter' => $this->input->post('twiter'),
                'facebook' => $this->input->post('facebook'),
                'instagram' => $this->input->post('instagram'),
                'img' => $img,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $this->input->post('active'),  
                );          
              $this->obj_teacher->insert($data);        
        }    
        redirect(site_url()."dashboard/profesores");
    }
    
    public function delete(){
         if ($this->input->is_ajax_request()) {
             //OBETENER MARCA_ID
             $course_id = $this->input->post("course_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($course_id != ""){
                $this->obj_courses->delete($course_id);
            }
            $data['status'] = true;
            echo json_encode($data);
        }       
    }
    
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE"){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>