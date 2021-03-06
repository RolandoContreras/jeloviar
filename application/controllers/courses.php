<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("category_model", "obj_category");
        $this->load->model("courses_model", "obj_courses");
        $this->load->model("modules_model", "obj_modules");
        $this->load->model("videos_model", "obj_videos");
        $this->load->model("textos_model", "obj_textos");
        $this->load->model("archives_model", "obj_archives");
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
    public function index($search_type = null) {
        //get categorías
        $data['obj_category'] = $this->nav_category();
        $data['obj_textos'] = $this->textos();
        //buscar por curso
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $where = "courses.name like '%$search%' and courses.active = 1";
        } else {
            $where = "courses.active = 1";
        }

        //get all courses
        $params_course = array(
            "select" => "courses.course_id,
                                                courses.category_id,
                                                courses.name,
                                                courses.slug,
                                                courses.top,
                                                courses.description,
                                                courses.img,
                                                courses.type,
                                                courses.price,
                                                courses.free,
                                                courses.price_del,
                                                courses.date,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => $where,
            "order" => "courses.course_id DESC",
        );

        /// PAGINADO
        $config = array();
        $config["base_url"] = site_url("cursos");
        $config["total_rows"] = $this->obj_courses->total_records($params_course);
        $config["per_page"] = 12;
        $config["num_links"] = 1;
        $config["uri_segment"] = 2;

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span aria-current="page" class="page-numbers current">';
        $config['cur_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['obj_pagination'] = $this->pagination->create_links();
        /// DATA
        $data['obj_courses'] = $this->obj_courses->search_data($params_course, $config["per_page"], $this->uri->segment(2));
        //send total row
        $data['total'] = $config["total_rows"];
        //SEND DATA
        $data['title'] = "Todos los Cursos | Jeloviar Online";
        //view
        $this->load->view('courses', $data);
    }

    public function category($slug) {
        //obtener todos los cursos top DESC
        //get coruse category
        $data['obj_category'] = $this->nav_category();
        $data['obj_textos'] = $this->textos();
        $params_course = array(
            "select" => "courses.course_id,
                                                courses.category_id,
                                                courses.name,
                                                courses.slug,
                                                courses.top,
                                                courses.type,
                                                courses.img,
                                                courses.date,
                                                courses.free,
                                                courses.price,
                                                courses.price_del,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => "courses.top = 1 and courses.active = 1",
            "order" => "courses.course_id DESC",
        );
        $data['obj_courses_top'] = $this->obj_courses->search($params_course);
        //get category_id
        $params_categogory_id = array(
            "select" => "category_id,
                                    name",
            "where" => "slug like '%$slug%'");
        $obj_category = $this->obj_category->get_search_row($params_categogory_id);
        $category_id = $obj_category->category_id;
        //get all courses
        $params_course = array(
            "select" => "courses.course_id,
                                                courses.category_id,
                                                courses.name,
                                                courses.slug,
                                                courses.description,
                                                courses.img,
                                                courses.top,
                                                courses.type,
                                                courses.free,
                                                courses.price,
                                                courses.price_del,
                                                courses.date,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => "courses.category_id = $category_id and courses.active = 1",
            "order" => "courses.course_id DESC",
        );

        /// PAGINADO
        $config = array();
        $config["base_url"] = site_url("cursos/$slug");
        $config["total_rows"] = $this->obj_courses->total_records($params_course);
        $config["per_page"] = 12;
        $config["num_links"] = 1;
        $config["uri_segment"] = 2;

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span aria-current="page" class="page-numbers current">';
        $config['cur_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['obj_pagination'] = $this->pagination->create_links();
        /// DATA
        $data['obj_courses'] = $this->obj_courses->search_data($params_course, $config["per_page"], $this->uri->segment(2));
        //send total row
        $data['total'] = $config["total_rows"];
        //SEND DATA
        $data['title'] = "Cursos | $obj_category->name | Jeloviar Online";
        $this->load->view('courses', $data);
    }

    public function detail($slug) {
        //get category
        $data['obj_category'] = $this->nav_category();
        $data['obj_textos'] = $this->textos();
        //GET COURSE
        $url = explode("/", uri_string());
        $slug_2 = $url[2];
        //select curso_id
        $params = array(
            "select" => "course_id",
            "where" => "courses.slug = '$slug_2'");
        $obj_courses = $this->obj_courses->get_search_row($params);
        $course_id = $obj_courses->course_id;
        //get course
        $params = array(
            "select" => "courses.course_id,
                                        courses.category_id,
                                        courses.name,
                                        courses.slug,
                                        courses.description,
                                        courses.img2,
                                        courses.img,
                                        courses.price,
                                        courses.free,
                                        courses.price_del,
                                        courses.time,
                                        courses.date,
                                        (SELECT count(*) FROM (customer_courses) WHERE course_id =  $course_id) as total_enrolados,
                                        category.name as category_name,
                                        category.slug as category_slug,
                                        teachers.name as teacher",
            "join" => array('category, courses.category_id = category.category_id',
                'teachers, courses.teacher_id = teachers.teacher_id'),
            "where" => "courses.slug = '$slug_2'");
        $data['obj_courses'] = $this->obj_courses->get_search_row($params);
        $obj_courses_meta = $data['obj_courses'];
        $course_id = $data['obj_courses']->course_id;
        //obtener modulos por cursos
        $params = array(
            "select" => "module_id,
                                        name",
            "where" => "course_id = $course_id");
        $data['obj_modules'] = $this->obj_modules->search($params);
        $data['total_modules'] = count($data['obj_modules']);
        //establecer modulos id para busqqueda
        $array_data = "";
        foreach ($data['obj_modules'] as $value) {
            $array_data .= $value->module_id . ",";
        }
        $array_data = eliminar_ultimo_caracter($array_data);
        //GET videos by course
        $params = array(
            "select" => "videos.video_id,
                                        videos.name,
                                        videos.module_id,
                                        videos.video,
                                        videos.type,
                                        videos.slug,
                                        videos.time",
            "where" => "videos.module_id in ($array_data) and videos.active = 1",
            "order" => "videos.video_id ASC");
        $data['obj_videos'] = $this->obj_videos->search($params);
        //obtener el total de los vídeos
        $data['total_videos'] = count($data['obj_videos']);
        //get category_id
        $params_categogory_id = array(
            "select" => "category_id",
            "where" => "slug like '%$slug%'");
        $obj_category = $this->obj_category->get_search_row($params_categogory_id);
        $category_id = $obj_category->category_id;
        //obetner vídeos relacionados
        $params = array(
            "select" => "courses.course_id,
                                        courses.category_id,
                                        courses.name,
                                        courses.slug,
                                        courses.img,
                                        courses.price,
                                        courses.price_del,
                                        courses.date,
                                        category.name as category_name,
                                        category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => "courses.category_id = $category_id and courses.course_id <> $course_id",
            "order" => "RAND()"
        );
        $data['obj_courses_related'] = $this->obj_courses->search($params);
        //get archives
        $params = array(
            "select" => "archive_id,
                         name,
                         course_id,
                         content",
            "where" => "course_id = $course_id and active = 1",
        );
        $data['obj_archives'] = $this->obj_archives->search($params);
        //meta title
        $obj_courses_meta = $data['obj_courses'];
        //SEND DATA META OG: FACEBOOK
        $data['title'] = "Cursos | $obj_courses_meta->category_name | $obj_courses_meta->name";
        $data['meta_description_og'] = "$obj_courses_meta->description";
        $data['meta_img_og'] = site_url() . "assets/cms/img/cursos/$obj_courses_meta->img";
        //view
        $this->load->view('courses_detail', $data);
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
