<?php
ob_start();
?>

<?php
$fecha_actual = date("d M, Y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body,
        html {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 13px;
        }

        .fweight {
            font-weight: 900;
        }

        .centrado {
            text-align: center;
        }

        .texto {
            margin: 0;
            padding: 0;
            line-height: 3;
        }
    </style>
</head>

<body>
    <div style="text-align: justify">
        <p style="text-align: right;">Mérida, Yucatán a <?= $fecha_actual ?>
            <br>
            <span><strong>Asunto: </strong> Carta de recomendación</span>
        </p>

        A QUIEN CORRESPONDA:
        <p class="texto">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por medio de la presente y para los fines que pretenda el interesado, hago de
            su conocimiento que recomiendo ampliamente al <strong>C. <?php echo $empleado->nombre ?></strong>, ya que es una persona Honesta y Responsable en las actividades
            que durante el periodo <strong><?php
                                            $timestamp = strtotime($empleado->fecha);
                                            echo date("d M, Y", $timestamp);
                                            ?></strong> a la fecha, prestó servicios en nuestra empresa le fueron asignadas,
            por tal motivo no tengo ninguna duda en expedir esta recomendación.
            Se extiende la presente a solicitud del interesado y para los fines que juzgue
            convenientes.
        </p>
        <br><br>
        <div class="centrado">
            <p>FIRMA</p>
            <p>______________________________________</p>
            Javier Iván Herrera Couoh <br>
            Empresa TIC
        </div>
    </div>

</body>

</html>

<?php

// Include the main TCPDF library (search for installation path).
require_once('./tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_SIZE_DATA);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);


// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'color' => array(196, 196, 196), 'opacity' => 0, 'blend_mode' => 'Normal'));

// Set some content to print
$html = ob_get_clean();

// Print text using writeHTMLCell()
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------
ob_end_clean();

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('carta-recomendacion.pdf', 'I');
