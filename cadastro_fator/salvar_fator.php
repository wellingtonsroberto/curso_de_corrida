<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$treino_fator        = $_POST["treino_fator"];
$treino_dia        = $_POST["treino_dia"];

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
if(@mysql_query("INSERT INTO tb_comp VALUES (	NULL , '$treino_fator', '$treino_dia' )")) {

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