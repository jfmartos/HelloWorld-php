<!doctype html>
<!html lang="en">
<html>
<head>

  <!meta charset="utf-8">
  <!meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Dolphin-PHP on OpenShift...</title>

  <!Inserta las Hojas de estilo en cascada...>
  <link rel="stylesheet" href="bootstrap.css">  

</head>


<body>

<CENTER>
 
<?php
/**
 * Función para detectar el sistema operativo, navegador y versión del mismo
 */

$info=detect();
 
echo "<br><br><br><br><font color='gray' SIZE=5><i>Sistema operativo: <b>".$info["os"] . "</b></i></font>";
echo "<br><br><font color='gray' SIZE=4><i>Navegador: ".$info["browser"] . "</font>";
echo "<br>Versión: ".$info["version"] . "</i>";

echo "<br><br><br><font color='darkgray' SIZE=3><i>IP: " . $_SERVER['REMOTE_ADDR'] . "</i></font>";
echo "<br><font color='darkgray' SIZE=3><i>Port: " . $_SERVER['SERVER_PORT'] . "</i></font>";

echo "<br><br><font color='darkgray' SIZE=3><i>Host: " . $_SERVER['SERVER_NAME'] . "</i></font>";
echo "<br><font color='darkgray' SIZE=3><i>Admin: " . $_SERVER['SERVER_ADMIN'] . "</i></font>";
echo "<br><font color='darkgray' SIZE=3><i>Software: " . $_SERVER[SERVER_SOFTWARE] . "</i></font>";

echo "<br><br><font color='darkgray' SIZE=3><i>Accept: " . $_SERVER['HTTP_ACCEPT'] . "</i></font>";
echo "<br><font color='darkgray' SIZE=3><i>" . $_SERVER['HTTP_USER_AGENT'] . "</i></font>";


 
/**
 * Funcion que devuelve un array con los valores:
 *	os => sistema operativo
 *	browser => navegador
 *	version => version del navegador
 */
function detect()
{
	$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
	$os=array("WIN","MAC","LINUX");
 
	# definimos unos valores por defecto para el navegador y el sistema operativo
	$info['browser'] = "OTHER";
	$info['os'] = "OTHER";
 
	# buscamos el navegador con su sistema operativo
	foreach($browser as $parent)
	{
		$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
		$f = $s + strlen($parent);
		$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
		$version = preg_replace('/[^0-9,.]/','',$version);
		if ($s)
		{
			$info['browser'] = $parent;
			$info['version'] = $version;
		}
	}
 
	# obtenemos el sistema operativo
	foreach($os as $val)
	{
		if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
			$info['os'] = $val;
	}
 
	# devolvemos el array de valores
	return $info;
}
?>

</CENTER>                      

</body>
</html>
