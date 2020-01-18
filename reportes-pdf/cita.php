<?php

require_once "../core/configAPP.php";
require('fpdf.php');

class PDF extends FPDF
{

    function conectar()
    {
        $enlace = new PDO(SGBD, USER, PASS);
        return $enlace;
    }

    function ejecutar_consulta_simple($consulta)
    {
        $respuesta = self::conectar()->prepare($consulta);
        $respuesta->execute();
        return $respuesta;
    }

    // Page header
    function Header()
    {
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Times', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        $this->SetX(-45);
        $this->SetFont("Arial", "", 8);
        date_default_timezone_set('America/El_Salvador');
        $date = date('d/m/Y', time());
        $hora = date('h:i:s a', time());
        $this->Cell(0, 10, "fecha: " . $date, 0, 0, "C");
        $this->Ln(5);
        $this->SetX(-45);
        $this->Cell(0, 10, "hora: " . $hora, 0, 0, "C");
    }
    function headerTable()
    {
    }


    function viewTable($id, $nombre, $telefono, $fecha,$hora)
    {



        $this->SetFont('Arial', '', 10);
        $this->Ln(7);

        if ($id !="") {
            $consulta2 = $this->ejecutar_consulta_simple("SELECT * FROM tpaciente where idpaciente=" . $id . "");
            foreach ($consulta2 as $row2) {
                $nombre = $row2['nombre_paciente'] . " " . $row2['apellido_paciente'];
                $telefono = $row2['telefonop_paciente'];
            }

        }

        $this->SetX(32);

        $this->Cell(80, 7, $nombre, 1, 0, 'C');
        $this->Cell(25, 7, $telefono, 1, 0, 'C');
        $this->Cell(42, 7, $fecha."  ".$hora, 1, 0, 'C');
        
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Logo
$pdf->Image('../vistas/logotipo.png', 10, 15, 25);
// Arial bold 15
$pdf->SetFont('Times', 'B', 12);
// Move to the right
$pdf->Cell(80);
// Title
$pdf->Cell(35, 20, utf8_decode('CONSULTORIO MÉDICO DRA. ANA LUISA VELÁZQUEZ'), 0, 0, 'C');
$pdf->Cell(-35, 35, utf8_decode('MEDICINA GENERAL'), 0, 0, 'C');

$pdf->Cell(35, 65, utf8_decode('REPORTE DE CITAS DEL MES'), 0, 0, 'C');
// Line break
$pdf->Ln(20);
$pdf->SetX(-45);

$pdf->Ln(5);

$pdf->Ln(20);




$consulta = $pdf->ejecutar_consulta_simple("SELECT DATE_FORMAT(fecha_hora_cita,'%d/%m/%Y') as fecha,
DATE_FORMAT(fecha_hora_cita,'%h:%i %p') as hora,
nombre_citado,telefono_citado,idpaciente FROM tcita 
WHERE tcita.estado_cita= 1 and MONTH(fecha_hora_cita)=MONTH(CURDATE())  
OR tcita.estado_cita= 2 and MONTH(fecha_hora_cita)=MONTH(CURDATE())
ORDER BY fecha_hora_cita Asc");
$pdf->SetFont('Times', 'B', 12);

$pdf->SetX(32);

$pdf->Cell(80, 7, "Nombre", 1, 0, 'C');
$pdf->Cell(25, 7, "Telefono", 1, 0, 'C');
$pdf->Cell(42, 7, "Fecha/Hora", 1, 0, 'C');




foreach ($consulta as $row) {

    $pdf->SetFont('Times', 'B', 12);

    $pdf->viewTable($row["idpaciente"], $row["nombre_citado"], $row['telefono_citado'], $row['fecha'], $row['hora']);
}







$pdf->Output();
