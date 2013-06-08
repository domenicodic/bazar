<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<title>Pagina web</title>
<link href="src/css/stile3.css" rel="stylesheet" type="text/css" />
<body>
<?php



$sql="select DISTINCT marca from prodotti where tipo='schermi'";
$query=mysql_query($sql);
$conta=mysql_num_rows($query);

echo"<ul>";
for($i=0;$i<$conta;$i++){
$marca=mysql_result($query,$i,'marca');
echo"<li><a href=\"$marca.php\">$marca</a></li>";

}
?>
</body>
</html> 

