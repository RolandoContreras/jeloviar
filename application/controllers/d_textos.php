<?php

if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class D_textos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("textos_model", "obj_textos");
    }

    public function index() {
        //GER SESSION
        $this->get_session();
        $params = array(
            "select" => "*",
            "where" => "texto_id = 1",
        );
        //GET DATA EVENTOS
        $obj_textos = $this->obj_textos->get_search_row($params);
        /// VISTA
        $this->tmp_mastercms->set("obj_textos", $obj_textos);
        $this->tmp_mastercms->render("dashboard/inicio/inicio_form");
    }

    public function validate() {
        if ($this->input->is_ajax_request()) {
            //OBETENER DATA
            $data = array(
                'titulo_home' => trim($this->input->post('titulo_home')),
                'description_home' => $this->input->post('description_home'),
                'boton_home' => trim($this->input->post('boton_home')),
                'titulo_cursos' => trim($this->input->post('titulo_cursos')),
                'boton_cursos' => trim($this->input->post('boton_cursos')),
                'titulo_boletin' => trim($this->input->post('titulo_boletin')),
                'description_boletin' => $this->input->post('description_boletin'),
                'boton_boletin' => trim($this->input->post('boton_boletin')),
                'nosotros_footer' => trim($this->input->post('nosotros_footer')),
                'text_nosotros_footer' => $this->input->post('text_nosotros_footer'),
                'titulo_contacto_footer' => trim($this->input->post('titulo_contacto_footer')),
                'email_footer' => trim($this->input->post('email_footer')),
                'phone_footer' => trim($this->input->post('phone_footer')),
                'address_footer' => trim($this->input->post('address_footer')),
            );
            $result = $this->obj_textos->update(1, $data);
            if ($result == true) {
                $data['status'] = true;
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
        }
    }

    public function biografia() {
        //GER SESSION
        $this->get_session();
        $params = array(
            "select" => "biografia_id,
                                    titulo,
                                    text",
            "where" => "biografia_id = 1",
        );
        //GET DATA EVENTOS
        $obj_biografia = $this->obj_biografia->get_search_row($params);
        /// VISTA
        $this->tmp_mastercms->set("obj_biografia", $obj_biografia);
        $this->tmp_mastercms->render("dashboard/biografia/biografia_form");
    }

    public function biografia_validate() {
        if ($this->input->is_ajax_request()) {
            //OBETENER MARCA_ID

            $data = array(
                'titulo' => trim($this->input->post('titulo')),
                'text' => trim($this->input->post('text')),
            );

            $result = $this->obj_biografia->update(1, $data);
            if ($result == true) {
                $data['status'] = true;
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
        }
    }

    public function contacto() {
        //GER SESSION
        $this->get_session();
        $params = array(
            "select" => "address,
                                    phones,
                                    email",
            "where" => "contacto_id = 1",
        );
        //GET DATA EVENTOS
        $obj_contacto = $this->obj_contacto->get_search_row($params);
        /// VISTA
        $this->tmp_mastercms->set("obj_contacto", $obj_contacto);
        $this->tmp_mastercms->render("dashboard/contacto/contacto_form");
    }

    public function contacto_validate() {
        if ($this->input->is_ajax_request()) {
            //OBETENER MARCA_ID
            $data = array(
                'address' => trim($this->input->post('address')),
                'phones' => trim($this->input->post('phones')),
                'email' => trim($this->input->post('email')),
            );

            $result = $this->obj_contacto->update(1, $data);
            if ($result == true) {
                $data['status'] = true;
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
        }
    }

    public function get_session() {
        if (isset($_SESSION['usercms'])) {
            if ($_SESSION['usercms']['logged_usercms'] == "TRUE") {
                return true;
            } else {
                redirect(site_url() . 'dashboard');
            }
        } else {
            redirect(site_url() . 'dashboard');
        }
    }

}

?>