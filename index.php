<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Engim Pausa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,800" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>Engim Notifiche a Sara</h1>
      <form class="" action="" method="post">
        <p id="orario">Timestamp</p><br/>
        <!-- <select class="form-control form-control-lg">
          <option>Large select</option>
        </select> -->
        <select id="notifica" class="form-control">
          <option>Array notifiche</option>
        </select>
        <!-- <select class="form-control form-control-sm">
          <option>Small select</option>
        </select> -->
        <div class="form-group">
          <label for="note">Note</label>
          <textarea class="form-control" id="note" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>

    </div>
  </body>
</html>
