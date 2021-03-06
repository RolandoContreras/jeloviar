<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_courses extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("category_model","obj_category");
        $this->load->model("courses_model","obj_courses");
        $this->load->model("modules_model","obj_modules");
        $this->load->model("teachers_model","obj_teachers");
    }   
                
    public function index(){  
            //GER SESSION
            $this->get_session();
            //SET PARAM
            $params = array(
                        "select" =>"courses.course_id,
                                    courses.name,
                                    courses.category_id,
                                    courses.img,
                                    courses.top,
                                    courses.price,
                                    courses.free,
                                    courses.date,
                                    courses.active,
                                    category.name as category_name,
                                    teachers.teacher_id,
                                    teachers.name as teacher",
                        "join" => array('category, courses.category_id = category.category_id',
                                        'teachers, courses.teacher_id = teachers.teacher_id'),            
            );
            //GET DATA COMMENTS
            $obj_courses = $this->obj_courses->search($params);
            /// VISTA
            $this->tmp_mastercms->set("obj_courses",$obj_courses);
            $this->tmp_mastercms->render("dashboard/cursos/course_list");
    }
    
    public function load($course_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($course_id != ""){
            /// PARAM FOR SELECT 
            $where = "course_id = $course_id";
            $params = array(
                        "select" =>"courses.course_id,
                                    courses.category_id,
                                    courses.name,
                                    courses.slug,
                                    courses.description,
                                    courses.img,
                                    courses.img2,
                                    courses.top,
                                    courses.free,
                                    courses.time,
                                    courses.price,
                                    courses.price_del,
                                    courses.active,
                                    category.name as category_name,
                                    teachers.teacher_id
                                    ",
                        "join" => array('category, courses.category_id = category.category_id',
                                        'teachers, courses.teacher_id = teachers.teacher_id'),    
                        "where" => $where,
            ); 
            $obj_courses  = $this->obj_courses->get_search_row($params); 
            //verificar si tiene modulos
            $param_module = array(
                        "select" =>"module_id,
                                    name",    
                        "where" => "course_id = $course_id",
            ); 
            $obj_modules  = $this->obj_modules->search($param_module); 
            if(count($obj_modules) > 0){
                $this->tmp_mastercms->set("obj_modules",$obj_modules);
            }
            //RENDER
            $this->tmp_mastercms->set("obj_courses",$obj_courses);
          }
          
           //obtener profesores
            $param_teacher = array(
                        "select" =>"teacher_id,
                                    name",    
                        "where" => "active = 1",
            ); 
            $obj_teachers  = $this->obj_teachers->search($param_teacher); 
          //GET CATEGORIES
            $params = array(
                        "select" =>"*",
                         "where" => "active = 1",
            ); 
            $obj_category = $this->obj_category->search($params); 
         
         $this->tmp_mastercms->set("obj_teachers",$obj_teachers); 
         $this->tmp_mastercms->set("obj_category",$obj_category); 
         $this->tmp_mastercms->render("dashboard/cursos/course_form");    
    }
    
    public function validate(){
        
        //GET COURSE_ID
        $course_id = $this->input->post("course_id");
        $img2 = $this->input->post("img2");
        $img3 = $this->input->post("img3");
        
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './assets/cms/img/cursos/';
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
                 }else{
                     unlink("./assets/cms/img/cursos/$img2"); 
                 }   
            }
            
          if(isset($_FILES["image_file2"]["name"])){
                $config['upload_path']          = './assets/cms/img/cursos/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image_file2')){
                         $error = array('error' => $this->upload->display_errors());
                          echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                    }
                $img2 = $_FILES["image_file2"]["name"];        
                 if($img2 == ""){
                     $img2 = $img3;
                 }else{
                     unlink("./assets/cms/img/cursos/$img3"); 
                 } 
            }
            
        if($course_id != ""){
             $data = array(
                'name' => $this->input->post("name"),
                'slug' => convert_slug($this->input->post("name")), 
                'price' => $this->input->post('price'),
                'time' => $this->input->post('time'),
                'free' => $this->input->post('free'),
                'top' => $this->input->post('top'),
                'price_del' => $this->input->post('price_del'),
                'category_id' => $this->input->post('category_id'),
                'description' => $this->input->post('description'),
                'teacher_id' => $this->input->post('teacher_id'), 
                'img' => $img,
                'img2' => $img2,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $this->input->post('active'),  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
             $this->obj_courses->update($course_id, $data);
             //verificar si tiene módulos
             
             //verificar si tiene modulos
            $param_module = array(
                        "select" =>"module_id,name",    
                        "where" => "course_id = $course_id",
            ); 
            $obj_modules  = $this->obj_modules->total_records($param_module); 
            if($obj_modules == 0){
                $modulo = $this->input->post("modulo");
               //get data from moddulo
                if($modulo == 1){
                    $module = $this->input->post("module_1");
                    if(!is_null($module)){
                             $data = array(
                                'name' => $module,
                                'course_id' => $course_id,
                                'date' => date("Y-m-d H:i:s"),  
                                );          
                             $this->obj_modules->insert($data);
                        }
                }else{
                      for ($i = 1; $i <= $modulo; $i++) {
                      $module = $this->input->post("module_$i");
                        if(!is_null($module)){
                             $data = array(
                                'name' => $module,
                                'course_id' => $course_id,
                                'date' => date("Y-m-d H:i:s"),  
                                );          
                             $this->obj_modules->insert($data);
                        }
                    }   
                }
            }
              
             
        }else{
            $data = array(
                'name' => $this->input->post("name"),
                'slug' => convert_slug($this->input->post("name")), 
                'price' => $this->input->post('price'),
                'price_del' => $this->input->post('price_del'),
                'time' => $this->input->post('time'),
                'category_id' => $this->input->post('category_id'),
                'description' => $this->input->post('description'),
                'teacher_id' => $this->input->post('teacher_id'), 
                'img' => $img,
                'img2' => $img2,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $this->input->post('active'),  
                );          
              $course_id = $this->obj_courses->insert($data);        
              //obtner valor de módulo
              $modulo = $this->input->post("modulo");
               //get data from moddulo
                if($modulo == 1){
                    $module = $this->input->post("module_1");
                    if(!is_null($module)){
                             $data = array(
                                'name' => $module,
                                'course_id' => $course_id,
                                'date' => date("Y-m-d H:i:s"),  
                                );          
                             $this->obj_modules->insert($data);
                        }
                }else{
                      for ($i = 1; $i <= $modulo; $i++) {
                      $module = $this->input->post("module_$i");
                        if(!is_null($module)){
                             $data = array(
                                'name' => $module,
                                'course_id' => $course_id,
                                'date' => date("Y-m-d H:i:s"),  
                                );          
                             $this->obj_modules->insert($data);
                        }
                    }   
                } 
        }    
        redirect(site_url()."dashboard/cursos");
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