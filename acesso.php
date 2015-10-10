<?
include "config.php"; //carregamos o arquivo de configuraчуo

$nome = $_COOKIE["login"]; //pegamos o cookie login, gravado anteriormente com o login
$pass = $_COOKIE["senha"]; //pegamos o cookie senha, gravado anteriormente com o login

$db   = mysql_connect ($host, $login_db, $senha_db); //conecta ao mysql
$basedados      =       mysql_select_db($database); //conecta a base de dados

$confirmacao = mysql_query("SELECT * FROM `$tabela` WHERE login = '$nome' AND senha = '$pass'", $db); //verificamos se o conteudo dos cookies esta correto
$contagem = mysql_num_rows($confirmacao); //resulta da pesquisa acima

//aqui finalizamos assim essa pсgina, a comparaчуo iremos fazer nas pсginas com acesso restrito

echo "Vocъ estс logado como: " .$nome = $_COOKIE["login"];

?>