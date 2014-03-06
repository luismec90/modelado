<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->model("asignatura_model");

        $data["tab"] = "inicio";
        $data["css"] = array("css/inicio");
        $data["js"] = array("js/inicio");
        $data["asignatura"] = $this->asignatura_model->obtenerAsignatura("1");

        $this->load->view('include/header', $data);
        $this->load->view('inicio_view');
        $this->load->view('include/footer');
    }

}
