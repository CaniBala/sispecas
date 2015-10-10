<?php
@ini_set('display_errors', '1');
error_reporting(E_ALL);

$id = $_GET["id"];
settype($id, "integer");

mysql_connect ("localhost", "usuariobanco", "senhabanco");//preencher com as informações do banco.
mysql_select_db("nomedobanco",$db);//preencher com as informações do banco.

mysql_query("delete from tabela where id_tabela = $id");
mysql_close();
header("Location: listar.php");
?>
