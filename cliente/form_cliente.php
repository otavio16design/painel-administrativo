﻿<!doctype html>
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
      document.frm_cliente.txt_nome.focus()
    }

    function validar_dados() {
      if (document.frm_cliente.txt_nome.value == "") {
        alert("Você deve preencher o campo Nome!");
        document.frm_cliente.txt_nome.focus();

        return false;
      }

      if (document.frm_cliente.txt_data_nascimento.value == "") {
        alert("Você deve preencher o campo Data de Nascimento!");
        document.frm_cliente.txt_data_nascimento.focus()


        return false;
      }
    }
  </script>

</head>

<body onload="foco()">

  <form name="frm_cliente" id="frm_cliente" action="cadastro_cliente.php" method="post">
    <div id="principal">
      <h1> Cadastro Cliente </h1>

      <label> Nome </label>
      <input name="txt_nome" type="text" class="input_01">

      <label> Data de Nascimento </label>
      <input name="txt_data_nascimento" type="date" class="input_01">

      <label> E-mail </label>
      <input name="txt_email" type="email" class="input_01">

      <label> Sexo </label>
      <select name="txt_sexo" class="select_01">
        <option value="F"> Feminino </option>
        <option value="M"> Masculino </option>
      </select>

      <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">
    </div>
  </form>
</body>

</html>