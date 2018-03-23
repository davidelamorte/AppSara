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
  $query= $dbh->prepare("INSERT INTO `log` ( `id_notifica`, `textarea`) VALUES ( :idNotifica, :messaggio)");
  $query->bindParam(':idNotifica', $dati['notifica']);
  $query->bindParam(':messaggio', $dati['textarea']);
  // print_r($query);
  $query->execute();
}

?>
