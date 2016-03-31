<?php


try {
  $dbCreate = new PDO("mysql:host=localhost", "daniel", "davidsen");
  $dbCreate->exec("CREATE DATABASE IF NOT EXISTS PJEksamen;") or die("Oppstod problemer med tilkoblinger");
} catch (PDOException $e) {
  die("Oppstod en feil, gi denne feilmeldingen til Daniel: " . $e->getMessage());
}


require "db.php";


$sql = $dbConn->prepare("
  CREATE TABLE users (
  userID INT(20) NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  authority_level ENUM('ADMIN','STUDENT','LÆRER'),
  PRIMARY KEY(userID));
");

$sql->execute() or die("Da oppstod det en feil ved generering av 'author' tabellen. Slett hele shiten og prøv på nytt");

//---------------------------------------------------------------------------

$sql = $dbConn->prepare("
  CREATE TABLE blog_posts (
  postID INT(20) NOT NULL AUTO_INCREMENT,
  postTitle VARCHAR(255) NOT NULL,
  postContent TEXT,
  postDate DATE NOT NULL,
  author INT(20) NOT NULL,
  type ENUM('Alle','Teknologi','Kunstfag','Ledelse') NOT NULL,
  PRIMARY KEY(postID),
  FOREIGN KEY (author) REFERENCES users(userID));
");

$sql->execute() or die("Da oppstod det en feil ved generering av 'blog_posts' tabellen. Slett hele shiten (author og blog_posts) og prøv på nytt");

// ------------------------------------------------------------------------------

$sql = $dbConn->prepare("
  CREATE TABLE comments (
  commentID INT(20) NOT NULL AUTO_INCREMENT,
  commentContent TEXT,
  author INT(20) NOT NULL,
  postID INT(20) NOT NULL,
  commentDate DATE NOT NULL,
  PRIMARY KEY(commentID),|
  FOREIGN KEY (author) REFERENCES users(userID),
  FOREIGN KEY (postID) REFERENCES blog_posts(postID));
");

$sql->execute() or die("Da oppstod det en feil ved generering av 'comments' tabellen. Slett alle tabeller og prøv på nytt. Eventuelt ta kontakt med Daniel");

// ----------------------------------------------------------------------------------

$sql = $dbConn->prepare("
  CREATE TABLE oppslag (
  oppslagID INT(20) NOT NULL AUTO_INCREMENT,
  oppslagTitle VARCHAR(255) NOT NULL,
  oppslagContent TEXT,
  date_posted DATE,
  author INT(20) NOT NULL,
  PRIMARY KEY(oppslagID),
  FOREIGN KEY (author) REFERENCES users(userID));
");

$sql->execute() or die("Da oppstod det en feil ved generering av 'oppslag' tabellen. Slett alle tabeller og prøv på nytt. Eventuelt ta kontakt med Daniel");

//-----------------------------------------------------------------------------------


 ?>
