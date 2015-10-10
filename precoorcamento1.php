<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema - Preço para orçamento</title>
</head>

<body>
<?
include "acesso.php";

//aqui deixe aberto, pois iremos fechar somente no final da página
if ( $contagem == 1 ) {

  ?>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />
<form id="form1" name="form1" method="post" action="precoorcamento.php">
  <h2 align="center"><strong>Preço para orçamento</strong></h2>
 
    <center>
      <em>*Use sempre ponto (.) no lugar de vírgula (,)!</em>
    </center>
    
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Valor de estoque(sem impostos):</td>
      <td width="209"><input name="est" type="text" id="est" /></td>
    </tr>
    <tr>
      <td>Valor do imposto:</td>
      <td><input name="imp" type="text" id="imp" /></td>
    </tr>
    <tr>
      <td>Valor de troca:</td>
      <td><input name="troca" type="text" id="troca" /></td>
    </tr>   
    <tr>
      <td>Porcentagem de lucro(Ex: 60% = 1.6):</td>
      <td><input name="porclucro" type="text" id="porclucro" /></td>
    </tr> 
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="calcular" value="Calcular" style="cursor:pointer"/></td>
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
