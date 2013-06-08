<?php 
	require_once('src/php/core.php'); 
	$core = new core();
	
	//header('Content-Type: image/jpg');


	$imageID = $_GET['id'];
	
	$sql = @mysql_query("SELECT foto FROM prodotti WHERE id_prodotti = $imageID");
	
	$dati = mysql_fetch_array($sql);

	echo $dati['foto'];
exit;
?>
