<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST ["nome"]; 
    $matricula= $_POST["matricula"];
echo json_encode($_POST["nome"]);
echo json_encode($_POST["matricula"]);

    if($nome == NULL  || $matricula== NULL)
    {
        echo "Nao foi <br>";
    }
    else if(!file_exists("Dojo.json")) {
       $arquivo = fopen ("Dojo.json", "w");
       $cabecalho = "{\"Aluno\":[";
       fwrite($arquivo, $cabecalho);
    

       $linha = ($nome.";".$matricula.";");

       fwrite($arquivo, $linha);
       fwrite($arquivo, $footer);

       fclose($arquivo);

    }
    else {
        $arquivo = fopen("Dojo.json", "a+");        
        
       // foreach ($arquivo as $linha) {
            $linha = json_encode($nome.";".$matricula.";");
           // $footer = "] \n }";

            fwrite($arquivo, $linha);
           // fwrite($arquivo,$footer);
       // }


        fclose($arquivo);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dojo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="incluir.php" method="POST">
        <fieldset>
            <label>Nome:</label> 
            <input type="text" name="nome">
            <label>Matricula:</label> 
            <input type="text" name="matricula"> <br>
            <input type="submit" value="incluir">
        </fieldset>
    </form>
    
</body>
</html>