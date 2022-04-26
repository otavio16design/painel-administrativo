﻿<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['new_codigo'];

$sql = "select * from tb_news where new_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$dados = mysqli_fetch_array($sql);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Formulário Atualizar </title>
<link rel="stylesheet" type="text/css" href="../css/formatacao.css">
<script language="JavaScript">
    // function mascara(t, mask) {

    //   var i = t.value.length;
    //   var saida = mask.substring(1, 0);
    //   var texto = mask.substring(i)

    //   if (texto.substring(0, 1) != saida) {
    //     t.value += texto.substring(0, 1);
    //   }

    // }

    function foco() {
      document.frm_news.txt_titulo.focus()
      document.frm_news.txt_status.focus()
      document.frm_news.txt_autor.focus()
    }

    function validar_dados() {
      if (document.frm_news.txt_titulo.value == "") {
        alert("Você deve preencher o campo Título!");
        document.frm_news.txt_titulo.focus();

        return false;
      }

      if (document.frm_news.txt_status.value == "") {
        alert("Você deve preencher o campo Status!");
        document.frm_news.txt_status.focus()


        return false;
      }
      if (document.frm_news.txt_autor.value == "") {
        alert("Você deve preencher o campo Autor!");
        document.frm_news.txt_autor.focus()


        return false;
      }
    }
  </script>

</head>

<body onload="foco()">
<form name="frm_news" action="atualizar_news.php" method="post">
<div id="principal">
  <h1> Atualizar Notícias </h1>
    <label> Código </label>
    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['new_codigo']; ?>">
    
    <label> Título </label>
    <input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados['new_titulo']; ?>">
    
    <label> Descrição </label>
    <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['new_descricao']; ?>">
    
    <label> Autor </label>
    <input name="txt_autor" type="text" class="input_01" value="<?php echo $dados['new_autor']; ?>">
        
    <label> Status </label>
    <select name="txt_status" class="select_01">
        <option value="A" <?php if($dados['new_status'] == "A") {echo "selected";} ?> > Ativo </option>
        <option value="I" <?php if($dados['new_status'] == "I") {echo "selected";} ?> > Inativo </option>
    </select>
    
    <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">
</div>
</form>
</body>
</html>