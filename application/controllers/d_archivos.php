<?php

if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class D_archivos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("customer_model", "obj_customer");
        $this->load->model("courses_model", "obj_courses");
        $this->load->model("archives_model", "obj_archives");
    }

    public function index() {

        $this->get_session();
        $url = explode("/", uri_string());
        $course_id = $url[2];
        $params = array(
            "select" => "archives.archive_id,
                                    archives.name,
                                    archives.content,
                                    archives.date,
                                    archives.active,
                                    courses.course_id,
                                    courses.name as course_name",
            "join" => array('courses, courses.course_id = archives.course_id'),
            "where" => "archives.course_id = $course_id",
            "order" => "archives.archive_id DESC");
        //GET DATA FROM CUSTOMER
        $obj_archives = $this->obj_archives->search($params);
        //send
        $this->tmp_mastercms->set("course_id", $course_id);
        $this->tmp_mastercms->set("obj_archives", $obj_archives);
        $this->tmp_mastercms->render("dashboard/archivos/archivos_list");
    }

    public function load($course_id = NULL) {

        //obtener id de curso
        $url = explode("/", uri_string());
        $archive_id = isset($url[4]) ? $url[4] : "";
        $course_id = isset($course_id) ? $course_id : $url[2];
        //verify
        if ($archive_id != "") {
            /// PARAM FOR SELECT 
            $params = array(
                "select" => "archives.archive_id,
                                    archives.name,
                                    archives.content,
                                    archives.date,
                                    archives.active,
                                    courses.course_id,
                                    courses.name as course_name",
            "join" => array('courses, courses.course_id = archives.course_id'),
            "where" => "archives.archive_id = $archive_id");
            $obj_archives = $this->obj_archives->get_search_row($params);
            //RENDER
            $this->tmp_mastercms->set("obj_archives", $obj_archives);
        }
        //obtener curso y nombre
        $params = array(
            "select" => "course_id,
                                    name",
            "where" => "course_id = $course_id and active = 1",
        );
        $obj_courses = $this->obj_courses->get_search_row($params);
        //send data
        $this->tmp_mastercms->set("course_id", $course_id);
        $this->tmp_mastercms->set("obj_courses", $obj_courses);
        $this->tmp_mastercms->render("dashboard/archivos/archivos_form");
    }

    public function validate() {
        if ($this->input->is_ajax_request()) {
            //GET CUSTOMER_ID
            $archive_id = $this->input->post("archive_id");
            $course_id = $this->input->post("course_id");
            $name = $this->input->post("name");
            $content = $this->input->post("content");
            //inser on table
            if ($archive_id != null) {
                $data_param = array(
                    'course_id' => $course_id,
                    'name' => $name,
                    'content' => $content,
                    'date' => date("Y-m-d H:i:s"),
                    'active' => $this->input->post('active'),
                );
                $result = $this->obj_archives->update($archive_id, $data_param);
                
            } else {
                //SAVE DATA IN TABLE    
                $data_param = array(
                    'course_id' => $course_id,
                    'name' => $name,
                    'content' => $content,
                    'date' => date("Y-m-d H:i:s"),
                    'active' => $this->input->post('active'),
                );
                $result = $this->obj_archives->insert($data_param);
            }
            if ($result != null) {
                    $data['status'] = true;
                    $data['url'] = $course_id;
                } else {
                    $data['status'] = false;
                }
            echo json_encode($data);
        }
    }

    public function delete() {
        if ($this->input->is_ajax_request()) {
            //OBETENER customer_id
            $archive_id = $this->input->post("archive_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($archive_id != "") {
                $result = $this->obj_archives->delete($archive_id);
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

    public function verificar_curso() {
        if ($this->input->is_ajax_request()) {
            //OBETENER MARCA_ID
            $course_id = $this->input->post("course_id");
            if ($course_id != "") {
                //seleccionar modulo del curso
                $params = array(
                    "select" => "*",
                    "where" => "course_id = $course_id",
                );
                $obj_modules = $this->obj_modules->search($params);
            }
            $data['obj_modules'] = $obj_modules;
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