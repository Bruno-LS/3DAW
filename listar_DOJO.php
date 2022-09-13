<?php
$arquivo = "Dojo.txt"
$listar = fopen($arquivo, "r");

while(!feof($listar))
{
    $nome = fgets($listar, 5000);

    echo json_encode($nome)."<br>";

}

fclose($listar);
?>