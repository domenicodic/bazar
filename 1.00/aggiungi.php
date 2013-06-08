<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<html>
<head>




<link href="src/css/stile.css" rel="stylesheet" type="text/css">

<style type text/css>
#form{
width:400px;
margin-right:auto;
margin-left:auto;
margin-top.auto;
margin-bottom:auto;
}
</style>



</head>

<body style="color:#FFF">

<p><h3 style="text-align:center;">Qui potrai aggiungere nuovi prodotti al database</h3></p><br><br>

<?php
/*
	$_FILES
	
	[name] => visualizza.php 
	[type] => application/octet-stream 
	[tmp_name] => C:\xampp\tmp\php26B.tmp 
	[error] => 0 
	[size] => 765 
*/
//print_r($_FILES);

@$tipo=$_POST['tipo'];
@$marca=$_POST['marca'];
@$modello=$_POST['modello'];
@$prezzo=$_POST['prezzo'];
@$disponibilita=$_POST['disponibilita'];
@$descrizione=$_POST['descrizione'];
@$foto=$_POST['foto'];

move_uploaded_file($_FILES['foto']['tmp_name'], dirname(__FILE__) . '\\upload\\' . $_FILES['foto']['name']);

if(isset($tipo)&& isset($disponibilita)){
@$query="insert into prodotti values('','$tipo','$marca','$modello','$prezzo','$disponibilita','$descrizione','$foto','/upload/". $_FILES['foto']['name']."')";
mysql_query($query);
echo"Prodotto aggiunto con successo. Puoi inserirne un'altro cliccando <a href=\"aggiungi.php\">qui</a> ";
}
else{
	echo"Form compilato in maniera scorretta. Riprova ad aggiungere nuovo prodotto";
	}
?>



<div id="form">
	
	<form action="aggiungi.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Inserisci Prodotti</legend>
		<table>
		<tr><td width="90px">Tipo</td><td><input type="text" name="tipo"></td></tr>
        <tr><td width="90px">Marca</td><td><input type="text" name="marca"></td></tr>
		<tr><td>Modello</td><td><input type="text" name="modello"></td></tr>
		<tr><td>Prezzo</td><td><input type="text" name="prezzo"></td></tr>
		<tr><td>Disponibilita</td><td><input type="text" name="disponibilita"></td></tr>
		<tr><td>Descrizione</td><td><input type="text" name="descrizione"></td></tr>
		<tr><td>Foto</td><td><input type="file" name="foto"></td></tr>
	</fieldset>
	
		</table>

		<br><input type="submit" name="registra" value="Aggiungi">
		<input type="reset" name="reset" value="Resetta le impostazioni">

	</form>

</div>



<p><a href="index.php">Torna indietro</a></p>




</body >

</html>
