<!DOCTYPE html>
<!-- av: Silje Lilleeng Johnsen-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>?php echo $title; ?</title>
        <?php require('php/config.inc.php') ?>
        <link rel="stylesheet" type="text/css" href="Styles/meny.css">
   <!--     <script=$script></script> -->
    </head>
    <body>
        <div id="wrapper">
            <nav id="navigation1">
                <div class="meny" id="meny">
                    <ul id="menu">
                        <li><a href="index.php">FORSIDE</a></li>
                        <li><a href="Kantina.php">KANTINA/BAR</a></li>
                        <li><a href="Events.php">EVENTS</a></li>
                        <li><a href="Nyheter.php">NYHETER</a></li>
                        <li><a href="Studentarbeid.php">STUDENTARBEID</a></li>
                        <li><a href="Oppslagstavle.php">OPPSLAGSTAVLE</a></li>
                        <li><a href="Hjelp.php">HJELP</a></li>
                    </ul>
                </div>
                <div id="main">
                    <div id="content area">
                    <?php echo $content; ?>
                    </div>
                </div>
            </nav>


        </div>
            <footer>
                <nav id="navigation2">
                    <ul id="foot">
                        <li><a href="TipsOss.php">TIPS OSS</a></li>
                        <li><a href="OmOss.php">OM OSS</a></li>
                    </ul>
                </nav>
            </footer>
    </body>
</html>
