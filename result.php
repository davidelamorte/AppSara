<?php

include "includes/functions.php";

if($_SERVER['REQUEST_METHOD']==='POST') {

$date = date("j-m-Y | H:i:s");

$dati = [];
$dati["notifica"] = ( isset($_POST['notifica']) ? trim($_POST['notifica']) : "");
$dati["textarea"] = ( isset($_POST['textarea']) ? trim($_POST['textarea']) : "");
$dati["date"] = $date;

$dest = "kanjy5@gmail.com";

if($dati["notifica"] == "In Pausa") {
sendEmail($dest, $dati);
}

saveNotifica($dati);
}

header("Location: index.php");
?> 
