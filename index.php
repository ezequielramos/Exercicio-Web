<?php

include "conexao_banco.php";

$query = "SELECT * FROM exercicio";

$link = conectaBanco();
$result = mysqli_query($link, $query);

?>
<div align="center">
  <table border=1 width="800">
    <tr>
      <td colspan="6" align="center">Cadastro exercicio</td>
    </tr>
    <tr>
      <td colspan="6" align="right"><input type='button' value='Novo registro' onclick="window.location.href='form_incluir.php'"></td>
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

    $find = false;

    while ($row = mysqli_fetch_row($result)) {

      $find = true;

      echo "<tr><td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td width='10' align='center'><input onclick='return false;' name='logico' type='checkbox'";
      if($row[3])
        echo "checked";
      echo "></td>";
      echo "<td width='10'><input type='button' value='Alterar' onclick=\"window.location.href='form_alterar.php?codigo=" . $row[0] . "'\"></td>";
      echo "<td width='10'><input type='button' value='Excluir' onclick=\"window.location.href='excluir.php?codigo=" . $row[0] . "'\"></td></tr>";
    }

    if(!$find){
      echo "<tr><td colspan='6' align='center'><i>Nenhum registro cadastrado.</i></td></tr>";
    }

    ?>

  </table>
</div>
