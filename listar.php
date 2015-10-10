<?php
@ini_set('display_errors', '1');
error_reporting(E_ALL);

mysql_connect ("localhost", "usuariobanco", "senhabanco");//preencher com as informações do banco.
mysql_select_db("nomedobanco",$db);//preencher com as informações do banco.
$resultado = mysql_query("select * from tabela");
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema - Lista de Pecas</title>
</head>

<body>
<?
include "acesso.php";

//aqui deixe aberto, pois iremos fechar somente no final da página
if ( $contagem == 1 ) {

  ?>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />
<?php
if(mysql_num_rows($resultado) < 1) {
	echo"Nenhum dado cadastrado!";
	exit;
}
?>
<table width="800" border="1" align="center">
  <tr>
    <th>ID</th>
    <th>Codigo</th>
    <th>PartNumber</th>
    <th>Nome</th>
    <th>Preco</th>
    <th>Descricao</th>
    <th>EDITAR/EXCLUIR</th>
  </tr>
<?php
while($l = mysql_fetch_array($resultado)) {
	$id        = $l["id_tabela"];
	$cod      = $l["cod"];
	$pn = $l["pn"];
	$nome     = $l["nome"];
	$preco      = $l["preco"];
	$descricao      = $l["descricao"];
	
	echo"
  <tr>
    <td>$id</td>
    <td>$cod</td>
    <td>$pn</td>
    <td>$nome</td>
    <td>$preco</td>
	<td>$descricao</td>
    <td><a href=\"editar.php?id=$id\">[Editar]</a> | <a href=\"excluir.php?id=$id\">[Excluir]</a></td>
  </tr>\n";
}  
?>  
</table>
<?
  } else {
    echo "Você não está logado."; //aqui fechamos o IF que colocamos no começo da página, fazendo com que quem não estiver logado, veja somente esse texto, caso digite o endereço dessa página (www.seusite.com.br/restrita.php, por exemplo)
	}
  ?>
</body>
</html>
