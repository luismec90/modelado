<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class asignatura_model extends CI_Model {

    public function obtenerAsignatura($idAsignatura) {
        $query = $this->db->get_where('asignatura', array('id_asignatura' => $idAsignatura));
        return $query->result();
    }

}
