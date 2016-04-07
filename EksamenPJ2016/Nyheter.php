<!-- av: Silje Lilleeng Johnsen-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nyheter</title>
    <link rel="stylesheet" href="Styles/Nyheter.css">
    <link rel="stylesheet" href="Styles/Responsive.css" media="screen and (max-width:1200px)">
</head>
<body>
<?php
include 'Templateutencont.php';
require 'includes/getData.php';

$blogArray = returnData();


for ($x = 0; $x < 3; $x++) {
    echo '<div class="artboks" ><div class="arthead"> <h2>' . $blogArray[$x]["postTitle"] . '</h2> <p>Admin</p> </div> <div class="arttekst"> <p>' . $blogArray[$x]["postContent"] . '</p> </div>
    <div class="artfoot">  <p>' . $blogArray[$x]["postDate"] . '</p>  </div> </div>';
    }

?>

</body>
</html>