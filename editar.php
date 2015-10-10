<?php
@ini_set('display_errors', '1');
error_reporting(E_ALL);

$id = $_GET["id"];
settype($id, "integer");

mysql_connect ("localhost", "usuariobanco", "senhabanco");//preencher com as informações do banco.
mysql_select_db("nomedobanco",$db);//preencher com as informações do banco.

$resultado = mysql_query("select * from tabela where id_tabela = $id");
$dados     = mysql_fetch_array($resultado);
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema - Edicao de Cadastro</title>
</head>

<body>
<center><a href="URL COM LOGO DO SISTEMA AQUI"> <img src="images/logo.gif" alt="logo" /></a></center>
<br />
<form id="form1" name="form1" method="post" action="salvar_edicao.php">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
  <h2 align="center"><strong>Sistema - Edição de Cadastro de Peca</strong></h2>
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Cod</td>
      <td width="209"><input name="cod" type="int" id="cod" value="<?php echo $dados["cod"];?>" /></td>
    </tr>
    <tr>
      <td>PartNumber</td>
      <td><input name="pn" type="int" id="pn" value="<?php echo $dados["pn"];?>" /></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome" value="<?php echo $dados["nome"];?>" /></td>
    </tr>    
    <tr>
      <td>Preco</td>
      <td><input name="preco" type="int" id="preco" value="<?php echo $dados["preco"];?>" /></td>
    </tr>   
    <tr>
      <td>Descricao</td>
      <td><input name="descricao" type="text" id="descricao" value="<?php echo $dados["descricao"];?>" /></td>
    </tr> 
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Gravar" style="cursor:pointer"/></td>
    </tr>
  </table>
</form>
</body>
</html>
