<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>?php echo $title; ?</title>
        <link rel="stylesheet" type="text/css" href="meny.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            
            <nav id="navigation1">
                <ul id="meny">
                    <ul id="menu">
                        <li><a href="index.php">FORSIDE</a></li>
                        <li><a href="#">KANTINA/BAR</a></li>
                        <li><a href="#">EVENTS</a></li>
                        <li><a href="#">NYHETER</a></li>
                        <li><a href="#">ARKIV</a></li>
                        <li><a href="#">STUDENTARBEID</a></li>
                        <li><a href="#">HJELP</a></li>
                    </ul>
            </nav>
            
            <div id="content area">
                <?php echo $content; ?>
                
            </div>
            
            <footer>
                <nav id="navigation2">
                    <ul id="foot">
                        <li><a href="#">TIPS OSS</a></li>
                        <li><a href="#">OM OSS</a></li>
                    </ul>
                </nav>
            </footer>
        </div>
    </body>
</html>
