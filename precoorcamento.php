<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema - Calculo de pre�o para or�amento</title>
</head>

<body>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />

<table width="800" border="1" align="center">


<?php

$est = $_POST["est"]; 
$imp = $_POST["imp"];
$troca = $_POST["troca"];
$porclucro = $_POST["porclucro"];
$custo = 1;
$porc = 1;
$valorfinal = 1;


if (($est=="") or ($imp=="") or ($troca=="") or ($porclucro=="")){ 
echo "Preencha todos os campos!";
exit;
}

function valorcusto($est,$imp,$troca){
	global $porc;
	global $custo;
	global $valorfinal;
	global $porclucro;
$porc=((($imp*100)/$est)/100);
$custo=(($troca*$porc)+$troca);
$valorfinal=($custo*$porclucro);
}

valorcusto($est,$imp,$troca);

//echo "O pre�o final da pe�a �: ".$valorfinal; 
//echo "$var <br>";
//echo "O pre�o de custo da pe�a para troca �: ".$custo; 

//echo "$var <br>";
//echo "O valor do imposto �: ".$imp;
//echo "$var <br>";
//echo "O valor da porcentagem de imposto �: ".$porc;

//cria uma variavel que recebe o valor da outra apenas com duas casas decimais, o unico problema e que aredonda a numero
$vvalorfinal = number_format($valorfinal, 2, '.', '');
$vcusto = number_format($custo, 2, '.', '');
$vimp = number_format($imp, 2, '.', '');
$vporc = number_format($porc, 2, '.', '');

echo"
  <tr>
    <td>O pre�o final da pe�a �: R$$vvalorfinal</th>
	  </tr>\n
	    <tr>
    <td>O pre�o de custo da pe�a para troca �: R$$vcusto</th>
		  </tr>\n
		      <tr>
    <td>O valor do imposto �: R$$vimp</th>
	  </tr>\n
	   <tr>
    <td>O valor da porcentagem de imposto �: $vporc</th>
	<tr>
    <td>A porcentagem de lucro utilizada foi: $porclucro</th>
	  </tr>\n
  </tr>\n";

?>  
</table>
</body>
</html>