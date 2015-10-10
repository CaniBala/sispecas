<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema - Cadastro de Pecas</title>
</head>

<body>
<?
include "acesso.php";

//aqui deixe aberto, pois iremos fechar somente no final da página
if ( $contagem == 1 ) {

  ?>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />
<form id="form1" name="form1" method="post" action="salvar.php">
  <h2 align="center"><strong>Sistema de Cadastro de Pecas </strong></h2>
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Codigo</td>
      <td width="209"><input name="cod" type="int" id="cod" /></td>
    </tr>
    <tr>
      <td>PartNumbe</td>
      <td><input name="pn" type="int" id="pn" /></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome" /></td>
    </tr>    
    <tr>
      <td>Preco</td>
      <td><input name="preco" type="int" id="preco" /></td>
    </tr>    
    <td>Descricao</td>
      <td><input name="descricao" type="text" id="descricao" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Gravar" style="cursor:pointer"/></td>
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
