<?php

class DbConnector {

  protected static $dsn = 'mysql:dbname=my_engimalert;host=localhost';
  protected static $user = 'engimalert';
  protected static $password = '';

  private function setUser($user)
  {
    $this->user = $user;
  }

  private function getUser()
  {
    return $this->user;
  }

  function dbConn(){
    try
    {
      $dbh = new PDO(DbConnector::$dsn, DbConnector::$user, DbConnector::$password);
      // echo "Fatto";
    }
    catch (PDOException $e)
    {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $dbh;
  }

}


?>
