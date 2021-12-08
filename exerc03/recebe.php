<?php
    $dono = $_GET["dono"];
    $tel = $_GET["tele"];
    $nome = $_GET["nome"];
    $esp = $_GET["espe"];
    $data = $_GET["data"];
    $proc = $_GET["proce"];
    if (isset($_GET["tama"])){ 
        $tama = $_GET["tama"]; 
    } else{
        $tama = "Não informado";
    }

    echo "<h1>Informações</h1><br> 
    <b style='font-size: larger;'>Dono</b><br> <b>Nome:</b> $dono <br> <b>Telefone:</b> $tel <br><br> 
    <b style='font-size: larger;'>Animal</b><br> <b>Nome:</b> $nome <br> <b>Espécie:</b> $esp <br> <b>Tamanho:</b> $tama <br><br> 
    <b style='font-size: larger;'>Atendimento</b><br> <b>Data:</b> $data <br> <b>Procedimento</b> $proc"
?>