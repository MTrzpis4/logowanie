<?php
session_start();
if(isset($_SESSION['koszyk'])){
    if (isset($_POST['do_usuniecia']) && is_array($_POST['do_usuniecia'])){
        $produkty_do_usuniecia = $_POST['do_usuniecia'];
        $koszyk = unserialize($_SESSION['koszyk']);
        foreach($produkty_do_usuniecia as $produkt){
            if(($key = array_search($produkt, $koszyk)) !== false){
                unset($koszyk[$key]);
            }
        }
        $_SESSION['koszyk'] = serialize($koszyk);
    }
}
