<?php
/**
 * Ejemplo de generación automática de reportes.
 * Objetivo: crear un archivo Excel y un PDF a partir de datos MySQL.
 * Framework base: CodeIgniter 3.x
 */

require_once APPPATH . 'third_party/PHPExcel.php';
require_once APPPATH . 'third_party/tcpdf/tcpdf.php';

class ReporteController extends CI_Controller
{
    public function generar()
    {
        $this->load->database();

        // Datos de ejemplo
        $query = $this->db->select('id, nombre, fecha, estado')
                          ->from('registros')
                          ->limit(10)
                          ->get();

        $data = $query->result_array();

        // Generación de Excel
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->fromArray($data, null, 'A1');
        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $writer->save(FCPATH . 'reporte.xlsx');

        // Generación de PDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 10);
        foreach ($data as $row) {
            $pdf->Cell(0, 8, implode(' | ', $row), 0, 1);
        }
        $pdf->Output(FCPATH . 'reporte.pdf', 'F');
    }
}

/**
 * Resultado:
 * - Archivos "reporte.xlsx" y "reporte.pdf" generados automáticamente.
 * - Código modular y reutilizable para reportes mayores.
 */
