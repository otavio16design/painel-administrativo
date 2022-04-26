<?php
require_once("../seguranca.php");
require_once('../conexao/banco.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Formulário de Cadastro </title>
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
      document.frm_login.txt_nome.focus()
      document.frm_login.txt_login.focus()
      document.frm_login.txt_senha.focus()
    }

    function validar_dados() {

      if (document.frm_login.txt_nome == "") {
        alert("Insira seu Nome!");
        document.frm_login.txt_nome.focus();

        return false;
      }

      if (document.frm_login.txt_login == "") {
        alert("Você deve preencher o Login!");
        document.frm_login.txt_login.focus();

        return false;
      }

      if (document.frm_login.txt_senha == "") {
        alert("Você deve preencher a Senha!");
        document.frm_login.txt_senha.focus();

        return false;
      }
    
    }
  </script>

</head>

<body onload="foco()">

<form name="frm_login" action="cadastro_login.php" method="post">
<div id="principal">
  <h1> Cadastro Login </h1>
    <label> Nome </label>
    <input name="txt_nome" type="text" class="input_01">
    
    <label> Login </label>
    <input name="txt_login" type="text" class="input_01">
    
    <label> Senha </label>
    <input name="txt_senha" type="password" class="input_01">
    
    <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">
</div>
</form>
</body>
</html>
