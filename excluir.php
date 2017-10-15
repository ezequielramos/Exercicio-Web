<?php

include "conexao_banco.php";

$codigo = (isset($_GET['codigo'])) ? true : false;

if(!$codigo)
	die("Parametro codigo não enviado!");

$query = "DELETE FROM exercicio WHERE codigo = " . $_GET['codigo'];

$link = conectaBanco();
$result = mysqli_query($link, $query);

?>
<body bgcolor="lightblue">
<div align="center">
  <table border=1 width="800" bgcolor="#F0F0F0">
  	<tr>
  		<td align='center'><font size=6>Registro excluido com sucesso.</font></td>
  	</tr>
  	<tr>
  		<td align='center'><?php echo $query;?></td>
  	</tr>
  	<tr>
  		<td align='center'><input type='button' value='Voltar' onclick="window.location.href='index.php'"></td>
  	</tr>
  </table>
</div>
</body>