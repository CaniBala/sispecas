<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema - Lista de Pecas</title>
</head>

<body>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />

<?php

$descricao = $_POST["descricao"];
$nome = $_POST["nome"];
$pn = $_POST["pn"];
$db = mysql_connect ("localhost", "usuariobanco", "senhabanco");//preencher com as informações do banco.
mysql_select_db("nomedobanco",$db);//preencher com as informações do banco.

if (($pn=="") and ($descricao=="") and ($nome=="")){ 
echo "Preencha todos os campos!";
exit;
}

if (($pn=="") and ($nome=="")){ 
$result = mysql_query("select * from tabela where descricao like '%$descricao%'", $db);
}
if (($descricao=="") and ($nome=="")){ 
$result = mysql_query("select * from tabela where pn like '%$pn%'", $db);
}
if (($pn=="") and ($descricao=="")){ 
$result = mysql_query("select * from tabela where nome like '%$nome%'", $db);
}

?>

<table width="800" border="1" align="center">
  <tr>
    <th>Codigo</th>
    <th>PartNumber</th>
    <th>Nome</th>
    <th>Preco</th>
    <th>Descricao</th>
  </tr>
<?php

while($l = mysql_fetch_array($result)) {
	$cod      = $l["cod"];
	$pn = $l["pn"];
	$nome     = $l["nome"];
	$preco      = $l["preco"];
	$descricao      = $l["descricao"];
	
	echo"
  <tr>
    <td>$cod</td>
    <td>$pn</td>
    <td>$nome</td>
    <td>$preco</td>
	<td>$descricao</td>
  </tr>\n";
}  
?>  
</table>

</body>
</html>