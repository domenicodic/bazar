<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Documento senza titolo</title>
<link href="/src/css/stile3.css" rel="stylesheet" type="text/css" />
</head>

<body>
<body>
    <div class="contenitore"><!-- Inizio contenitore div -->
    
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


$id= @intval($_GET['id']);
$sql="select*from prodotti where id_prodotti=$id";
$query=mysql_query($sql);
$conta=mysql_num_rows($query);
echo"<div style=\"margin-top:80px\">";
echo"<table border=\"2px\" align=\"center\">";
for($i=0;$i<$conta;$i++){
$a=mysql_result($query,$i,'marca');
$b=mysql_result($query,$i,'modello');
$c=mysql_result($query,$i,'prezzo');
$d=mysql_result($query,$i,'disponibilita');
$e=mysql_result($query,$i,'descrizione');
$f=mysql_result($query,$i,'foto');
echo"<tr><td rowspan=\"3\"><b>Marca:<br>$a</td>";
echo"<td><b>Modello:<br>$b</td>";
echo"<td>Prezzo:<br>$c &euro;</td>";
echo"<td>Disponibilit&agrave;<br>$d unit&agrave;</td></tr>";
echo"<tr><td  colspan=\"3\">Descrizione:<br>$e</td></tr>";
echo"<img src='mostrafoto.php?id=".$id."'>";

}
echo"</table>";
echo"</div>" ;

if ( isset($_SESSION['username']) )
	{	
	
	echo"<div align=\"center\">
<a href=\"#\"><input type='button' name='Clic' value=' Acquista'></a>
</div>";
	}


else
{
	
echo"<div align=\"center\">
<input type='button' name='Clic' value=' Acquista'
onclick=\"alert('Devi essere loggato per poter acquistare il prodotto')\">
</div>";

}
?>


<?php
$core->utils->print_lista_tipi();
?>
</body>
</html>
