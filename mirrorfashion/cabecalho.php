<!DOCTYPE html>
<html>
	<head>

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->

		<meta charset="utf-8">
		<title><?php print $cabecalho_title; ?></title>

		<?php print @$cabecalho_css; ?>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width: 939px)">

		<meta name="viewport" content="width=device-width">
	</head>
	<body>	

		<header class="container">
		<h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

		<p class="sacola">
			Nenhum item na sacola de compras
		</p>	

		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Conta</a></li>
				<li><a href="#">Lista de Desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
		</header>
