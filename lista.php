<?php   

  $nomes = array("ronaldo","qarla", "osaiais","tadeu","fugironaKOMBI");
  $x;
  $notas = array(3,7,5,8,2); 
  ?>
  <!Doctype html>
  <html>
<head>
    <title>lista</title>
</head>
  <body>
  <table style = border:solid>
    <tr>
  <th>Nome</th> <th>Nota</th>
    </tr>
  <?php

    
   for ($x=0; $x < 5; $x++){
    echo "<tr>
    <td> $nomes[$x] </td> <td> $notas[$x]</td> </tr>";
   } 
    
 ?>
 </table>
</body>
</html>