<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Cadastro de Membros</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />
<center>
<?
include "acesso.php";

//aqui deixe aberto, pois iremos fechar somente no final da p�gina

if ( $contagem == 0 ) {

  ?>
<form name="cadastrar.php" method="post" action="enviar_cadastro.php">
  <table width="400" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="150"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
      <td width="250"><input name="nome" type="text" id="nome" maxlength="75"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
      <td><input name="login" type="text" id="login" maxlength="30"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></td>
      <td><input name="senha" type="password" id="senha" maxlength="30"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Repetir 
        Senha:</font></td>
      <td><input name="senha2" type="password" id="senha2" maxlength="30"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Email:</font></td>
      <td><input name="email" type="text" id="email" maxlength="50"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center"> 
          <input name="enviar" type="submit" id="enviar" value="Enviar Cadastro">
          <input name="limpar" type="reset" id="limpar" value="Limpar Dados">
        </div></td>
    </tr>
  </table>
</form>
</center>
<?
  } else {
    echo "Voc� n�o est� logado."; //aqui fechamos o IF que colocamos no come�o da p�gina, fazendo com que quem n�o estiver logado, veja somente esse texto, caso digite o endere�o dessa p�gina (www.seusite.com.br/restrita.php, por exemplo)
	}
  ?>
</body>
</html>
