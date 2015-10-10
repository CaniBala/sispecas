<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sistema - Lista de Pecas</title>
</head>

<body>
<?
include "acesso.php";

//aqui deixe aberto, pois iremos fechar somente no final da página
if ( $contagem == 1 ) {

  ?>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />
<form method="post" action="http://www.site.com.br/sispecas/busca.php">

 <h2 align="center"><strong>Consulta de Pecas</strong></h2>
 
 
<table width="75%" border="1" align="center">

<tr>

<td width="15%">Descricao:</td>

<td width="85%"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">

<input name="descricao" type="text" id="descricao">

<input type="submit" name="Submit" value="Buscar">

</font></strong></td>

</tr>

</table>
<table width="75%" border="1" align="center">

<tr>

<td width="15%">PartNumber:</td>

<td width="85%"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">

<input name="pn" type="text" id="pn">

<input type="submit" name="Submit" value="Buscar">

</font></strong></td>

</tr>

</table>
<table width="75%" border="1" align="center">

<tr>

<td width="15%">Nome:</td>

<td width="85%"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">

<input name="nome" type="text" id="nome">

<input type="submit" name="Submit" value="Buscar">

</font></strong></td>

</tr>

</table>

</form>
<?
  } else {
    echo "Você não está logado."; //aqui fechamos o IF que colocamos no começo da página, fazendo com que quem não estiver logado, veja somente esse texto, caso digite o endereço dessa página (www.seusite.com.br/restrita.php, por exemplo)
	}
  ?>
</body>
</html>