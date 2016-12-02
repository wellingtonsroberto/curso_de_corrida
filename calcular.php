<?php
$hostdb = "localhost";// Geralmente Localhost
$userdb = "USUARIO";//usuário do seu banco de dados
$passdb = "SENHA";// senha do banco de dados
$tabledb = "TABELA_DO_BANCO";// tabela do banco de dados

$conecta = mysql_connect($hostdb, $userdb, $passdb) or die (mysql_error());
@mysql_select_db($tabledb, $conecta) or die ("Erro ao conectar com o banco de dados");

$busca = $_POST['palavra'];// palavra que o usuario digitou
$categoria = $_POST['categoria']; //categoria que o usuario deseja

$busca_query = mysql_query("SELECT * FROM moveis WHERE nome LIKE '%$busca%' AND categoria = '$categoria'")or die(mysql_error());//faz a busca com as palavras enviadas

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($dados = mysql_fetch_array($busca_query)) {
    echo "Id do Produto: $dados[id]<br />"; 
    echo "Nome do Produto: $dados[nome]<br />";
    echo "Preço do Produto: $dados[preco] Reais<br />";
    echo "Categoria do Produto: $dados[categoria]<br />";
    echo "<hr>";
}
?>