<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Mpdf\Mpdf;

$mPDFConfig = array( 
    'default_font' => 'thsarabun',    
);

$mPDF = new Mpdf($mPDFConfig);
$html = "<h1>I'm Mr.Auto DEv</h1>";
$mPDF->WriteHTML($html);
$mPDF->Output();