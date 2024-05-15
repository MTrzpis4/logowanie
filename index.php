<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
    <?php
        // session_start();
        // print "ID sesji: " . session_id() . "<br>";
        // if ( !isset($_SESSION['cnt']) ) {
        //     $_SESSION['cnt'] = 0;
        // }
        // $_SESSION['cnt']++;
        // print "Ilość odwiedzin: " . $_SESSION['cnt'];

        /*

        
        if($login == $loginy[$i] && $haslo == $hasla[$i])
        */
        $loginy = file('loginy.txt');
        $hasla = file('hasla.txt');
        session_start();
        $onlyOneWarning = true;
        if ( isset($_SESSION["log"]) ) {
            header('location: strona.php');
            exit();
        } 
        elseif (isset($_POST['nazwa']) && isset( $_POST['haslo'] ) ) {
#           if ( $_POST['nazwa'] == "janek" && $_POST['haslo'] == "jan23" )
            $login = $_POST['nazwa'];
            $haslo = $_POST['haslo'];
            for($i=0; $i<count($loginy); $i++){ 
            if($login == trim($loginy[$i]) && $haslo == trim($hasla[$i]))
            {
                $_SESSION["log"] = $_POST['nazwa'];
                header('location: strona.php');
                exit();
            } elseif($onlyOneWarning){
                print "Nieprawidłowe dane logowania";
                $onlyOneWarning = false;
            }
        }}
    ?>
    <form action="index.php" method="post">
        <h1>Logowanie</h1>
        <h3>Nazwa użytkownika:</h3>
        <input type="text" name="nazwa">
        <br/>
        <h3>Hasło:</h3>
        <input type="password" name="haslo">
        <input type="submit" value="Zaloguj się">
    </form>
</body>
</html>