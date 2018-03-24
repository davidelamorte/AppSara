<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>Engim Alert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">    
        <?php
        include "includes/functions.php";
        $logs = getLog();        
        ?>
</head>
<body>
<div class="col-md-11 mx-auto mt-5">

<h1>Status Attuale: <?= $logs[0]['id_notifica']  ?> </h1>

<a href="admin.php">Admin Page</a>
  <table class="table bg-primary text-light">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID Notifica</th>
          <th scope="col">Messaggio</th>
          <th scope="col">Data</th>          
        </tr>
      </thead>
      <tbody>

          <?php
          foreach($logs as $l){
          echo "<tr>
            <th scope='row'>•</th><td>".$l['id_notifica']."</td> <td>".$l['textarea']."</td><td>".$l['time']."</td></tr>";
        }
          ?>

        </tbody>
    </table>
</div>
</body>
</html>
