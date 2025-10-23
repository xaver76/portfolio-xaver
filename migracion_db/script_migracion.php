<?php
/**
 * Ejemplo de migración estructurada entre dos bases MySQL.
 * Objetivo: transferir datos validados desde una tabla origen a una destino.
 * Framework base: CodeIgniter 3.x
 */

class MigracionController extends CI_Controller
{
    public function ejecutar()
    {
        $this->load->database();

        // Selección desde tabla antigua
        $origen = $this->db->get('usuarios_old')->result_array();

        foreach ($origen as $fila) {
            // Validación mínima antes de la inserción
            if (!empty($fila['nombre']) && filter_var($fila['email'], FILTER_VALIDATE_EMAIL)) {
                $nuevo = [
                    'nombre'   => trim($fila['nombre']),
                    'apellido' => trim($fila['apellido']),
                    'email'    => strtolower($fila['email']),
                    'activo'   => (int)$fila['activo']
                ];
                $this->db->insert('usuarios', $nuevo);
            }
        }

        echo "Migración finalizada correctamente.";
    }
}

/**
 * Resultado:
 * - Datos migrados con validación y estructura unificada.
 * - Código preparado para extender con logs o respaldos automáticos.
 */
