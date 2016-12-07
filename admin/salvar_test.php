<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$test_veloc      = $_POST["test_veloc"];
$test_temp        = $_POST["test_temp"];
$test_tiro      = $_POST["test_tiro"];
$test_dist        = $_POST["test_dist"];
$test_trein      = $_POST["test_trein"];
$test_pace        = $_POST["test_pace"];
$test_repet        = $_POST["test_repet"];

if(file_exists("init2.php")) {
	require "init2.php";		
} else {
	echo "Arquivo init2.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init2.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}

Abre_Conexao();
if(@mysql_query("INSERT INTO tb_test VALUES (	NULL ,'$test_veloc', '$test_temp', '$test_tiro', '$test_dist', '$test_trein', '$test_pace', '$test_repet'  )")) {

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
<a href="index.php">Voltar</a>