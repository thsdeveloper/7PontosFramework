@extends('layouts.app')

@section('content')
  <h1>Fale Conosco<a name="topo"></a></h1>

  <div id="atuacao">

    <div class="box">

      <label>Nome Completo</label>
      <input type="text" name="nome" class="input_text"/>
      <br/>

      <label>Email :</label>
      <input type="text" name="email" size="40" class="input_text"/>
      <br />

      <label>Telefone</label>
      <input type="text" name="telefone" class="input_text2"/>
      <label>Mensagens</label>
      <textarea name="mensagem" class="message" id="mensagem"></textarea>

      <label><input type="submit" class="button" value="Enviar" /></label> <!--Caso use imagem usar alt-->
    </div>
  </div>
@endsection
<style type="text/css" media="screen" id="test">
	div.box{
	margin-top:20px;
	color:#000000;
	font-family:calibri;
	width:400px;
	margin-left:20px;
	}

	div.box h1{
	color:#000000;
	color:#FFF5CC;
	font-size:18px;
	text-transform:uppercase;
	padding:5px 0 5px 5px;
	}

	div.box label{
	margin-top:10px;
	margin-bottom:10px;
	width:400px;
	display: block;
	}

	div.box label span{

	display: block;
	color:#000;
	font-size:12px;
	float:left;
	width:100px;
	text-align:right;
	padding:8px 5px 0 0;
	}

	div.box .input_text{
	padding:10px 10px;
	size:14px;
	width:400px;
	background:#fff;
	border-bottom: 1px double #171717;
	border-top: 1px double #171717;
	border-left:1px double #333;
	border-right:1px double #333;
	border: 1px solid #ddd;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	}

	div.box .input_text2{
	padding:10px 10px;
    size:14px;
   	width:148px;
   	background:#fff;
   	border-bottom: 1px double #171717;
   	border-top: 1px double #171717;
   	border-left:1px double #333;
   	border-right:1px double #333;
   	border: 1px solid #ddd;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
   	}

   	div.box .message{
   	padding:7px 7px;
   	width:350px;
   	background:#fff;
   	border-bottom: 1px double #171717;
   	border-top: 1px double #171717;
   	border-left:1px double #333;
   	border-right:1px double #333;
   	overflow:hidden;
   	height:150px;
   	border: 1px solid #ddd;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
   	}

   	div.box .button
   	{
	left:100px;
	width:80px;
	border:none;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	color: #ffffff;
	cursor:pointer;
	margin: 0px auto;
	text-shadow: 0 1px 1px #777;
	font-weight:bold;
	font-family: Arial, "MS Trebuchet", sans-serif;
	font-size:16px;
	-moz-box-shadow:0px 0px 3px #aaa;
	-webkit-box-shadow:0px 0px 3px #aaa;
	box-shadow:0px 0px 3px #aaa;
	background:#4c000f;
	}
	</style>
