<?php
/**
 * Ejemplo de refactorización de un fragmento de código.
 * Objetivo: separar la lógica de negocio de la capa de presentación.
 * Framework base: CodeIgniter 3.x
 */

class UsuarioModel extends CI_Model
{
    // Obtiene la lista de usuarios activos
    public function getUsuariosActivos()
    {
        return $this->db->where('estado', 1)
                        ->order_by('apellido', 'ASC')
                        ->get('usuarios')
                        ->result_array();
    }
}

class UsuarioController extends CI_Controller
{
    public function index()
    {
        $this->load->model('UsuarioModel');
        $data['usuarios'] = $this->UsuarioModel->getUsuariosActivos();

        // Vista simple de presentación
        $this->load->view('usuarios_view', $data);
    }
}

/**
 * Ventajas del refactor:
 * - Lógica concentrada en el modelo.
 * - Controlador liviano y fácil de mantener.
 * - Código preparado para validaciones o filtros adicionales.
 */
