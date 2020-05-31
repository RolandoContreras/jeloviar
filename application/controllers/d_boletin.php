<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_boletin extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("boletin_model","obj_boletin");
    }   
                
    public function index(){  
            //GER SESSION
            $this->get_session();
            $params = array(
                        "select" =>"boletin_id,
                                    email,
                                    date,
                                    active",
            );
            //GET DATA COMMENTS
            $obj_boletin= $this->obj_boletin->search($params);
            /// VISTA
            $this->tmp_mastercms->set("obj_boletin",$obj_boletin);
            $this->tmp_mastercms->render("dashboard/boletin/boletin_list");
    }
    
    public function load($boletin_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        
        if ($boletin_id != ""){
            /// PARAM FOR SELECT 
            $where = "boletin_id = $boletin_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_boletin  = $this->obj_boletin->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_boletin",$obj_boletin);
          }
         $this->tmp_mastercms->render("dashboard/boletin/boletin_form");    
    }
    
    public function validate(){
        if ($this->input->is_ajax_request()) {
            //GET CUSTOMER_ID
            $boletin_id = $this->input->post("boletin_id");
            if($boletin_id != null){
                $data = array(
                'email' => $this->input->post('email'),
                'active' => $this->input->post('active'),
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
            );
                //SAVE DATA IN TABLE    
                $result = $this->obj_boletin->update($boletin_id, $data);
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
            $boletin_id = $this->input->post("boletin_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($boletin_id != "") {
                $result = $this->obj_boletin->delete($boletin_id);
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