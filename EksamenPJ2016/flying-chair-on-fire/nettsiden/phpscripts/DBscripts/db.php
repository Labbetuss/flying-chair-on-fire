<?php

  $host = "localhost";
  $database = "PJEksamen";
  $user = "root";
  $password = "root";

  try {
      $dbConn = new PDO("mysql:host=$host; dbname=$database", "$user", "$password");
      $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Feil ved tilkobling mot databasen, spør Daniel om hjelp";
    exit();
  }

 ?>
