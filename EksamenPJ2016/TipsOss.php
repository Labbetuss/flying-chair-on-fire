<!-- av: Silje Lilleeng Johnsen-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tips oss</title>
    </head>
    <body>
        <div id="meny">
        <?php 
        include 'Templatehead.php';
        
        $navn = $epost = $type = $kommentar = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $navn = test_input($_POST["navn"]);
            $epost = test_input($_POST["epost"]);
            $kommentar = test_input($_POST["kommentar"]);
            $kommentar = test_input($_POST["type"]);
        }
        
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <h2>Har du tips til oss?</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name">
            <br><br>
            E-post: <input type="text" name="epost">
            <br><br>
            Ditt tips: <textarea name="kommentar" rows="15" cols="40"></textarea>
            <br><br>
            Type: <input type="radio" name="type" value="ansatt">Ansatt
            <input type="radio" name="type" value="student">Student
            <input type="radio" name="type" value="andre">Andre
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
        
        include 'Templatefoot.php';
        ?>
        </div>
    </body>
</html>

