<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
</head>
<body>
    <?php
        session_start();
        $imie = ucfirst($_SESSION['log']);
        if ( !isset($_SESSION["log"]) ) {
            header("location: index.php")
            ;die()
        ;}
        if ( isset($_POST['kosyk']) ) {

            $_SESSION["koszyk"] = serialize($_POST['kosyk']);
        }
        
        foreach (unserialize($_SESSION['koszyk']) as $produkt) {
            print($produkt . "<br>");
        }
    ?>
</body>
</html>