<?php

include "includes/functions.php";


$notifiche = getNotifiche();


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
      <form class="" action="result.php" method="post">
        <!-- <select class="form-control form-control-lg">
          <option>Large select</option>
        </select> -->
        <label for="notifica">Scegli una delle opzioni</label>
        <select id="notifica" name="notifica" class="form-control">
          <?php
          foreach ($notifiche as $notifica) {
            echo "<option value=\"".$notifica['id']."\">".$notifica['notifica']."</option>";
          }
          ?>

        </select>
        <!-- <select class="form-control form-control-sm">
          <option>Small select</option>
        </select> -->
        <div class="form-group">
          <label for="note">Note</label>
          <textarea name="textarea" class="form-control" id="note" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
    </div>
  </body>
</html>
