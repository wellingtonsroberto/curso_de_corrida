<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$treino_nome         = $_POST["treino_nome"];
$treino_dist        = $_POST["treino_dist"];
$treino_veloc        = $_POST["treino_veloc"];

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
if(@mysql_query("INSERT INTO tb_tipo VALUES (	NULL , '$treino_nome', '$treino_dist', '$treino_veloc' )")) {

	if(mysql_affected_rows() == 1){
		echo "Registro efetuado com sucesso<br />";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar o cadastro";
		exit;
	}	
	@mysql_close();
}

}
?>
<a href="index.html">Voltar</a>