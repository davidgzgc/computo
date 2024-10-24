<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obtener_equipos() {
        return $this->db->get('equipos')->result();
    }

    
    public function obtener_equipo($id) {
        $query = $this->db->get_where('equipos', array('id' => $id));
        return $query->row();
    }

    public function crear_equipos($data) {
        return $this->db->insert('equipos', $data);
    }

    public function actualizar_equipos($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('equipos', $data);
    }

    public function eliminar_equipos($id) {
        return $this->db->delete('equipos', array('id' => $id));
    }
}