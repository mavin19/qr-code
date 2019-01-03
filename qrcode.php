<?php 
    require 'vendor/autoload.php';
    use Endroid\QrCode\QrCode;

    $qrCode = new QrCode('Life is too short to be generating QR codes');
    
    header('Content-Type: '.$qrCode->getContentType());
    echo $qrCode->writeString();
?>