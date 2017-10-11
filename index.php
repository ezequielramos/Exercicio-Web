<?php

$link = mysqli_connect("localhost", "root", "udesc", "exercicio");

$query = "SELECT * FROM exercicio";
$result = mysqli_query($link, $query);

 ?>

 <table border=1>
   <tr>
     <td colspan="6" align="center">Cadastro exercicio</td>
   </tr>
   <tr>
     <td>Codigo</td>
     <td>Descricao</td>
     <td>Numero</td>
     <td>Logico</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php
   while ($row = mysqli_fetch_row($result)) {
   	echo "<tr><td>".$row[0]."</td>";
   	echo "<td>".$row[1]."</td>";
   	echo "<td>".$row[2]."</td>";
   	echo "<td>".$row[3]."</td>";
    echo "<td><input type='button' value='Alterar'></td>";
    echo "<td><input type='button' value='Excluir'></td></tr>";
   }
   ?>
 </table>
