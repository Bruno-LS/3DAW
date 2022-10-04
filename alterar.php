<?php
include("server.php");
$bolAlt = false;
if (isset($_POST["verificar"])) {
    $nome = $_POST["Nome"];
    $mat = $_POST["Matricula"];
    $AV1 = $_POST["AV1"];
    $AV2 = $_POST["AV2"];

    $sqlAlt = "UPDATE `registroalunos` SET";

    if(isset($_POST["alterar"]))
    {
        if ($nome != "") {
            $sqlAlt .= " `nome` = '$nome' , ";
        }
        if ($AV1 != "") {
            $sqlAlt .= " `AV1` = '$AV1' ";
        }
        if ($AV2 != "") {
            $sqlAlt .= " `AV2` = '$AV2' ";
        }
    
        $sqlAlt .= "WHERE  `matricula` =  '$mat' ";
    
        echo $sqlAlt;
    
    
    
        if (!$conn->query($sqlAlt)) {
            echo ("Error description: " . $conn->error);
        } else {
            $bolAlt = true;
        }
    }


    
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="nav.css" />
    <script src="form_js.js"></script>

</head>

<body>

    <section>
        <input type="submit" value="Incluir" onclick="fom('incluir')">
        <input type="submit" value="Alterar" onclick="fom('alterar')">
        <input type="submit" value="Excluir" onclick="fom('excluir')">
        <input type="submit" value="Listar/Buscar" onclick="fom('listar')">
    </section>
    <p id="form"></p>