<?php
  include("server.php");
$bolCriar = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
    if ($conn->connect_error) {
        die("Conexao com o banco de dados falhou!!!");
    }


    if (isset($_POST["incluir"])) {
        $nome = $_POST["Nome"];
        $mat = $_POST["Matricula"];
        $AV1 = $_POST["AV1"];
        $AV2 = $_POST["AV2"];

        $sqlCriar = "INSERT into `registroalunos`(`nome`, `matricula`, `AV1`, `AV2`) VALUES ('$nome','$mat','$AV1', '$AV2')";

        if (!$conn->query($sqlCriar)) {
            echo("Error description: " . $conn->error);
        } else {
            $bolCriar = true;
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

    <?php if($bolCriar == true){ echo("<p style=\"margin-top: 0px;\">Aluno Criado!</p>");} ?>
</body>

</html>