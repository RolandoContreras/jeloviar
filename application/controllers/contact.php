<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('comments_model', 'obj_comments');
        $this->load->model("category_model", "obj_category");
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
        $data['obj_textos'] = $this->textos();
        //view
        $data['title'] = "Contacto | Jeloviar Online";
        $this->load->view('contact', $data);
    }

    public function textos() {
        $params = array(
            "select" => "titulo_contacto,
                         web,
                         titulo_mensaje,
                         boton_contacto,
                         nosotros_footer,
                         address_footer,
                         phone_footer,
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

    public function send_messages() {
        //GET DATA BY POST

        if ($this->input->is_ajax_request()) {
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $subject = $this->input->post("subject");
            $message = $this->input->post("message");

            //SAVE MESSAGES BD
            //status_value 0 means (not read)
            $data = array(
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
                'date' => date("Y-m-d H:i:s"),
                'active' => 1
            );
            $this->obj_comments->insert($data);
            $data['message'] = true;
            echo json_encode($data);
            exit();
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
