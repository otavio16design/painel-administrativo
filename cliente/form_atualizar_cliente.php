<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['cli_codigo'];

$sql = "select * from tb_cliente where cli_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$dados = mysqli_fetch_array($sql);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Formulário Atualizar </title>
<link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>
<form name="frm_cliente" action="atualizar_cliente.php" method="post">
<div id="principal">
  <h1> Atualizar Cliente </h1>
    
  <label> Código </label>
    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['cli_codigo']; ?>">

    <label> Nome </label>
    <input name="txt_nome" type="text" class="input_01" value="<?php echo $dados['cli_nome']; ?>">
    
    <label> E-mail </label>
    <input name="txt_email" type="email" class="input_01" value="<?php echo $dados['cli_email']; ?>">
    
    <label> Sexo </label>
    <select name="txt_sexo" class="select_01">
        <option value="F" <?php if($dados['cli_sexo'] == "F") {echo "selected";} ?> > Feminino </option>
        <option value="M" <?php if($dados['cli_sexo'] == "M") {echo "selected";} ?> > Masculino </option>
    </select>
    
    <input name="btn_enviar" type="submit" class="btn">
</div>
</form>
</body>
</html>
