<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep</title>
</head>
<body>
    <?php
        session_start();
        $imie = ucfirst($_SESSION['log']);
        if ( !isset($_SESSION["log"]) ) {
            header("location: index.php")
            ;die()
        ;}
        print "Witaj $imie.";
    ?>
    <br><br>
    Jesteś na stronie głównej.
    <br><br>
    <form action="koszyk.php" method="post">
        Wybór produktu:<br><br>
            <select name="kosyk[]" multiple style="height: 200px">
                <option value="Monitor">Monitor</option>
                <option value="Drukarka">Drukarka</option>
                <option value="Klawiatura">Klawiatura</option>
                <option value="Myszka">Myszka</option>
                <option value="Głośniki">Głośniki</option>
                <option value="Kamera internetowa">Kamera internetowa</option>
                <option value="Słuchawki">Słuchawki</option>
                <option value="Stacja DVD">Stacja DVD</option>
                <option value="Dysk twardy">Dysk twardy</option>
                <option value="Pendrive">Pendrive</option>
                <option value="Komputer">Komputer</option>
            </select>
            <br><br>
    <input type="submit" value="DODAJ">
    </form><br>
    <a href="koszyk.php">koszyk</a>
    <br>
    Przed opuszczeniem strony wyloguj się!
    <br><br>
    <a href="wyloguj.php">Wyloguj</a>
</body>
</html>