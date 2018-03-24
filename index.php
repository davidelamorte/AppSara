<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>Engim Alert</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="log-style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <?php
    include "includes/functions.php";
    $logs = getLog();
    ?>
</head>
<body>
  <div id="tb-container" class="col-md-9">
    <h1>Status Attuale: <?= $logs[0]['id_notifica']  ?> </h1>
    <a href="admin.php">Admin Page</a>
    <div class="table-box">
      <table class="table text-light">
        <thead>
          <tr class="fixed-head">
            <th scope="col" class="info1">Data</th>
            <th scope="col" class="info1">Notifica</th>
            <th scope="col" class="info2">Messaggio</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($logs as $l){
          echo "<tr class='body-row'>
          <td class='info1'>".$l['time']."</td><td class='info1'>".$l['id_notifica']."</td><td class='info2'>".$l['textarea']."</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
