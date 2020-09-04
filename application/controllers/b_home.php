<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class B_home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("customer_model", "obj_customer");
        $this->load->model("videos_model", "obj_videos");
        $this->load->model("category_model", "obj_category");
        $this->load->model("courses_model", "obj_courses");
        $this->load->model("invoices_model", "obj_invoices");
        $this->load->model("modules_model", "obj_modules");
        $this->load->model("customer_courses_model", "obj_customer_courses");
        $this->load->model("textos_model", "obj_textos");
        $this->load->library("culqi");
    }

    public function index() {
        //GET SESION ACTUALY
        $this->get_session();
        $obj_textos = $this->textos();
        //get customer id
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET NAV CURSOS
        $obj_category = $this->nav_category();
        //get profile
        $obj_profile = $this->get_profile($customer_id);
        //get cursos comprados
        $obj_courses_by_customer = $this->courses_by_customer($customer_id);
        //get porcent of curse
        $params_customer_courses = array(
            "select" => "customer_courses.date_start,
                         category.name as category_name",
            "join" => array('customer, customer_courses.customer_id = customer.customer_id',
                'courses, customer_courses.course_id = courses.course_id',
                'category, courses.category_id = category.category_id'),
            "where" => "customer.customer_id = $customer_id",
            "order" => "courses.course_id DESC",
        );
        $obj_customer_courses = $this->obj_customer_courses->search($params_customer_courses);
        //mis compras
        $obj_orders = $this->mis_pedidos($customer_id);
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $where = "courses.name like '%$search%' and courses.active = 1";
        } else {
            $where = "courses.active = 1";
        }
        $category_name = "Todos los videos";
        //get all courses
        $params_course = array(
            "select" => "courses.course_id,
                        courses.category_id,
                        courses.name,
                        courses.slug,
                        courses.description,
                        courses.img,
                        courses.price,
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
        $config["base_url"] = site_url("backoffice");
        $config["total_rows"] = $this->obj_courses->total_records($params_course);
        $config["per_page"] = 12;
        $config["num_links"] = 1;
        $config["uri_segment"] = 2;

        $config['first_tag_open'] = '<li class="paginate_button page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="paginate_button page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="paginate_button page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class=" paginate_button page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item">';
        $config['next_tag_close'] = '</a></li>';
        $config['last_tag_open'] = '<li class="paginate_button page-item">';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $obj_pagination = $this->pagination->create_links();
        /// DATA
        $obj_courses = $this->obj_courses->search_data($params_course, $config["per_page"], $this->uri->segment(2));
        //GET DATA CURSOS COMPRADOS
        $this->tmp_backoffice->set("obj_textos", $obj_textos);
        $this->tmp_backoffice->set("obj_orders", $obj_orders);
        $this->tmp_backoffice->set("obj_profile", $obj_profile);
        $this->tmp_backoffice->set("category_name", $category_name);
        $this->tmp_backoffice->set("obj_pagination", $obj_pagination);
        $this->tmp_backoffice->set("obj_category", $obj_category);
        $this->tmp_backoffice->set("obj_courses_by_customer", $obj_courses_by_customer);
        $this->tmp_backoffice->set("obj_courses", $obj_courses);
        $this->tmp_backoffice->render("backoffice/b_home");
    }

    public function cursos() {
        //GET SESION ACTUALY
        $this->get_session();
        //GET NAV CURSOS
        $data['obj_category'] = $this->nav_category();
        //get profile
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
                                                courses.description,
                                                courses.img,
                                                courses.price,
                                                courses.price_del,
                                                courses.date,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => "courses.active = 1",
        );

        /// PAGINADO
        $config = array();
        $config["base_url"] = site_url("backoffice/cursos");
        $config["total_rows"] = $this->obj_courses->total_records($params_course);
        $config["per_page"] = 12;
        $config["num_links"] = 1;
        $config["uri_segment"] = 2;
        $config['first_tag_open'] = '<li class="paginate_button page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="paginate_button page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="paginate_button page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class=" paginate_button page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item">';
        $config['next_tag_close'] = '</a></li>';
        $config['last_tag_open'] = '<li class="paginate_button page-item">';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $obj_pagination = $this->pagination->create_links();
        /// DATA
        $data['obj_courses'] = $this->obj_courses->search_data($params_course, $config["per_page"], $this->uri->segment(2));
        //GET DATA CURSOS COMPRADOS
