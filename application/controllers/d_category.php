<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_category extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("category_model","obj_category");
    }   
                
    public function index(){  
            //GER SESSION
            $this->get_session();
            $params = array(
                        "select" =>"category_id,
                                    name,
                                    slug,
                                    date,
                                    active",
            );
            //GET DATA COMMENTS
            $obj_category= $this->obj_category->search($params);
            /// VISTA
            $this->tmp_mastercms->set("obj_category",$obj_category);
            $this->tmp_mastercms->render("dashboard/categorias/category_list");
    }
    
    public function load($category_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        
        if ($category_id != ""){
            /// PARAM FOR SELECT 
            $where = "category_id = $category_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_category  = $this->obj_category->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_category",$obj_category);
          }
         $this->tmp_mastercms->render("dashboard/categorias/category_form");    
    }
    
    public function validate(){
        if ($this->input->is_ajax_request()) {
            //GET CUSTOMER_ID
            $category_id = $this->input->post("category_id");
            $slug = convert_slug($this->input->post("name"));
            if($category_id != null){
                $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'active' => $this->input->post('active'),
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
            );
                //SAVE DATA IN TABLE    
                $result = $this->obj_category->update($category_id, $data);
                if ($result != null) {
                    $data['status'] = true;
                } else {
                    $data['status'] = false;
                }
            }else{
                $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'active' => $this->input->post('active'),
                'date' => date("Y-m-d H:i:s")
                );
                //SAVE DATA IN TABLE    
                $result = $this->obj_category->insert($data);
                if ($result != null) {
                    $data['status'] = true;
                } else {
                    $data['status'] = false;
                }
            }
            
            echo json_encode($data);
        }
    }
    
    public function delete() {
        if ($this->input->is_ajax_request()) {
            //OBETENER customer_id
            $category_id = $this->input->post("category_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($category_id != "") {
                $result = $this->obj_category->delete($category_id);
                if($result != null){
                    $data['status'] = true;
                }else{
                    $data['status'] = false;
                }
            }else{
                $data['status'] = false;
            }
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