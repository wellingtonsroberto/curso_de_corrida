<?php
if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro de Fator</title>
<style>
<!--
.textBox { border:1px solid gray; width:200px;} 
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_fator.php">

  <table width="400" border="0" align="center">
    <tr>
      <td width="145">Fator</td>
      <td width="245"><input name="treino_fator" type="text" id="treino_fator" maxlength="45" class="textBox" /></td>
    </tr>
    <tr>
      <td>Dia a ser empregado</td>
      <td><select name="treino_dia" type="text" id="treino_dia" maxlength="64" class="textBox">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        </option>
      </select> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></td>
    </tr>
  </table>

</form>

</body>
</html>
