<?php


  $host = "localhost";
  $database = "PJEksamen";
  $user = "daniel";
  $password = "davidsen";

  try {
      $dbConn = new PDO("mysql:host=$host; dbname=$database", "$user", "$password");
      $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Feil ved tilkobling mot databasen, spør Daniel om hjelp" . $e->getMessage();
    exit();
  }

  require('db_classes.php');


  function postArray {

    $resultat = array();
    $query = "SELECT * FROM blog_posts";
    $stmt = $dbConn->prepare($query);
    $stmt->execute();

    $posts = $stmt->fecthAll();
    if($posts) {
      foreach($posts as $post){
        $resultat[$post['postID']] = new blog_post($post['postID'], $post['postTitle'], $post['postContent'], $post['postDate'], $post['author'], $post['type']);
      }
    }
    return $resultat;

  }

?>
