r<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Teste de Acesso</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?
include "acesso.php";

//aqui deixe aberto, pois iremos fechar somente no final da p�gina
if ( $contagem == 1 ) {

  ?>
<div align="center">OI!</div>
<?
  } else {
    echo "Voc� n�o est� logado."; //aqui fechamos o IF que colocamos no come�o da p�gina, fazendo com que quem n�o estiver logado, veja somente esse texto, caso digite o endere�o dessa p�gina (www.seusite.com.br/restrita.php, por exemplo)
	}
  ?>
</body>
</html>