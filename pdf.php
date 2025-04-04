<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{

    // Cabecera de página
    function Header()
    {

        // Arial bold 15
        $this->SetFont('Arial', 'B', 14);

        // Agrega la imagen del fondo
       // $this->Image("imagenes/fondo.jpeg", 1, 1, 295, 15);

        // Agrega la imagen del escudo
       // $this->Image("imagenes/escudo_.png", 1, 1, 30, 15);

        // Título
        $this->Cell(0, 20, 'Datos del contacto', 0, 1, 'C');

        $this->Cell(50, 5, 'Contacto', 1, 0, 'C', 0);
        $this->Cell(35, 5, 'Puesto', 1, 0, 'C', 0);
        $this->Cell(35, 5, 'Empresa', 1, 0, 'C', 0);
        $this->Cell(15, 5, 'Tipo', 1, 0, 'C', 0);
        $this->Cell(35, 5, 'Telefono', 1, 0, 'C', 0);
        $this->Cell(50, 5, 'Correo', 1, 0, 'C', 0);
        $this->Cell(50, 5, 'Nota', 1, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 5, utf8_decode('Página') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

require("cn.php");
$consulta = "SELECT * FROM contacto";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF('L'); // 'L' indica orientación horizontal (landscape)
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

while ($row = $resultado->fetch_assoc()) {

    // Obtener la ruta de la imagen
    $imagePath = __DIR__ .'/'. $row['foto'];
    $imagePath = str_replace('\\', '/', $imagePath);

    // // Mostrar la imagen
    $pdf->Image($imagePath, $pdf->GetX(), $pdf->GetY(), 15, 20);
    $pdf->Cell(50, 20, $row['contacto'], 1, 0, 'C', 0);
    $pdf->Cell(35, 20, $row['puesto'], 1, 0, 'C', 0);
    $pdf->Cell(35, 20, $row['empresa'], 1, 0, 'C', 0);
    $pdf->Cell(15, 20, $row['tipo'], 1, 0, 'C', 0);
    $pdf->Cell(35, 20, $row['telefono'], 1, 0, 'C', 0);
    $pdf->Cell(50, 20, $row['correo'], 1, 0, 'C', 0);
    $pdf->Cell(50, 20, $row['nota'], 1, 0, 'C', 0);
 
    $pdf->Ln();
}


$pdf->Output();
?>