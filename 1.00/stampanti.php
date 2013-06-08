<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Pagina web</title>
<link href="src/css/stile3.css" rel="stylesheet" type="text/css" />
<body>
 <div class="header"> <!-- Inizio header -->
        <br>BAZAR STORE ON LINE. <br />Il bazar numero uno in Italia. Compra i nostri prodotti on line.
    
    
           
    </div><!-- fine header -->
 
 
 
 <div class="menu_bar">
            <ul>
                <li style="margin-left: 400px;"><a href="index.php">CHI SIAMO</a></li>
                <li><a href="prodotti.php">PRODOTTI</a></li>
                <li><a href="#">PARTNERS</a></li>
                <li><a href="#">CONTATTI</a></li>
            </ul>
        </div>    
<?php



$sql="select marca,id_prodotti,modello from prodotti where tipo='stampanti'";
$query=mysql_query($sql);
$conta=mysql_num_rows($query);

echo"<ul>";
for($i=0;$i<$conta;$i++){
$id=mysql_result($query,$i,'id_prodotti');
$modello=mysql_result($query,$i,'modello');
$marca=mysql_result($query,$i,'marca');

echo "<a href=\"visualizza.php?id=".$id."\">".$marca." ".$modello."</a><br/>";
}
?>

</body>
</html> 
