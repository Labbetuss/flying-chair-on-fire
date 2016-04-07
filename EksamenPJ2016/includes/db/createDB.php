<?php

$host = "localhost";
$database = "PJEksamen";
$user = "daniel";
$password = "davidsen";

try {
    $dbCreate = new PDO("mysql:host=$host", $user, $password);
    $dbCreate->exec("CREATE DATABASE IF NOT EXISTS PJEksamen COLLATE utf8_general_ci;") or die("Oppstod problemer med tilkoblinger");
} catch (PDOException $e) {
    die("Oppstod en feil, gi denne feilmeldingen til Daniel: " . $e->getMessage());
}


$dbCreate = null;

try {
    $dbConn = new PDO("mysql:host=$host; dbname=$database", "$user", "$password");
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Feil ved tilkobling mot databasen, spør Daniel om hjelp" . $e->getMessage();
    exit();
}


$sql = $dbConn->prepare("
CREATE TABLE users (
userID INT(20) NOT NULL AUTO_INCREMENT,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
authority_level ENUM('ADMIN','STUDENT','U_ADMIN'),
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
type ENUM('Alle','Teknologi','Kunstfag','Ledelse', 'Kommunikasjon') NOT NULL,
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
PRIMARY KEY(commentID),
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
oppslagType ENUM('SKOLE', 'PRIVAT', 'DIVERSE', 'KJØPOGSALG'),
PRIMARY KEY(oppslagID),
FOREIGN KEY (author) REFERENCES users(userID));
");
$sql->execute() or die("Da oppstod det en feil ved generering av 'oppslag' tabellen. Slett alle tabeller og prøv på nytt. Eventuelt ta kontakt med Daniel");
//-----------------------------------------------------------------------------------


// Så må vi fylle users tabellen med litt data
$sql = $dbConn->prepare("
INSERT INTO users (username, password, email, authority_level) VALUES
('test', SHA1('testbruker'), 'testbruker@student.westerdals.no', 'STUDENT'),
('admin', SHA1('adminbruker'), 'adminbruker@student.westerdals.no', 'ADMIN'),
('uadmin', SHA1('underadminbruker'), 'underadmin@student.westerdals.no', 'U_ADMIN');
");
$sql->execute() or die("Veldig rart at feilen skulle oppstå her. Men gi Daniel feilkode 23");
//---------------------------------------------------------------------------------------


$sql = $dbConn->prepare("
INSERT INTO blog_posts (postTitle, postContent, postDate, author, type) VALUES
('Velkommen til Fjerdingen sin blogg', 'Da har vi endelig en flott blogg! Tenk hvor heldige vi er på denne campusen!', '2016-04-04', 3, 'Alle'),
('Alle vet at Avdeling Teknologi er best! Ingen protest.', 'Teknologi er best! <b> BEST </b>', '2016-04-05', 3, 'Teknologi'),
('Ledelse uten leder!', 'Hvordan skal det gå med Avdeling for Ledelse som ikke har noen ledere', '2016-04-06', 3, 'Ledelse'),
('Kunst i hverdagen!', 'Vi ber om at alle elever finner kunst i hverdagen som de publiserer i kommentarene under!', '2016-04-07', 3, 'Kunstfag');
");
$sql->execute() or die("Fortsatt rart å få en feilmelding her! Men gi Daniel feilkode 23");
//------------------------------------------------------------------------------------------

$sql = $dbConn->prepare("
INSERT INTO oppslag (oppslagTitle, oppslagContent, date_posted, author, oppslagType) VALUES
('Studenter søkes for prosjekt', 'Need students for a project, the pay is not good but the work is hard!', '2016-01-01', 3, 'SKOLE');
");
$sql->execute() or die("Rart å ha en feil her, men gi Daniel feilkode 23");
//-------------------------------------------------------------------------------------------

$sql = $dbConn->prepare("
INSERT INTO comments (commentContent, author, postID, commentDate) VALUES
('Dette er noe tull! Hvor er pengene våre!', 1, 2, '2016-04-05');
");
$sql->execute() or die("Er fortsatt rart med en feilmelding her. Men gi Daniel feilmelding 23!");

header("Location: ../../index.php");

?>
