<!DOCTYPE html>
<!-- av: Silje Lilleeng Johnsen-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>?php echo $title; ?</title>
        <link rel="stylesheet" type="text/css" href="Styles/meny.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="logo">
                <li><p>FJERDINGEN</p></li>
            </div>
            
            <nav id="navigation1">
                <ul id="meny">
                    <ul id="menu">
                        <li><a href="index.php">FORSIDE</a></li>
                        <li><a href="Kantina.php">KANTINA/BAR</a></li>
                        <li><a href="Events.php">EVENTS</a></li>
                        <li><a href="Nyheter.php">NYHETER</a></li>
                        <li><a href="Studentarbeid.php">STUDENTARBEID</a></li>
                        <li><a href="Hjelp.php">HJELP</a></li>
                        <li><a href="Oppslagstavle.php">OPPSLAGSTAVLE</a></li>
                    </ul>
            </nav>
            <div id="main">
                <div id="content area">
                <?php echo $content; ?>
                </div>
            </div>

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
