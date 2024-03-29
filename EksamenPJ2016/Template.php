<!DOCTYPE html>
<!-- av: Silje Lilleeng Johnsen-->
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="Styles/meny.css">
    <?php if (isset($script)) {
        echo $script;
    } ?>
</head>
<body>
<div id="wrapper">
    <nav id="navigation1">
        <div class="meny">
            <ul id="menu">
                <li><a href="index.php">
                        <div class="logo"><img src="Bilder/Fjerdingenlogo.png"></div>
                    </a></li>
                <li><a href="Events.php">EVENTS</a></li>
                <li><a href="Nyheter.php">NYHETER</a></li>
                <li><a href="Oppslagstavle.php">OPPSLAGSTAVLE</a></li>
                <li><a href="Hjelp.php">HJELP</a></li>
                <li><a href="TipsOss.php">TIPS OSS</a></li>
                <li><a href="Logginn.php">
                        <div class="logginn"><img src="Bilder/ExistingUsersKeyIcon.png"</div>
                    </a></li>
            </ul>
        </div>
        <div id="main">
            <div id="content area" <?php if (isset($divConf)) {
                echo $divConf;
            } ?>>
                <?php echo $content; ?>
            </div>
        </div>
    </nav>
</div>
</body>
</html>         