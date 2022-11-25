<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "bancodaw";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }
}
    ?>