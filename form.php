<!DOCTYPE html>
	<html>
		<header>
			<title>Forms</title>
		 </header>
<body>

<form method="get">
<fieldset name="userinfo">
<legend>Informações do usuário</legend>
<label for="nome">Nome</label>
<input type="text" name="nome" id ="nome">
<label for="Matricula">Matricula</label>
<input type="text" name="Matricula" id="Matricula">
<label for="av1">Av1</label>
<input type="text" name="av1" id="av1">
<label for="av2">Av2</label>
<input type="text" name="av2" id="av2">
<input type="submit">
</fieldset>
</form>
</body>
</html>
<?php   

$ehpost = true;
if($_SERVER["REQUEST_METHOD"] == "GET"){

$nome = $_GET["nome"];
$mat = $_GET["Matricula"];
$av1 = $_GET["av1"];
$av2 = $_GET["av2"];
$media = ($av1+$av2)/2;
$arquivo = fopen("Alunos.txt","w");
$txt = "nome;Matricula;av1;av2;\n";
fwrite($arquivo,$txt);
$txt =$nome. ";".$mat.";".$av1.";".$av2.";".$media.  "\n";
fwrite($arquivo,$txt);
fclose($arquivo);




}else {
    $ehpost = false;
        }
echo "arquivo gerado \n";
echo $media;

?>