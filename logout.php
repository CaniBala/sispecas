<?
header("Refresh: 3, login.php");
setcookie("login","",time()-3600);
setcookie("senha","",time()-3600);
echo "Voce foi deslogado com sucesso!"; 
?>