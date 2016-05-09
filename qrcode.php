<?php

include "qrlib.php";

$code = QRcode::png($_POST['text1']);

imagepng($code);

?>
