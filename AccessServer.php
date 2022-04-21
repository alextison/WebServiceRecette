<?php

function Connection() {
    $login = "root";
    $password = "";
    $db = "recette";
    $server = "localhost"; 

    try {
        $dbc = new PDO('mysql:host='.$server.';dbname='.$db.'', $login, $password);
        foreach($dbc->query('SELECT * from recette') as $row) {
            print_r($row);
        }
        $dbc = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

?>