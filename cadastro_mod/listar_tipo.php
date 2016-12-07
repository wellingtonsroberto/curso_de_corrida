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
$re = mysql_query("SELECT * FROM tb_tipo;");
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
		<td>Nome Treino</td>
		<td>Distancia Treino</td>
		<td>Velocidade Treino</td>

	</tr>
<?php
while($l = mysql_fetch_array($re)) {
	$treino_nome        = $l["treino_nome"];
	$treino_dist       = $l["treino_dist"];
	$treino_veloc    = $l["treino_veloc"];

	
echo "
	<tr>
		<td>&nbsp;$treino_nome</td>		
		<td>&nbsp;$treino_dist</td>
		<td>&nbsp;$treino_veloc</td>
	</tr>\n";
}	
@mysql_close();
?>	
</table>