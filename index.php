<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-es">
<head>
<title>Menus desplegable solo CSS ejemplo 1 - Recursos CSS - araudi.net</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Keywords" content="recursos, css, diseño web, xhtml, software libre" />
<meta name="Description" content="Pagina dedicada a recursos de diseño web con CSS, en castellano" />
<meta name="Author" content="Mikel Morote Donazar - Praxis Iru&ntilde;ea SLL" />
<meta name="Subject" content="Recursos CSS" />
<meta name="Language" content="espa&ntilde;ol" />
<meta name="Robots" content="index, follow" />
<link rel="alternate" href="http://www.araudi.net/indice.html" title="Indice de contenidos" media="all" lang="es" />
<link rel="stylesheet" href="menu.css" type="text/css" />
<!--[if IE]><style>#menu ul li ul li a{margin-bottom:-1px;border-top-color: #fff;} #menu ul.nivel2{margin-top: -1px;}</style><![endif]-->
<!--[if IE 7]><style>#menu ul li ul li.nivel2:hover{margin-bottom:-2px;}</style><![endif]-->
</head>
<body>
<div id="menu">
<ul>
  <li class="nivel1"><a href="#" class="nivel1">Opción 1</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 1<table class="falsa"><tr><td><![endif]-->
	<ul class="nivel2">
		<li><a href="#">Opción 1.1</a></li>
		<li><a href="http://www.idplus.org">idplus.org</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li class="nivel1"><a href="#" class="nivel1">Opción 2</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 2<table class="falsa"><tr><td><![endif]-->
	<ul class="nivel2">
		<li><a href="#">Opción 2.1</a></li>
		<li><a href="#">Opción 2.2</a></li>
		<li class="nivel2"><a class="nivel2" href="#">Opción 2.3 »</a>
			<!--[if lte IE 6]><a href="#" class="nivel2ie">Opción 2.3 »<table class="falsa"><tr><td><![endif]-->
			<ul class="nivel3">
				<li><a class="primera" href="#">Opción 2.3.1</a></li>
				<li><a href="#">Opción 2.3.2</a></li>
				<li><a href="http://www.idplus.org">idplus.org</a></li>
			</ul>
			<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
		<li><a href="#">Opción 2.4</a></li>
		<li><a href="http://www.idplus.org">idplus.org</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Opción 3</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 3<table class="falsa"><tr><td><![endif]-->
	<ul class="nivel2">
		<li><a href="#">Opción 3.1</a></li>
		<li><a href="#">Opción 3.2</a></li>
		<li><a href="http://www.idplus.org">idplus.org</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Opción 4</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 4<table class="falsa"><tr><td><![endif]-->
	<ul class="nivel2">
		<li><a href="#">Opción 4.1</a></li>
		<li><a href="#">Opción 4.2</a></li>
		<li><a href="#">Opción 4.3</a></li>
		<li><a href="http://www.idplus.org">idplus.org</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Opción 5</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 5<table class="falsa"><tr><td><![endif]-->
	<ul class="nivel2">
		<li><a href="#">Opción 5.1</a></li>
		<li><a href="#">Opción 5.2</a></li>
		<li><a href="http://www.idplus.org">idplus.org</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</ul>
</div>
</body>
</html>