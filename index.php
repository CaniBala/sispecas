<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema - Sistema de Lista de Pecas</title>
</head>
<body>
<?
include "acesso.php"; 
//aqui deixe aberto, pois iremos fechar somente no final da p�gina
if ( $contagem == 1 ) {

  ?>
  <br />
 <a href="logout.php">Logout</a>
 <center><img src="images/logo.gif" alt="logo" /></center>
  <h4 align="center"><strong>Sistema de Cadastro de Pecas </strong></h4>
<br />
<br />
<center><a href="buscar.php">Pesquisar Peca</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="cadastro.php">Cadastrar Peca</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="listar.php">Listar Pecas</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="precoorcamento1.php">Gerar pre�o de or�amento</a></center>
<?
  } else {
    echo "Voc� n�o est� logado."; //aqui fechamos o IF que colocamos no come�o da p�gina, fazendo com que quem n�o estiver logado, veja somente esse texto, caso digite o endere�o dessa p�gina (www.seusite.com.br/restrita.php, por exemplo)
	}
  ?>
</body>
</html>