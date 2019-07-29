<?php
 require_once 'conexao.php';
 //sessão.
 session_start();
 //botão enviar.
 require ('fpdf181/fpdf.php');

 class PDF extends FPDF {
	// Cabeçalho
	function Header()
	{


            // Logo
			// Arial bold 15
			$this->SetFont('Arial','B',15);
			// Move to the right
			$this->Cell(70);
			// Title
			//$this->Cell(50,10,utf8_decode('Prova de Matématica - E.E.E.P MARWIN'),0,1,'C');
			//$this->Cell(50,10,utf8_decode('Nome do Aluno: _________________________________________'),0,1,'L');
			//$this->Cell(30,10,'Title',1,0,'C');
			// Line break
			$this->Ln(20);




	}
}


	// Instanciação
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
    $pdf->MultiCell(115,30,utf8_decode('Boleto Bancário'),2,0);
    //$pdf->Image('img/governo.jpg',170,6,30);
	$pdf->MultiCell(200,12,utf8_decode('Produto: CD original $idcompra'),2,1);
	$pdf->MultiCell(200,12,utf8_decode('Professor:_____________________ Ano:______  Turma:________________ '),2,1);
	$pdf->MultiCell(200,12,' ',2,1);
	$pdf->SetFont('Times','',12);
