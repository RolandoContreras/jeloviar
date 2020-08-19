<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("customer_model", "obj_customer");
        $this->load->model("category_model", "obj_category");
        $this->load->model("textos_model", "obj_textos");
        $this->load->model("paises_model", "obj_paises");
        $this->load->library("facebook");
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
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
                    //redirect
                    redirect(site_url() . "backoffice");
                    return true;
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
                    redirect(site_url() . "backoffice");
                    return true;
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
        
        //google
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
            redirect(site_url() . "backoffice");
        }
        //Select params
        $data['obj_paises'] = $this->list_pais();
        $data['title'] = "Nuevo Registro | Jeloviar Online";
        /// VIEW
        $this->load->view("register", $data);
    }

    public function validate() {
        if ($this->input->is_ajax_request()) {
            //VALIDATE USERNAME
            $email = $this->input->post("email");
            $result = $this->validate_username_register($email);
            if ($result == 1) {
                $data['status'] = "email";
            } else {
                $name = trim($this->input->post("name"));
                //INSERT TABLE CUSTOMER
                $data = array(
                    'name' => $name,
                    'last_name' => trim($this->input->post("last_name")),
                    'email' => $email,
                    'password' => trim($this->input->post("pass")),
                    'phone' => $this->input->post("phone"),
                    'country' => $this->input->post("country"),
                    'date' => date("Y-m-d H:i:s"),
                    'active' => 1,
                    'status_value' => 1
                );
                $customer_id = $this->obj_customer->insert($data);
                //create session
                $data_customer_session['customer_id'] = $customer_id;
                $data_customer_session['name'] = $name;
                $data_customer_session['email'] = $email;
                $data_customer_session['active'] = 1;
                $data_customer_session['logged_customer'] = "TRUE";
                $_SESSION['customer'] = $data_customer_session;

                $cart = count($this->cart->contents());
                if ($cart > 0) {
                    $data['status'] = "success2";
                } else {
                    $data['status'] = "success";
                }
                $this->message($name, $email);
            }
            //CREAR NUEVA SECION 
            echo json_encode($data);
        }
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

    public function message($name, $email) {
        $mensaje = wordwrap("<html>
                    
 <div bgcolor='#E9E9E9' style='background:#fff;margin:0;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
  <table style='background-color:#fff;border-collapse:collapse;margin:0;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'
    align='center'>
    <tbody>
      <tr>
        <td valign='top' align='center'>
          <table style='border-collapse:collapse;margin:0;padding:0;max-width:600px' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
            <tbody>
              <tr>
                <td style='padding:39px 30px 31px;display:block;background:#fafafa'> 
                <p style='padding:32px 32px 0;color:#333333;background:#fff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;line-height:14px;margin:0;font-size:14px;border-radius:5px 5px 0 0'
                    align='left'>Hola $name,</p> 
                </td>
              </tr>
              <tr>
                <td style='padding:0 30px;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                    <tbody>
                      <tr>
                        <td style='padding:0;background-color:#fff;border-radius:0 0 5px 5px;padding:32px'>
                          <p style='margin:0;padding-bottom:20px;color:#333333;line-height:22px;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                          Bienvenido a JELOVIARONLINE.COM nos da gusto que seas parte de nuestra comunidad, accede a tu oficina virtual a través del siguiente enlace  <a href='https://jeloviaronline.com/login' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://http://jeloviaronline.com/login&amp;source=gmail&amp;ust=1575431368630000&amp;usg=AFQjCNE2bxZM6aRU9Ckhj6hvz9ZXHzwzyA'>jeloviaronline.com/login</a> <br/>Encuentra aquí tus credenciales de ingreso. </p>
                          <p style='margin:0 0 24px;padding:16px;border-radius:5px;padding-bottom:20px;background:#f7f7f7;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                          <span style='display:block;padding-bottom:8px'><span style='width:101px;display:inline-block'>Usuario: </span><strong>$email</strong></span>
                          </p> 
                          <a href='https://jeloviaronline.com/login' style='background:#2d6ced;color:#ffffff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px;display:inline-block;padding:12px 17px;text-decoration:none;border-radius:5px'
                            target='_blank'>Iniciar Sesión</a>                          
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td style='padding:30px 30px 0;display:block;background:#fafafa'>
                  <table style='width:100%;border-collapse:collapse;padding:0;text-align:center' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                    <tbody>
                      <tr>
                        <td style='max-width:290px;display:inline-block;padding:0 19px 30px;box-sizing:border-box;text-align:left'>
                          <p style='margin:0;text-align:center;line-height:20px;color:#888888;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:12px'>
                          Visítanos en  <a href='https://jeloviaronline.com' style='color:#2d6ced;text-decoration:none' target='_blank'>www.jeloviaronline.com</a></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
                            .</html>", 70, "\n", true);
        $titulo = "Bienvenido - [JELOVIAR ONLINE]";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: JELOVIAR ONLINE <contacto@jeloviaronline.com>\r\n";
        $bool = mail("$email", $titulo, $mensaje, $headers);
    }

    public function list_pais() {
        //Select params
        $params = array(
            "select" => "id, nombre",
            "where" => "id_idioma = 7");
        $obj_paises = $this->obj_paises->search($params);
        return $obj_paises;
    }

    public function validate_username_register($email) {
        //SELECT ID FROM CUSTOMER
        $param_customer = array(
            "select" => "customer_id",
            "where" => "email = '$email'");
        $customer = $this->obj_customer->total_records($param_customer);
        if ($customer > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function nav_category() {
        $params_category = array(
            "select" => "category_id,
                                    slug,
                                    name",
            "where" => "active = 1",
        );
        //GET DATA COMMENTS
        return $obj_category = $this->obj_category->search($params_category);
    }

}
