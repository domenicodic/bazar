<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prodotti</title>
<link href="src/css/stile_prodotti.css" rel="stylesheet" type="text/css" />
<body>
 <div class="header"> <!-- Inizio header -->
        <br>BAZAR STORE ON LINE. <br />Il bazar numero uno in Italia. Compra i nostri prodotti on line.
        </div>
 
 <div class="menu_bar">
            <ul>
                <li style="margin-left: 400px;"><a href="index.php">CHI SIAMO</a></li>
                <li><a href="prodotti.php">PRODOTTI</a></li>
                <li><a href="#">PARTNERS</a></li>
                <li><a href="#">CONTATTI</a></li>
            </ul>
        </div>    
<?php




$query = mysql_query("select DISTINCT tipo from prodotti");

$conta = mysql_num_rows($query);

echo"<ul>";
for($i=0;$i<$conta;$i++){
$tipo=mysql_result($query,$i,'tipo');
echo"<li><a href=\"$tipo.php\">$tipo</a></li>";

}
?>
</body>
</html> 
