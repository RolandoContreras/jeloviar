<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model('customer_model','obj_customer');
     $this->load->model("category_model","obj_category");
     $this->load->model("textos_model", "obj_textos");
     $this->load->library('facebook'); 
    } 

    public function index(){
        //get category
        $data['obj_category'] = $this->nav_category();
        $data['obj_textos'] = $this->textos();
        //RUTA GOOGLE
        include_once APPPATH . "libraries/vendor/autoload.php";
        //FACEBOOK
        if ($this->facebook->is_authenticated()) {
            // Get user info from facebook 
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email');
            // Preparing data for database insertion 
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = !empty($fbUser['id']) ? $fbUser['id'] : '';
            $userData['name'] = !empty($fbUser['first_name']) ? $fbUser['first_name'] : '';
            $userData['last_name'] = !empty($fbUser['last_name']) ? $fbUser['last_name'] : '';
            $userData['email'] = !empty($fbUser['email']) ? $fbUser['email'] : '';
            $userData['active'] = 1;
            $userData['country'] = 28;
            //verify data
            if (!empty($userData['oauth_uid']) && !empty($userData['name'])) {
                $result = $this->obj_customer->checkUser($userData);
                if ($result == true) {
                    //get data customer
                    $id = $userData['oauth_uid'];
                    $params = array("select" => "customer.customer_id,
                                                customer.name,
                                                customer.last_name,
                                                customer.email,
                                                customer.active",
                        "where" => "customer.oauth_provider = 'facebook' and oauth_uid = $id");
                    $obj_customer = $this->obj_customer->get_search_row($params);
                    //crear sesión
                    $data_customer_session['customer_id'] = $obj_customer->customer_id;
                    $data_customer_session['name'] = $obj_customer->name;
                    $data_customer_session['last_name'] = $obj_customer->last_name;
                    $data_customer_session['email'] = $obj_customer->email;
                    $data_customer_session['active'] = 1;
                    $data_customer_session['logged_customer'] = "TRUE";
                    $_SESSION['customer'] = $data_customer_session;
                    //verify is isset cart
                    $cart = count($this->cart->contents());
                    if($cart > 0){
                        redirect(site_url() . "backoffice/pay_order");
                        return true;
                    }else{
                        redirect(site_url() . "backoffice");
                        return true;
                    }
                } else {
                    //insert data
                    $user_data = array(
                        'oauth_provider' => 'facebook',
                        'oauth_uid' => $userData['oauth_uid'],
                        'name' => $userData['name'],
                        'last_name' => $userData['last_name'],
                        'email' => $userData['email'],
                        'country' => 29,
                        'date' => date('Y-m-d H:i:s'),
                        'active' => 1,
                        'status_value' => 1
                    );
                    //crear session customer
                    $customer_id = $this->obj_customer->insert($user_data);
                    //create sesion
                    $data_customer_session['customer_id'] = $customer_id;
                    $data_customer_session['name'] = $userData['name'];
                    $data_customer_session['last_name'] = $userData['last_name'];
                    $data_customer_session['email'] = $userData['email'];
                    $data_customer_session['active'] = 1;
                    $data_customer_session['logged_customer'] = "TRUE";
                    $_SESSION['customer'] = $data_customer_session;
                    $this->message($customer_id, $userData['name'], $userData['email']);
                    //redirect
                    $cart = count($this->cart->contents());
                    if($cart > 0){
                        redirect(site_url() . "backoffice/pay_order");
                        return true;
                    }else{
                        redirect(site_url() . "backoffice");
                        return true;
                    }
                }
            } else {
                // Facebook authentication url 
                $data['userData'] = array();
                $data['authURL'] = $this->facebook->login_url();
            }
        } else {
            // Facebook authentication url 
            $data['userData'] = array();
            $data['authURL'] = $this->facebook->login_url();
        }
        
        $google_client = new Google_Client();
        $google_client->setClientId("854470080737-pd0ua8aeno1afqrs340sc8pvtd6j9mnr.apps.googleusercontent.com");
        $google_client->setClientSecret("2JiX9KmOf3_SCEpAFJyCv93T");
        $google_client->setRedirectUri(site_url() . "iniciar-sesion");
        $google_client->addScope('email');
        $google_client->addScope('profile');
        
        if (isset($_GET["code"])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
            if (!isset($token["error"])) {
                $google_client->setAccessToken($token['access_token']);
                $this->session->set_userdata('access_token', $token['access_token']);
                $google_service = new Google_Service_Oauth2($google_client);
                $data = $google_service->userinfo->get();
                $current_datetime = date('Y-m-d H:i:s');
                if ($this->obj_customer->Is_already_register_google($data['id'])) {
                    $id = $data['id'];
                    //get data customer
                    $params = array("select" => "customer.customer_id,
                                                customer.name,
                                                customer.last_name,
                                                customer.email,
                                                customer.active",
                        "where" => "customer.oauth_provider = 'google' and oauth_uid = $id");
                    $obj_customer = $this->obj_customer->get_search_row($params);
                    //crear sesión
                    $data_customer_session['customer_id'] = $obj_customer->customer_id;
                    $data_customer_session['name'] = $obj_customer->name;
                    $data_customer_session['last_name'] = $obj_customer->last_name;
                    $data_customer_session['email'] = $obj_customer->email;
                    $data_customer_session['active'] = 1;
                    $data_customer_session['logged_customer'] = "TRUE";
                    $_SESSION['customer'] = $data_customer_session;
                } else {
                    //insert data
                    $user_data = array(
                        'oauth_provider' => 'google',
                        'oauth_uid' => $data['id'],
                        'name' => $data['given_name'],
                        'last_name' => $data['family_name'],
                        'email' => $data['email'],
                        'country' => 29,
                        'date' => $current_datetime,
                        'active' => 1,
                        'status_value' => 1
                    );
                    //crear session customer
                    $customer_id = $this->obj_customer->insert($user_data);
                    $data_customer_session['customer_id'] = $customer_id;
                    $data_customer_session['name'] = $data['given_name'];
                    $data_customer_session['last_name'] = $data['family_name'];
                    $data_customer_session['email'] = $data['email'];
                    $data_customer_session['active'] = 1;
                    $data_customer_session['logged_customer'] = "TRUE";
                    $_SESSION['customer'] = $data_customer_session;
                    $this->message($customer_id, $data['given_name'], $data['email']);
                }
                $this->session->set_userdata('user_data', $user_data);
            }
        }
        
        
        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img src="' . site_url() . 'assets/page_front/images/google_login.png" width="230"/></a>';
            $data['login_button'] = $login_button;
        } else {
            $cart = count($this->cart->contents());
            if($cart > 0){
                redirect(site_url() . "backoffice/pay_order");
                return true;
            }else{
                redirect(site_url() . "backoffice");
                return true;
            }
        }
        
        //send meta title
        $data['title'] = "Inicio de Sesión | Jeloviar Online";
        // Load login/profile view 
        $this->load->view('login',$data);
    }
        
    public function validate(){
        if (isset($_SERVER['HTTP_ORIGIN'])) {  
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
            header('Access-Control-Allow-Credentials: true');  
            header('Access-Control-Max-Age: 86400');   
        }

            //GET DATA STRING
            $email = $this->input->post("code");
            $pass = $this->input->post("pass");
            //SET PARAMETER
            $params = array("select" =>"customer.customer_id,
                                        customer.name,
                                        customer.email,
                                        customer.active",
                             "where" => "customer.email = '$email' and customer.password = '$pass' and customer.active = 1");
            $obj_customer = $this->obj_customer->get_search_row($params);
            
            if (isset($obj_customer->customer_id) != ""){
                    $data_customer_session['customer_id'] = $obj_customer->customer_id;
                    $data_customer_session['name'] = $obj_customer->name;
                    $data_customer_session['email'] = $obj_customer->email;
                    $data_customer_session['logged_customer'] = "TRUE";
                    $data_customer_session['active'] = $obj_customer->active;
                    $_SESSION['customer'] = $data_customer_session; 
                    //verify cart shop
                    $cart = count($this->cart->contents());
                    if($cart > 0){
                        $data['status'] = "true2";
                    }else{
                        $data['status'] = "true";
                    }
            }else{
                   $data['status'] = "false";
            }
            
            echo json_encode($data); 
            exit(); 
    }

    public function textos() {
        $params = array(
            "select" => "nosotros_footer,
                         text_nosotros_footer,
                         titulo_contacto_footer,
                         email_footer,
                         phone_footer,
                         address_footer",
            "where" => "texto_id = 1",
        );
        //GET DATA EVENTOS
        return $obj_textos = $this->obj_textos->get_search_row($params);
    }
    
    public function nav_category(){
            $params_category = array(
                        "select" =>"category_id,
                                    slug,
                                    name",
                "where" => "active = 1",
            );
            //GET DATA COMMENTS
            return $obj_category = $this->obj_category->search($params_category);
    }
    
    public function logout(){      
        
            // Remove local Facebook session 
            $this->facebook->destroy_session(); 
            // Remove user data from session 
            $this->session->unset_userdata('customer'); 
                        $this->session->destroy();
            // Redirect to login page 
            redirect('home'); 
//        
//            $this->facebook->destroy_session(); 
//            $this->session->unset_userdata('customer');

//            redirect('home'); 
    }
}
