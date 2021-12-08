<?php
    $nome = $_POST["nome"];
    $sobre = $_POST["sobre"];
    $email = $_POST["email"];
    $apli = $_POST["apli"];
    $senio = $_POST["senio"];
    $ling = $_POST["lingua"];

    echo "<p>Nome: $nome $sobre</p><br>
    <p>Email: $email</p><br>
    <p>$apli</p><br>
    <p>$senio</p>"
?>