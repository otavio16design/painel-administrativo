﻿
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
<form name="frm_news" action="cadastro_news.php" method="post">
<div id="principal">
  <h1> Cadastro Notícias </h1>
    
    <label> Título </label>
    <input name="txt_titulo" type="text" class="input_01">
    
    <label> Descrição </label>
    <input name="txt_descricao" type="text" class="input_01">
    
    <label> Autor </label>
    <input name="txt_autor" type="text" class="input_01">
    
    <label> Data de Publicação </label>
    <input name="txt_data_publicacao" type="date" class="input_01">
    
    <label> Status </label>
    <select name="txt_status" class="select_01">
        <option value="A"> Ativo </option>
        <option value="I"> Inativo </option>
    </select>

    <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">
</div>
</form>
</body>
</html>
