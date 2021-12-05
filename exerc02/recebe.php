<?php
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $medico = $_POST["med"];
    $especialidade = $_POST["espe"];
    echo "<h1>Recebe dados do formulário</h1>
    <table><tr><td>Nome paciente:</td><td>$nome</td></tr>
    <tr><td>Data consulta:</td><td>$data</td></tr>
    <tr><td>Nome médico:</td><td>$medico</td></tr>
    <tr><td>Especialidade:</td><td>$especialidade</td></tr></table>"
?>