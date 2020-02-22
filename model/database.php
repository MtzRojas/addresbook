<?php
class Database {

  public function __construct(){
    $this->host     = 'localhost';
    $this->username = 'addresbook';
    $this->password = 'addresbook';
    $this->database = 'addresbook';

    $this->mysqli = new mysqli($this->host, $this->username, $this->password)
      OR die("There was a problem connecting to the database.");

    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
       exit();
   }

   $this->mysqli->select_db($this->database);

   if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }

    return true;
  }

  public function query($query) {
    $return = array();

    if(!$result = $this->mysqli->query($query))
    {
        $return['success'] = false;
        $return['error'] = $this->mysqli->error;

        return $return;
    }

    $return['success'] = true;
    $return['affected_rows'] = $this->mysqli->affected_rows;
    $return['insert_id'] = $this->mysqli->insert_id;

    if(0 == $this->mysqli->insert_id)
    {
      if (!is_object($result)) {
        return false;
      }

      $return['count'] = $result->num_rows;
      $return['rows'] = array();
      while ($row = $result->fetch_assoc()) {
        $return['rows'][] = $row;
      }

      $result->close();
    }
    return $return;
  }

  public function __destruct() {
    $this->mysqli->close()
      OR die("There was a problem disconnecting from the database.");
  }
}