<?php
  class Connection{
    private $servername, $username, $password, $dbname, $connection;

    function __construct($servername, $username, $password, $dbname){

      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->dbname = $dbname;
      $this->connection = $this->get_connection();
    }
    private function get_connection(){
      $this->connection = new mysqli(
        $this->servername,
        $this->username,
        $this->password,
        $this->dbname);

      if($this->connection->connect_error) {
        die("Connection failed: ");
      }

      return $this->connection;
    }










    function get_data($sql){

      if ($stmt = $this->connection->prepare($sql)) { // įvykių lentelė rašome MySQL užklausą

        $stmt->execute(); // inicijuojame duomenų paėmimą pagal užklausą

        $result = $stmt->get_result(); // pasiimame gautus rezultatus

        // sudedame gautus rezultatus iš duomenų bazės į masyvą
        while ($row = $result->fetch_assoc()) {
           $rows[] = $row;
        }
      }

      $stmt->close();

      return $rows;
    }












    function __destruct(){
      $this->connection->close();
    }








  }
 ?>
