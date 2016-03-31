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

  echo "Det fungerer!";


  //Midlertidlig lokasjon for generering av tabeller

    $sql = $dbConn->prepare("
      CREATE TABLE blog_posts (
      postID INT(11) NOT NULL AUTO_INCREMENT,
      postTitle VARCHAR(255) NOT NULL,
      postContent TEXT,
      postDate DATE NOT NULL,
      author INT(11),
      PRIMARY KEY(postID));
    ");



 ?>
