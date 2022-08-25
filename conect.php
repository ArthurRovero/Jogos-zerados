<?php
    $con = "localhost";
    $user = "root";
    $pass = "";
    $db = "jogoszerados";
    $conect = mysqli_connect($con, $user, $pass, $db);

    if(!$conect){
        echo "<p>Conect Error !!!</p>";
    }
?>