//        $this->tmp_backoffice->set("obj_pagination", $obj_pagination);
        $this->load->view("backoffice/b_cursos", $data);
    }

    public function category($slug) {
        $this->get_session();
        //get customer id
        $customer_id = $_SESSION['customer']['customer_id'];
        //GET NAV CURSOS
        $obj_category_videos = $this->nav_category();
        //get courses by customer
        $obj_courses_by_customer = $this->courses_by_customer($customer_id);
        //get data catalog
        $params_categogory_id = array(
            "select" => "category_id,
                                    name",
            "where" => "slug like '%$slug%'");
        $obj_category = $this->obj_category->get_search_row($params_categogory_id);
        $category_id = $obj_category->category_id;

        //get courses by category
        $params = array(
            "select" => "courses.course_id,
                                                courses.category_id,
                                                courses.name,
                                                courses.slug,
                                                courses.description,
                                                courses.img,
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
        $config["base_url"] = site_url("backoffice/$slug");
        $config["total_rows"] = $this->obj_courses->total_records($params);
        $config["per_page"] = 12;
        $config["num_links"] = 1;
        $config["uri_segment"] = 3;

        $config['first_tag_open'] = '<li class="paginate_button page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="paginate_button page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="paginate_button page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class=" paginate_button page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item">';
        $config['next_tag_close'] = '</a></li>';
        $config['last_tag_open'] = '<li class="paginate_button page-item">';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $obj_pagination = $this->pagination->create_links();
        /// DATA
        $obj_courses = $this->obj_courses->search_data($params, $config["per_page"], $this->uri->segment(3));
        //SEND DATA
        $category_name = "Cursos de $obj_category->name";
        $url = 'backoffice';
        $this->tmp_backoffice->set("url", $url);
        $this->tmp_backoffice->set("obj_courses_by_customer", $obj_courses_by_customer);
        $this->tmp_backoffice->set("category_name", $category_name);
        $this->tmp_backoffice->set("obj_pagination", $obj_pagination);
        $this->tmp_backoffice->set("obj_category_videos", $obj_category_videos);
        $this->tmp_backoffice->set("obj_courses", $obj_courses);
        $this->tmp_backoffice->render("backoffice/b_home");
    }

    public function detail($slug) {
        //get nav cursos
        $obj_category_videos = $this->nav_category();
        //get customer id
        $customer_id = $_SESSION['customer']['customer_id'];
        $obj_courses_by_customer = $this->courses_by_customer($customer_id);
        //get data video
        $url = explode("/", uri_string());
        $slug_2 = $url[2];
        //get course
        $params = array(
            "select" => "courses.course_id,
                                        courses.category_id,
                                        courses.name,
                                        courses.slug,
                                        courses.description,
                                        courses.img2,
                                        courses.price,
                                        courses.price_del,
                                        courses.date,
                                        category.name as category_name,
                                        category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => "courses.slug = '$slug_2' and category.slug = '$slug'");
        $obj_courses = $this->obj_courses->get_search_row($params);
        $course_id = $obj_courses->course_id;
        //obtener modulos por cursos
        $params = array(
            "select" => "module_id,
                                        name",
            "where" => "course_id = $course_id");
        $obj_modules = $this->obj_modules->search($params);
        //establecer modulos id para busqqueda
        $array_data = "";
        foreach ($obj_modules as $value) {
            $array_data .= $value->module_id . ",";
        }
        $array_data = eliminar_ultimo_caracter($array_data);
        //GET videos by course
        $params = array(
            "select" => "videos.video_id,
                                        videos.name,
                                        videos.module_id,
                                        videos.video,
                                        videos.date,
                                        videos.type,
                                        videos.slug,
                                        videos.time",
            "where" => "videos.module_id in ($array_data) and videos.active = 1",
            "order" => "videos.video_id ASC");
        $obj_videos = $this->obj_videos->search($params);
        //cursos relacionados            
        $params = array(
            "select" => "courses.course_id,
                                        courses.category_id,
                                        courses.name,
                                        courses.slug,
                                        courses.img,
                                        courses.description,
                                        courses.price,
                                        courses.price_del,
                                        courses.date,
                                        category.name as category_name,
                                        category.slug as category_slug",
            "join" => array('category, courses.category_id = category.category_id'),
            "where" => "category.slug = '$slug' and courses.course_id <> $course_id",
            "order" => "RAND()"
        );
        $obj_courses_related = $this->obj_courses->search($params);

        //SEND DATA
        $this->tmp_backoffice->set("obj_courses_by_customer", $obj_courses_by_customer);
        $this->tmp_backoffice->set("obj_modules", $obj_modules);
        $this->tmp_backoffice->set("obj_videos", $obj_videos);
        $this->tmp_backoffice->set("obj_courses_related", $obj_courses_related);
        $this->tmp_backoffice->set("obj_category_videos", $obj_category_videos);
        $this->tmp_backoffice->set("obj_courses", $obj_courses);
        $this->tmp_backoffice->render("backoffice/b_detail");
    }

    public function add_cart() {
        if ($this->input->is_ajax_request()) {
            //GET CUSTOMER_ID
            $price = $this->input->post('price');
            $course_id = $this->input->post('course_id');
            $quantity = 1;
            $name = $this->input->post('name');
            $name_cart = convert_slug_cart($name);
            $img = $this->input->post('img');
            //ADD CART
            if ($quantity > 0) {
                $data = array(
                    'id' => $course_id,
                    'qty' => $quantity,
                    'price' => $price,
                    'name' => "$name_cart",
                    'img' => "$img",
                );
                $cart_id = $this->cart->insert($data);
                if ($cart_id != "") {
                    $data['status'] = "true";
                } else {
                    $data['status'] = "false";
                }
            } else {
                $data['status'] = "false";
            }
            echo json_encode($data);
        }
    }

    public function add_cart_free() {
        if ($this->input->is_ajax_request()) {
            //GET CUSTOMER_ID
            $course_id = $this->input->post('course_id');
            $name = $this->input->post('name');
            $img = $this->input->post('img');
            $name_cart = convert_slug_cart($name);
            //ADD CART
            $data_cart = array(
                'id' => $course_id,
                'qty' => 1,
                'free' => 1,
                'price' => 1,
                'img' => $img,
                'name' => "$name_cart",
            );
            $cart_id = $this->cart->insert($data_cart);
            if ($cart_id != "") {
                $data['status'] = true;
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
        }
    }

    public function pay_order() {
        //GET SESION ACTUALY
        $this->get_session_pay_order();
        $obj_textos = $this->textos();
        //get customer id
        $customer_id = $_SESSION['customer']['customer_id'];
        //get profile
        $obj_profile = $this->get_profile($customer_id);
        //get nav ctalogo
        $obj_category = $this->nav_category();
        //get cursos comprados
        $obj_courses_by_customer = $this->courses_by_customer($customer_id);
        //verify course free
        $count = count($this->cart->contents());
        if ($count == 1) {
            foreach ($this->cart->contents() as $items) {
                if ($items['free'] == 1) {
                    //CREATE INVOICE
                    $data_invoice = array(
                        'customer_id' => $customer_id,
                        'course_id' => $items['id'],
                        'sub_total' => $items['price'],
                        'igv' => 0,
                        'total' => $items['price'],
                        'date' => date("Y-m-d H:i:s"),
                        'active' => 2,
                    );
                    $this->obj_invoices->insert($data_invoice);
                    //inser on customer_course
                    $data = array(
                        'customer_id' => $customer_id,
                        'course_id' => $items['id'],
                        'date_start' => date("Y-m-d H:i:s")
                    );
                    $this->obj_customer_courses->insert($data);
                    redirect(site_url().'backoffice');
                }
            }
        }
        //SEND DATA
        $this->tmp_backoffice->set("obj_textos", $obj_textos);
        $this->tmp_backoffice->set("obj_courses_by_customer", $obj_courses_by_customer);
        $this->tmp_backoffice->set("obj_category", $obj_category);
        $this->tmp_backoffice->set("obj_profile", $obj_profile);
        $this->tmp_backoffice->render("backoffice/b_pay_order");
    }

    public function active_course() {
        //ACTIVE CUSTOMER NORMALY
        try {
            //GET SESION ACTUALY
            $this->get_session();
            //get customer
            $customer_id = $_SESSION['customer']['customer_id'];
            $price_cart = $this->cart->format_number($this->cart->total());
            $price = $this->input->post('price');
            $token = $this->input->post('token');
            $email = $this->input->post('email');
            //obtener día de hoy
            $today = date("Y-m-d");
            //make charged
            $charge = $this->culqi->charge($token, $price, $email);

            $price_cart = explode(".", $price_cart);
            $price = $price_cart[0];
            $price = quitar_coma_number($price);
            //INSERT INVOICE

            foreach ($this->cart->contents() as $items) {
                //CREATE INVOICE
                $data_invoice = array(
                    'customer_id' => $customer_id,
                    'course_id' => $items['id'],
                    'sub_total' => $items['price'],
                    'igv' => 0,
                    'total' => $items['price'],
                    'date' => date("Y-m-d H:i:s"),
                    'active' => 2,
                );
                $invoice_id = $this->obj_invoices->insert($data_invoice);
                $course_id = $items['id'];
                //sumar el tiempo de duración
                $data = array(
                    'customer_id' => $customer_id,
                    'course_id' => $items['id'],
                    'date_start' => date("Y-m-d H:i:s")
                );
                $this->obj_customer_courses->insert($data);
            }
            //DESTROY CART
            $this->cart->destroy();
            // Respuesta
            $data['status'] = true;
            echo json_encode($charge);
        } catch (Exception $e) {
            $data['status'] = false;
            echo json_encode($e->getMessage());
        }
    }

    public function delete_cart() {

        if ($this->input->is_ajax_request()) {
            //GET SESION ACTUALY
            $this->get_session();
            //GET CUSTOMER_ID

            $id = $this->input->post('id');
            //UPDATE CART
            $data = array(
                'rowid' => "$id",
                'qty' => 0
            );

            $this->cart->update($data);

            $data['status'] = "true";
            echo json_encode($data);
        }
    }

    public function nav_category() {
        $params_category = array(
            "select" => "category_id,
                                    slug,
                                    backoffice,
                                    name",
            "where" => "active = 1",
        );
        //GET DATA COMMENTS
        return $obj_category = $this->obj_category->search($params_category);
    }

    public function mis_pedidos($customer_id) {
        //GET DATA INVOICES BY CUSTOMER
        $params = array(
            "select" => "invoices.invoice_id,
                                        invoices.date,
                                        invoices.total,
                                        invoices.active,
                                        courses.name as course_name",
            "where" => "invoices.customer_id = $customer_id",
            "join" => array('courses, courses.course_id = invoices.course_id'),
            "order" => "invoices.invoice_id DESC",
        );

        return $obj_invoices = $this->obj_invoices->search($params);
    }

    public function get_profile($customer_id) {
        $params_category = array(
            "select" => "
                                    customer_id,
                                    name,
                                    last_name,
                                    bio,
                                    facebook,
                                    twitter,
                                    img,
                                    instagram,
                                    google,
                                    img",
            "where" => "customer_id = $customer_id and status_value = 1",
        );
        //GET DATA COMMENTS
        return $obj_customer = $this->obj_customer->get_search_row($params_category);
    }

    public function courses_by_customer($customer_id) {
        $params_customer_courses = array(
            "select" => "customer_courses.date_start,
                        courses.course_id,
                        courses.category_id,
                        courses.name,
                        courses.slug,
                        courses.time,
                        customer_courses.total_video,
                        customer_courses.total,
                        courses.description,
                        courses.img,
                        courses.price,
                        courses.date,
                        customer.customer_id,
                        category.slug as category_slug,
                        category.name as category_name",
            "join" => array('customer, customer_courses.customer_id = customer.customer_id',
                'courses, customer_courses.course_id = courses.course_id',
                'category, courses.category_id = category.category_id'),
            "where" => "customer.customer_id = $customer_id",
            "order" => "courses.course_id DESC",
        );
        return $obj_customer_courses = $this->obj_customer_courses->search($params_customer_courses);
    }

    public function update_data() {
        if ($this->input->is_ajax_request()) {
            //GET SESION ACTUALY
            $this->get_session();
            //get customer id
            $customer_id = $_SESSION['customer']['customer_id'];
            $bio = $this->input->post("bio");
            $facebook = trim($this->input->post("facebook"));
            $google = trim($this->input->post("google"));
            $twitter = trim($this->input->post("twitter"));
            $instagram = trim($this->input->post("instagram"));

            if ($customer_id != null) {
                $data = array(
                    'bio' => $bio,
                    'facebook' => $facebook,
                    'google' => $google,
                    'twitter' => $twitter,
                    'instagram' => $instagram,
                );
                //SAVE DATA IN TABLE    
                $result = $this->obj_customer->update($customer_id, $data);
                if ($result != null) {
                    $data['status'] = true;
                } else {
                    $data['status'] = false;
                }
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
        }
    }

    public function change_pass() {
        if ($this->input->is_ajax_request()) {
            //GET SESION ACTUALY
            $this->get_session();
            //get customer id
            $customer_id = $_SESSION['customer']['customer_id'];
            $pass = trim($this->input->post("pass"));
            if ($customer_id != null) {
                $data = array(
                    'password' => $pass,
                );
                //SAVE DATA IN TABLE    
                $result = $this->obj_customer->update($customer_id, $data);
                if ($result != null) {
                    $data['status'] = true;
                } else {
                    $data['status'] = false;
                }
            } else {
                $data['status'] = false;
            }
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

    public function get_session() {
        if (isset($_SESSION['customer'])) {
            if ($_SESSION['customer']['logged_customer'] == "TRUE") {
                return true;
            } else {
                redirect(site_url() . 'home');
            }
        } else {
            redirect(site_url() . 'home');
        }
    }

    public function get_session_pay_order() {
        if (isset($_SESSION['customer'])) {
            if ($_SESSION['customer']['logged_customer'] == "TRUE") {
                return true;
            } else {
                redirect(site_url() . 'login');
            }
        } else {
            redirect(site_url() . 'login');
        }
    }

}
