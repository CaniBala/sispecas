<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Enviar Senha</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?
include "config.php"; //inclui o arquivo de configura��es

$db   = mysql_connect ($host, $login_db, $senha_db); //conecta ao mysql
$basedados      =       mysql_select_db($database); //conecta a base de dados

$nome = $_POST['nome'];

$login = $_POST['login'];

$senha = $_POST['senha'];

$senha2 = $_POST['senha2'];

$email = $_POST['email'];

$confirmacao = mysql_query("SELECT * FROM `$tabela` WHERE login = '$login' AND email = '$email'", $db); //verifica se o login e a email conferem
  while ($row = mysql_fetch_array($confirmacao)) {
    $login = $row["login"]; //adiciona a variavel $login o login do usuario
	$senha = $row["senha"]; //adiciona a variavel $senha a senha do usuario
    $email = $row["email"]; //adiciona a variavel $email o email do usuario
	}

$contagem = mysql_num_rows($confirmacao); //traz o resultado da pesquisa acima

if ( $contagem == 1 ) {
  $msg  = "Recupera��o de senha" . chr(13) . chr(10);
  $msg .= "Senha enviada em " . date("d/m/Y") . ", os dados seguem abaixo: " . chr(13) . chr(10) . chr(10);
  $msg .= "Login : " . $login . chr(13) . chr(10);
  $msg .= "Email : " . $email . chr(13) . chr(10);
  $msg .= "Senha : " . $senha . chr(13) . chr(10);

  $Remetente = "contato@site.com.br"; //remetente do email, coloque o email do seu site

  mail($email, "Sistema - Recupera��o de Senha(Sis Pe�as)",$msg,"From: $Remetente\n"); //campos do email na ordem, email destinho (n�o deve ser alterada), assunto, conteudo (n�o deve ser alterado), remetente (tamb�m n�o altere)
  
  echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Sua senha foi enviada com sucesso para o email: $email.</font></div>"; //resposta se o email foi enviado com sucesso
  } else {
    echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Seu login ou email est� incorreto.</font></div>"; //resposta se n�o foi possivel enviar o email
	}
?>
</body>
</html>