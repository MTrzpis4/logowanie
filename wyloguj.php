<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziękujemy</title>
</head>
<body>
<?php
    session_start();
    if ( isset($_SESSION['log']) ) {
        unset($_SESSION['log']);
    } else {
        header('location: index.php');
        exit();
    }
?>
Wylogowałeś się ze strony.
<br><br>
<a href="index.php">Powróć do strony głównej</a>
</body>
</html>

