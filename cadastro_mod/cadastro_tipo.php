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
<title>Cadastro</title>
<style>
<!--
.textBox { border:1px solid gray; width:200px;} 
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_tipo.php">

  <table width="400" border="0" align="center">
    <tr>
      <td width="145">Nome do Treino</td>
      <td width="245"><input name="treino_nome" type="text" id="treino_nome" maxlength="45" class="textBox" /></td>
    </tr>
    <tr>
      <td>Distancia Treino</td>
      <td><input name="treino_dist" type="text" id="treino_dist" maxlength="64" class="textBox" /></td>
    </tr>
         <td>Velocidade Treino</td>
      <td><input name="treino_veloc" type="text" id="treino_veloc" maxlength="64" class="textBox" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></td>
    </tr>
  </table>

</form>

</body>
</html>
