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


    function viewTable($nombre,$presentacion,$tipo,$via,$concentracion,$unidad)
    {

        $this->SetFont('Times', 'B', 12);


        $this->Cell(50,5,"Nombre",1,0,'C');
        $this->Cell(30,5,"Presentacion",1,0,'C');
        $this->Cell(50,5,"Tipo",1,0,'C');
        $this->Cell(40,5,"Via administracion",1,0,'C');
        $this->Cell(20,5,"contenido",1,0,'C');
        
        $this->SetFont('Arial','',10);
        $this->Ln(5);
        
        $this->Cell(50,5,$nombre,1,0,'C');
        $this->Cell(30,5,$presentacion,1,0,'C');
        $this->Cell(50,5,$tipo,1,0,'C');
        $this->Cell(40,5,$via,1,0,'C');
        $this->Cell(20,5,$concentracion." ".$unidad,1,0,'C');

        
        //convertimos el texto a utf8
        $texto = utf8_decode("ees");
        
        $this->Cell(50,5,$texto,0,1,'C');
        
        $this->Cell(50,5,'',0,1);
        
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
$pdf->Cell(35,65, utf8_decode('REPORTE DE MEDICAMENTOS'), 0, 0, 'C');
// Line break
$pdf->Ln(20);
$pdf->SetX(-45);

$pdf->Ln(5);

$pdf->Ln(20);




$consulta=$pdf->ejecutar_consulta_simple("SELECT * FROM tmedicamento WHERE tmedicamento.estado= 1");
foreach ($consulta as $row) {
    $pdf->viewTable($row["nombre_medicamento"],$row['presentacion_medicamento'],$row['tipo'],$row['via_admin_medicamento'],$row['concentracion_medicamento'],$row['unidad']);
}







$pdf->Output();
