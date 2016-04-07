<?php

DEFINE('DB_USER', 'daniel');
DEFINE('DB_PASSWORD', 'davidsen');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'pjeksamen');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbc) {
  die("Tilkoblingen mislykkes: " . mysqli_connect_error());
}

mysqli_set_charset($dbc, 'utf8');

function escape_data($data) {
  global $dbc;
  return mysqli_real_escape_string(trim($data), $dbc);
} //ENDOF

// Returnerer en Array. Da denne ikke tar input fra brukeren så trenger jeg ikke bekymre meg for SQL injections
function get_blogpost($type = "Alle") {
  global $dbc;

  $sql = "SELECT * FROM blog_posts WHERE type = $type;";
  $result = mysqli_query($dbc, $sql);

  return mysqli_fetch_all($result, MYSQLI_ASSOC);

}
