<?PHP

require_once("../seguranca.php");

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> .:: Admin ::. </title>
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">

body {
	background-color: #FFF;
	margin: 0px;
	width: 100%;
	height: 100vh;
	font-family: Verdana, Geneva, sans-serif;
	color: #6e7882;
	font-size: 14px;
}

#principal {
	width: 100%;
	height: 1000px;
}

#menu {
	width: 20%;
	height: 1000px;
	background-color: #800b00;
	float: left;
}

#conteudo {
	width: 80%;
	height: 100vh;
	float: left;	
	background-color: #F4F4F4;
}

.titulo {
	width: 96%;
	height: 21px;
	float: left;
	border: 0px;
	font-weight: bold;
	color: #FFF;
	background-color: #4a0600;
	padding: 2%;
}

.botao {
	width: 92%;
	height: 20px;
	float: left;
	border: 0px;
	border-bottom: 2px;
	border-color: #4a0600;
	border-style: solid;
	padding: 4%;
}

.botao:hover {
	background-color: #00ade6;
	color: #FFF;
}

a {
	font-family: Verdana, Geneva, sans-serif;
	color: #fff;
	font-size: 14px;
}

img {
	width: 12px;
	height: 12px;
}
	
</style>

</head>
<body>
<div id="principal">
  <div id="menu">   
  	<div class="titulo"> .:: Admin v.1.0 ::.</div>
    <div class="titulo"> :: Login </div>
    
    <a href="../login/form_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../login/consulta_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

    <div class="titulo"> :: Cliente </div>
    
    <a href="../cliente/form_cliente.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../cliente/consulta_cliente.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

    <div class="titulo"> :: Fornecedor </div>
    
    <a href="../fornecedor/form_fornecedor.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../fornecedor/consulta_fornecedor.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

	<div class="titulo"> :: Produto </div>
    
    <a href="../produto/form_produto.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../produto/consulta_produto.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>

    <div class="titulo"> :: Sair </div>
    <a href="../logout.php"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Logout </div> 
    </a>
        
  </div>
  
    
  <div id="conteudo"> 
    <iframe name="conteudo" src="" height="1000px" width="100%" frameborder="0" scrolling="auto"> </iframe>
  </div>
  
</div>
</body>
</html>
