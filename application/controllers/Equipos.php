<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Equipos_model');
    }

    public function index() {
        $data['equipos'] = $this->Equipos_model->obtener_equipos();
        $this->load->view('Equipos/index', $data);
    }

    public function crear() {
        if ($this->input->post()) {
            $data = array(
                'id' => $this->input->post('id'),
                'nombre' => $this->input->post('nombre'),
                'marca' => $this->input->post('marca'),
                'color' => $this->input->post('color'),
                'serie' => $this->input->post('serie'),
                'usuario' => $this->input->post('usuario'),
                'fecha_compra' => $this->input->post('fecha_compra'),
                'precio_compra' =>$this->input->post('precio_compra'),
                'proveedor_nit' =>$this->input->post('proveedor_nit'),
                'estado' =>$this->input->post('estado')
                

            );
            $this->Equipos_model->crear_equipos($data);
            redirect('equipos');
        }
        $this->load->view('Equipos/crear');
    }

    public function editar($id) {
        $data['equipos'] = $this->Equipos_model->obtener_equipo($id);
        
        if ($this->input->post()) {
            $dataUpdate = array(

                'id' => $this->input->post('id'),
                'nombre' => $this->input->post('nombre'),
                'marca' => $this->input->post('marca'),
                'color' => $this->input->post('color'),
                'serie' => $this->input->post('serie'),
                'usuario' => $this->input->post('usuario'),
                'fecha_compra' => $this->input->post('fecha_compra'),
                'precio_compra' =>$this->input->post('precio_compra'),
                'proveedor_nit' =>$this->input->post('proveedor_nit'),
                'estado' =>$this->input->post('estado')
                


            );
            $this->Equipos_model->actualizar_equipos($id, $dataUpdate);
            redirect('equipos');
        }
        
        $this->load->view('Equipos/editar', $data);
    }

    public function eliminar($id) {
        $this->Equipos_model->eliminar_equipos($id);
        redirect('Equipos');
    }
}


