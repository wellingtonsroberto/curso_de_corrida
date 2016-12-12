<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$test_fator      = $_POST["test_fator"];
$test_dia        = $_POST["test_dia"];
$test_sem        = $_POST["test_sem"];
$test_vzs        = $_POST["test_vzs"];

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
if(@mysql_query("INSERT INTO tb_fator VALUES (	NULL ,'$test_fator', '$test_dia', '$test_sem', '$test_vzs'  )")) {

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
<meta http-equiv="refresh" content=1;url="tables_fator.php">