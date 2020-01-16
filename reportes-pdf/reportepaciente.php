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
    function Headers()
    {
        // Logo
        $this->Image('../vistas/logotipo.png', 5, 6, 25);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 14);
        // Move to the right
        $this->Cell(80);
        // Title
        
        $this->Cell(30, 10, utf8_decode('CONSULTORIO MÉDICO DRA. ANA LUISA VELÁZQUEZ'), 0, 0, 'C');
        $this->Ln(5);
        
        $this->SetFont("Arial", "", 11);
        $this->Cell(0, 10, utf8_decode('TELEFONO: 2393-0548'), 0, 0, 'C');
        $this->Ln(5);
        $this->Cell(0, 10, utf8_decode('J.V.P.M 3012'), 0, 0, 'C');
        
        $this->Ln(5);
        $this->setDrawColor(42, 165, 165);
        $this->setLineWidth(0.5);
        $this->Line(14.5, $this->GetY() + 10, 195.5, $this->GetY() + 10 );
        $this->Ln(2);
        $this->setLineWidth(2);
        $this->Line(15, $this->GetY() + 10, 195, $this->GetY() + 10 );
        
        // Line break
        $this->Ln(10);
        $this->SetX(-45);
        $this->SetFont("Arial", "", 8);
        date_default_timezone_set('America/El_Salvador');
        $date = date('d/m/Y', time());
        $hora = date('h:i:s a', time());
        $this->Cell(0, 10, "fecha: " . $date, 0, 0, "C");
        $this->Ln(5);
        $this->SetX(-45);
        $this->Cell(0, 10, "hora: " . $hora, 0, 0, "C");
        
        $this->setLineWidth(0.5);
        $this->Line(14.5, $this->GetY() + 10, 195.5, $this->GetY() + 10 );
        

        $this->Ln(50);
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
        $this->Cell(45, 10, "Genero", 1, 0, "C");

        $this->Cell(15, 10, "Telefono", 1, 0, "C");

        $this->Ln();
    }


    function viewTable()
    {

     $this->SetFont("Times", "", 11);

        

        $result = self::ejecutar_consulta_simple("SELECT * FROM `tpaciente`");
        if ($result) {
            foreach ($result as $row) {

                $this->Cell(23, 8, $row['n_expediente'], 1, 0, "L");
                $this->Cell(45, 8, utf8_decode($row['nombre_paciente']), 1, 0, "L");
                $this->Cell(45, 8, utf8_decode($row['apellido_paciente']), 1, 0, "L");
                
                $this->Cell(75, 8, utf8_decode($row['sexo_paciente']), 1, 0, "L");
                $this->Cell(45, 8, utf8_decode($row['telefonop_paciente']), 1, 0, "L");
                

                $this->Ln();
            }
            $this->SetFont("Times", "B", 11);
        }
        
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->headers();

$pdf->headerTable();
$pdf->viewTable();
$pdf->Output();
