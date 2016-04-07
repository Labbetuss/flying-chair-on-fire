<!-- av: Silje Lilleeng Johnsen-->
<!-- Skal inneholde (navn, epost, kommentarfelt, og "gruppetilhørighet") -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tips oss</title>
    <link rel="stylesheet" type="text/css" href="Styles/Oppslag.css">
    <link rel="stylesheet" href="Styles/Sidemal.css">
    <link rel="stylesheet" href="Styles/Responsive.css" media="screen and (max-width:1200px)">
</head>
<body>
<?php
include 'Templateutencont.php';
?>
<div class="boks-innhold">
    <div class="hoved kollaps">
        <h1>Vi er gruppe 23</h1>
        <p>Vi er eksamensgruppe 23, dette er vår løsning på oppgaven for
            våren 2016. Fokuset vårt på denne oppgaven har vært å lage en
            side som er lett å navigere og som sømløst gir en brukervennlig
            samt informativ nettside for de som er interesserte i hva som
            skjer på det nye campuset på Fjerdingen.</p>
        <ul>
            <li><b>Gruppen består av 6 medlemmer:</b></li>
            <li>Silje Lilleeng Johnsen</li>
            <li>Oda Humlung</li>
            <li>Daniel Davidsen</li>
            <li>Thomas Jacobsen</li>
            <li>Awais Azeem</li>
            <li>Herman Johannessen</li>
        </ul>
        <p> Håper dere liker løsningen vi har kommet med!</p>
    </div>
    <div class="side kollaps">
        <?php

        $navn = $epost = $type = $kommentar = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $navn = test_input($_POST["navn"]);
            $epost = test_input($_POST["epost"]);
            $kommentar = test_input($_POST["kommentar"]);
            $kommentar = test_input($_POST["type"]);
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>
        <h2>Har du tips til oss?</h2>
        <p>
            <span class="error">*må fylles inn.</span>
        </p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name: <input type="text" name="name">
            <span class="error">*navn</span>
            <br><br>
            E-post: <input type="text" name="epost">
            <span class="error">*e-post</span>
            <br><br>
            Ditt tips: <textarea name="kommentar" rows="15" cols="40"></textarea>
            <br><br>
            Type: <input type="radio" name="type" value="ansatt">Ansatt
            <input type="radio" name="type" value="student">Student
            <input type="radio" name="type" value="andre">Andre
            <span class="error">*type</span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        echo "<h2>Ditt tips:</h2>";
        echo $navn;
        echo "<br>";
        echo $epost;
        echo "<br>";
        echo $kommentar;
        echo "<br>";
        echo $type;
        ?>
    </div>
</div>
</body>
</html>

