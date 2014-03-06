<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fill_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function poblarBD() {
        $this->asignatura();
    }

    private function asignatura() {
        $this->db->empty_table('asignatura');
        $data = array(
            'id_asignatura'=>'1',
            'nombre' => 'Cálculo Diferencial',
            'descripcion' => 'Lorem ipsum dolor sit amet, ex perfecto patrioque vim, per dolore animal ea.',
            'programa' => 'Ingeniería de sistemas',
            'departamento' => 'Matemáticas',
        );
        $this->db->insert('asignatura', $data);
    }

}