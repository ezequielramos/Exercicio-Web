<?php

include "conexao_banco.php";

$logico = (isset($_POST['logico'])) ? "true" : "false";

$query = "UPDATE exercicio SET descricao = '". $_POST['descricao'] . "', numero = ". $_POST['numero'] . ", logico = " . $logico . " WHERE codigo = ". $_POST['codigo'];

$link = conectaBanco();
mysqli_query($link,$query);

?>
<body bgcolor="lightblue">
<div align="center">
  <table border=1 width="800" bgcolor="#F0F0F0">
  	<tr>
  		<td align='center'><font size=6>Registro alterado com sucesso.</font></td>
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