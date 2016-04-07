<?php

DEFINE('DB_USER', 'daniel');
DEFINE('DB_PASSWORD', 'davidsen');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'PJEksamen');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbc) {
    die("Tilkoblingen mislykkes: " . mysqli_connect_error());
}

mysqli_set_charset($dbc, 'utf8');
