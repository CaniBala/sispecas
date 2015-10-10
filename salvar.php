<?php
@ini_set('display_errors', '1');
error_reporting(E_ALL);

$cod      = $_POST["cod"];
$pn = $_POST["pn"];
$nome     = $_POST["nome"];
$preco      = $_POST["preco"];
$descricao      = $_POST["descricao"];

mysql_connect ("localhost", "usuariobanco", "senhabanco");//preencher com as informações do banco.
mysql_select_db("nomedobanco",$db);//preencher com as informações do banco.

mysql_query("INSERT INTO tabela ( id_tabela , cod , pn , nome , preco , descricao ) 
			VALUES ( NULL , '$cod', '$pn', '$nome', '$preco', '$descricao')");
mysql_close();
echo "Salvo com sucesso<br />";
?>
<a href="index.php">Voltar</a>