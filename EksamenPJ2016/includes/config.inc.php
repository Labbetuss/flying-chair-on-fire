<?php
$live = false;
$verbose = false;
$contact_mail = 'davdan15@student.westerdals.no';

define('BASE_URI', '../');
define('BASE_URL', 'localhost:8011/EksamenPJ2016');
define('MYSQL', 'db/mysql.inc.php');

REQUIRE (MYSQL);

session_start();


//Også trenger vi en bedre måte å håndtere feilmeldinger på

function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {
  global $live, $contact_mail, $verbose;

  $message = "An error occurred in script '$e_file' on line $e_line: \n$e_message\n";

  //Hvis verbose er true så får vi en mer detaljert feilmelding
  if(!$verbose){
    $message .= "<pre>" . print_r($e_vars, 1) . "</pre>\n";
  } else {
    $message .= "<pre>" . print_r(debug_backtrace(), 1) . "</pre>\n";
  }

  //Hvis siden ikke er live så poster vi bare feilmeldingen direkte på siden
  if(!$live) {
    echo '<div class="error">' . nl2br($message) . '</div>';
  } else {
    error_log ($message, 1, $contact_mail, 'From:error@pjeksamen.no');
  }

  if($e_number != E_NOTICE) {
    echo '<div class="error">Noe har skjedd! Beklager forstyrrelsen.</div>';
  }
  return true;
}

set_error_handler('my_error_handler');

// Funksjonen som kan kalles fra alle nettsider for å ha autentisering
function redirect_invalid_user($check = 'user_id', $destination = 'index.php', $protocol = 'http://') {
  if(!isset($_SESSION[$check])) {
    $url = $protocol . BASE_URL . $destination;
    header("Location: $url");
    exit();
  }
}
