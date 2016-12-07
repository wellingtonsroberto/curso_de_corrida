<a href="index.html">Voltar</a>
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

Abre_Conexao();
$re = mysql_query("SELECT * FROM tb_comp;");
if(mysql_errno() != 0) {
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe $erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}
?>

<table width="100%" border="1">
	<tr>
		<td>Fator de progressão na Semana</td>
		<td>Dia a ser empregado</td>

	</tr>
<?php
while($l = mysql_fetch_array($re)) {
	$treino_fator        = $l["treino_fator"];
	$treino_dia       = $l["treino_dia"];

	
echo "
	<tr>	
		<td>&nbsp;$treino_fator</td>
		<td>&nbsp;$treino_dia</td>
	</tr>\n";
}	
@mysql_close();
?>	
</table>