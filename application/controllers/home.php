<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("category_model", "obj_category");
        $this->load->model("courses_model", "obj_courses");
        $this->load->model("videos_model", "obj_videos");
        $this->load->model("boletin_model", "obj_boletin");
        $this->load->model("textos_model", "obj_textos");
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
        $data['obj_textos'] = $this->textos_home();
        //obtener todos los cursos DESC
        $params_course = array(
            "select" => "courses.course_id,
                                                courses.category_id,
                                                courses.name,
                                                courses.slug,
                                                courses.top,
                                                courses.type,
                                                courses.top,
                                                courses.time,
                                                courses.img,
                                                courses.description,
                                                courses.free,
                                                courses.price,
                                                courses.price_del,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => "courses.active = 1",
            "order" => "courses.course_id DESC",
            "limit" => "12",
        );
        $data['obj_courses'] = $this->obj_courses->search($params_course);
        //set meta title
        $data['title'] = "Bienvenido | Jeloviar Online";
        $this->load->view('home', $data);
    }

    public function boletin() {
        //ENVIAR MENSAJE DE CORREO
        if ($this->input->is_ajax_request()) {
            $email = $this->input->post("email");
            $param = array(
                'email' => $email,
                'active' => 1,
                'date' => date("Y-m-d H:i:s")
            );
            //SAVE DATA IN TABLE    
            $result = $this->obj_boletin->insert($param);
            if ($result != null) {
                $data['status'] = true;
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
            exit();
        }
    }

    public function term_condition() {
        //get category
        $data['obj_category'] = $this->nav_category();
        $data['obj_textos'] = $this->textos_home();
        $data['title'] = "Terminos y Condiciones | Jeloviar Online";
        $this->load->view('terminos', $data);
    }

    public function policy() {
        //get category
        $data['obj_category'] = $this->nav_category();
        $data['obj_textos'] = $this->textos_home();
        $data['title'] = "Política de privacidad | Jeloviar Online";
        $this->load->view('policy', $data);
    }

    public function cookies() {
        //get category
        $data['obj_category'] = $this->nav_category();
        $data['obj_textos'] = $this->textos_home();
        $data['title'] = "Política de cookies | Jeloviar Online";
        $this->load->view('cookies', $data);
    }

    public function textos_home() {
        $params = array(
            "select" => "*",
            "where" => "texto_id = 1",
        );
        //GET DATA EVENTOS
        return $obj_textos = $this->obj_textos->get_search_row($params);
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
