<body bgcolor="lightblue">
<div align="center">
  <form action="incluir.php" method="post">
    <table border=1 width="800" bgcolor="#F0F0F0">
      <tr>
        <td colspan="2" align="center"><font size=6>Novo registro</font></td>
      </tr>
      <tr>
         <td align='right'>Descricao</td>
         <td><input name='descricao'></td>
      </tr>
      <tr>
         <td align='right'>Numero</td>
         <td><input name='numero' type='number'></td>
      </tr>
      <tr>
         <td align='right'>Logico</td>
         <td><input name='logico' type='checkbox'></td>
      </tr>
      <tr>
        <td><input type='button' value='Voltar' onclick="window.location.href='index.php'"></td>
        <td align="right"><input type='submit' value='Salvar'></td>
      </tr>
    </table>
  </form>
</div>
</body>