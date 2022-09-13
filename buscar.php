<?php
    $matricula=strval ($_GET["matricula"]);
    $encontrei = false;
    $nome = "";

    
    if($matricula == ""  || $matricula== NULL)
    {
        echo "Nao foi  <br>";
    }
    else {
        $arquivo=fopen("Dojo.txt","r");
        
       
        $x=0;
        while (!feof($arquivo)) {
            $linha[] = fgets($arquivo);

            $aluno = explode(";", $linha[$x]);
        if($aluno[0] == strval($matricula))
        {
            $encontrei = true;
            $nome = $aluno[0];
        } else {
        }
        $x++;
        }
    }
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Alterar Matrícula</title>
</head>
<body>
    <form action="buscar.php" method="GET">
        <fieldset>
            <label>Nome:</label> 
            <input type="text" name="nome" value=<?php echo "\"" . $nome . "\""; ?>>
            <label>Matricula:</label> 
            <input type="text" name="matricula" value = <?php echo "\"" . $matricula . "\""; ?>> <br>
            <input type="submit" value="alterar">
        </fieldset>
    </form>
</body>
</html>