<?php

include "conexao_banco.php";

$codigo = (isset($_GET['codigo'])) ? true : false;

if(!$codigo)
	die("Parametro codigo não enviado!");

$query = "SELECT * FROM exercicio WHERE codigo = " . $_GET['codigo'];

$link = conectaBanco();
$result = mysqli_query($link,$query);

$row = mysqli_fetch_row($result)

?>
<body bgcolor="lightblue">
<div align="center">
  <form action="alterar.php" method="post">
    <table border=1 width="800" bgcolor="#F0F0F0">
      <tr>
        <td colspan="2" align="center">Alterar registro</td>
      </tr>
      <tr>
         <td align='right'>Codigo</td>
         <td>
         	<?php 
         	echo "<input readonly name='codigo' type='number' value='" . $row[0] . "' >";
         	?> 
         </td>
      </tr>
      <tr>
         <td align='right'>Descricao</td>
         <td>
         	<?php 
         	echo "<input name='descricao' value='" . $row[1] . "' >";
         	?> 
         </td>
      </tr>
      <tr>
         <td align='right'>Numero</td>
         <td>
         	<?php 
         	echo "<input name='numero' type='number' value='" . $row[2] . "' >";
         	?> 
         </td>
      </tr>
      <tr>
         <td align='right'>Logico</td>
         <td>
         	<?php 
         	if($row[3])
         		echo "<input name='logico' type='checkbox' checked>";
         	else
         		echo "<input name='logico' type='checkbox'>";
         	?> 
         </td>
      </tr>
      <tr>
        <td colspan="2" align="right"><input type='submit' value='Salvar'></td>
      </tr>
    </table>
  </form>
</div>
</body>