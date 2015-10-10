<?php
@ini_set('display_errors', '1');
error_reporting(E_ALL);

$cod      = $_POST["cod"];
$pn = $_POST["pn"];
$nome     = $_POST["nome"];
$preco      = $_POST["preco"]; 
$descricao      = $_POST["descricao"]; 
$id        = $_POST["id"];
mysql_connect ("localhost", "usuariobanco", "senhabanco");//preencher com as informações do banco.
mysql_select_db("nomedobanco",$db);//preencher com as informações do banco.

mysql_query("UPDATE tabela SET cod = '$cod', pn = '$pn', nome = '$nome', preco = '$preco', descricao = '$descricao' WHERE tabela.id_tabela = $id");
mysql_close();
header("Location: listar.php");
?>
