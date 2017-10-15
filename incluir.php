<?php

include "conexao_banco.php";

$logico = (isset($_POST['logico'])) ? "true" : "false";

$query = "INSERT INTO exercicio (descricao,numero,logico) VALUES ('" . $_POST['descricao'] . "'," . $_POST['numero'] . "," . $logico . ")";

$link = conectaBanco();
mysqli_query($link,$query);

?>
<div align="center">
  <table border=1 width="800">
  	<tr>
  		<td align='center'>Registro criado com sucesso.</td>
  	</tr>
  	<tr>
  		<td align='center'><?php echo $query;?></td>
  	</tr>
  	<tr>
  		<td align='center'><input type='button' value='Voltar' onclick="window.location.href='index.php'"></td>
  	</tr>
  </table>
</div>