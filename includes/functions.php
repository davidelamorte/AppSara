<?php
include "includes/DbConnector.php";
function getNotifiche(){
// connessione al DB
  $dbh = DbConnector::dbConn();
  // print_r($dbh);
  // estrazione dei dati
  // devo usare prepare:
  $query= $dbh->prepare("SELECT * FROM notifica");
  // print_r($query);
  $query->execute();
  // print_r($query->fetchAll());
  // prendo i result set come array associativo
  return $query->fetchAll();
}

function saveNotifica($dati){
// connessione al DB
  $dbh = DbConnector::dbConn();
  // print_r($dbh);
  // estrazione dei dati
  // devo usare prepare:
  $query= $dbh->prepare("INSERT INTO log (id_notifica, textarea, time ) VALUES ( :id, :textarea, :time)");
  $query->bindParam(':id', $dati['notifica']);
  $query->bindParam(':textarea', $dati['textarea']);
  $query->bindParam(':time', $dati['date']);
  //print_r($query);
  $query->execute();
}

function getPassword() {
  $dbh = DbConnector::dbConn();
  $query= $dbh->prepare("SELECT * FROM password");
  $query->execute();
  return $query->fetchAll();
}

function getLog() {
  $dbh = DbConnector::dbConn();
  $query= $dbh->prepare("SELECT * FROM log order by `time` DESC");
  $query->execute();
  return $query->fetchAll();
}

function sendEmail($dest, $dati) {
$to = $dest;
$subject = "TSS2018: " .$dati["notifica"];
$message = '
<html>
<head> 
</head>
<body>
  <p> Gli studenti sono attualmente in pausa. </p>
  <p style=""><strong>Messaggio: </strong>'.$dati["textarea"].'</p> 
  
  <p><a href="http://engimalert.altervista.org/">Visualizza Status Allievi</a></p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


  if (mail($to, $subject, $message, implode("\r\n", $headers))) {
    echo("<p>Email inviata con successo!</p>");
    } else {
    echo("<p>ERRORE: invio fallito</p>");
    };
  }
?>
