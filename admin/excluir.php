<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
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
$id = $_GET["id"];

Abre_Conexao();
if(mysql_query("delete from tb_teste where id_teste = $id")) {
	if(mysql_affected_rows() == 1){
	}	
}	
}

?>
<meta http-equiv="refresh" content=1;url="tables.php">