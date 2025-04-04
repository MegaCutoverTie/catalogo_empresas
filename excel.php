<?php
header("cache-Control: public");
header("Content-Descripcion: File Transfer");
header("Content-Disposition: attachment; filename = mi.xls");
header("Content-Type: application/xls");

include("class/sql.php");
include("class/contactos.php");

$c = new contactos();
echo $c->mostrar3();
?>