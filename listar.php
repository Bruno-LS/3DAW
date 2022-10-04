<?php
include("server.php");
$mat = $_POST["Matricula"];
if (isset($_POST["list"]) && ($mat != "" || $mat != NULL)) {

    $sqlExib = "SELECT `matricula`, `nome`, `AV1`, `AV2` FROM `registroalunos` WHERE `matricula` = '$mat'";

    $boolTest = false;
    if (!$conn->query($sqlExib)) {
        echo ("Error description: " . $conn->error);
    }
    if ($result = mysqli_query($conn, $sqlExib)) {
        while ($row = mysqli_fetch_row($result)) {
            $printM = $row[0];
            $printN = $row[1];
            $printAV1 = $row[2];
            $printAV2 = $row[3];
        }
        if (mysqli_num_rows($result)) {
            $boolTest = true;
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

    <?php
    if (isset($_POST["list"]) && ($mat == "" || $mat == NULL)) {
        echo
         "<tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>AV1</th>
            <th>AV2</th>
        </tr>";

        $sqlExibTds = "SELECT `matricula`, `nome`, `av1`, `av2` FROM `registroalunos`";

        if (!$conn->query($sqlExibTds)) {
            echo ("Error description: " . $conn->error);
        }

        if ($result = mysqli_query($conn, $sqlExibTds)) {
            while ($row = mysqli_fetch_row($result)) {
                echo  "<tr><td > $row[0]</td> <br>";
                echo  "<td> $row[1]</td> <br>";
                echo  "<td> $row[2]</td></tr> <br>";
                echo  "<td> $row[3]</td></tr> <br>";
            }
        }
        echo  "</table>";
    } else if (isset($_POST["list"])) {
        if ($boolTest == true) {
            echo "<table>
                    <tr>
                        <td>$printM</td>
                        <td>$printN</td>
                        <td>$printAV1</td>
                        <td>$printAV2</td>
                    </tr>
                </table>";
        }
    }
    ?>

</body>

</html>