<?php
include "includes/functions.php";
$notifiche = getNotifiche();
$password = getPassword();

if($_SERVER['REQUEST_METHOD']==='POST') {
	$pass = ( isset($_POST['pass']) ? trim($_POST['pass']) : "");
    if($password["0"]["password"] == $pass) {
    	session_start();
        $_SESSION['login'] = 'true';
        header("Location: admin.php");
    } else {
    	echo "Password Errata";
    }

}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EngimAlert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,800" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>EngimAlert</h1>
      <p>Notifiche dal corso "TSS1000 ore"</p>
      <form class="" action="" method="post">
          <div class="form-group">
          <label for="note">Inserisci Password</label>
          <input type="password" name="pass" class="form-control" id="note" rows="3"></input>
        </div>
        <a href="index.php">Log Page</a>
        <button type="submit" class="btn btn-primary float-right">Accedi</button>
      </form>
    </div>
  </body>
</html>