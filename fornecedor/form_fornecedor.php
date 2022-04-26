﻿
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Formulário de Cadastro </title>
<link rel="stylesheet" type="text/css" href="../css/formatacao.css">

<script language="JavaScript">
    function mascara(t, mask) {

      var i = t.value.length;
      var saida = mask.substring(1, 0);
      var texto = mask.substring(i)

      if (texto.substring(0, 1) != saida) {
        t.value += texto.substring(0, 1);
      }

    }

    function foco() {
      document.frm_fornecedor.txt_nome.focus()
      document.frm_fornecedor.txt_cel.focus()
      document.frm_fornecedor.txt_email.focus()
    }

    function validar_dados() {
      if (document.frm_fornecedor.txt_nome.value == "") {
        alert("Você deve preencher o campo Nome!");
        document.frm_fornecedor.txt_nome.focus();

        return false;
      }

      if (document.frm_fornecedor.txt_cel.value == "") {
        alert("Você deve preencher o campo Celular!");
        document.frm_fornecedor.txt_cel.focus()


        return false;
      }
      if (document.frm_fornecedor.txt_email.value == "") {
        alert("Você deve preencher o campo Email!");
        document.frm_fornecedor.txt_email.focus()


        return false;
      }
    }
  </script>

</head>

<body onload="foco()">

<form name="frm_fornecedor" action="cadastro_fornecedor.php" method="post">
<div id="principal">
  <h1> Cadastro Fornecedor </h1>
    <label> Nome </label>
    <input name="txt_nome" type="text" class="input_01">
    
    <label> Telefone </label>
    <input name="txt_fone" type="text" onkeypress="mascara(this, '## ####-####')" maxlength="12" class="input_01">
    
    <label> Celular </label>
    <input name="txt_cel" type="text" onkeypress="mascara(this, '## #####-####')" maxlength="13" class="input_01">
    
    <label> E-mail </label>
    <input name="txt_email" type="email" class="input_01">
    
    <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">
</div>
</form>
</body>
</html>
