<?php
/*
if ($peticionAjax) {

	require_once "../core/mainModel.php";
} else {
	require_once "./core/mainModel.php";
}*/
require('fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../vistas/logotipo.png', 5, 6, 25);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 14);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30, 10, utf8_decode('CONSULTORIO MÉDICO DRA. ANA LUISA VELÁZQUEZ'), 0, 0, 'C');
        // Line break
        $this->Ln(20);
        $this->SetX(-45);
        $this->SetFont("Arial", "", 8);
        date_default_timezone_set('America/El_Salvador');
        $date = date('d/m/Y', time());
        $hora = date('h:i:s a', time());
        $this->Cell(0, 10, "fecha: " . $date, 0, 0, "C");
        $this->Ln(5);
        $this->SetX(-45);
        $this->Cell(0, 10, "hora: " . $hora, 0, 0, "C");

        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
    function headerTable()
    {
        $this->Ln();
        $this->SetFont("Times", "B", 11);
        $this->Cell(23, 10, "Expediente", 1, 0, "C");
        $this->Cell(45, 10, "Nombre", 1, 0, "C");
        $this->Cell(45, 10, "Apellido", 1, 0, "C");
        $this->Cell(15, 10, "Edad", 1, 0, "C");
        $this->Cell(45, 10, "Correo", 1, 0, "C");

        $this->Ln();
    }


    function viewTable()
    {

 /*       $this->SetFont("Times", "", 11);

        $model=

        $result = mainModel::ejecutar_consulta_simple("SELECT * FROM `tpaciente`");
        if ($result) {
            foreach ($result as $row) {

                $this->Cell(23, 8, $row['n_expediente'], 1, 0, "L");
                $this->Cell(45, 8, $row['nombre_paciente'], 1, 0, "L");
                $this->Cell(45, 8, $row['apellido_paciente'], 1, 0, "L");
                $this->Cell(75, 8, $row['correo_paciente'], 1, 0, "L");

                $this->Ln();
            }
            $this->SetFont("Times", "B", 11);
        }
        */
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->headerTable();
$pdf->viewTable();
$pdf->Output();
