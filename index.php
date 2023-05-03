<?php 
require 'phpqrcode/qrlib.php';

//echo $_GET['d'];


//QRcode::png($dato,"img/qr_".$dato.".png",'L',32,5);
if (isset($_GET['d'])) {
    QRcode::png($_GET['d']);
}
else{
    echo 'Debe Enviar la variable d para poder generar su qr';
}


?>
