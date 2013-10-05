<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Registrazioni</title>
<link href="src/css/stile3.css" rel="stylesheet" type="text/css" />

</head>

<body>

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

@$nome=$_POST['nome'];
@$cognome=$_POST['cognome'];
@$indirizzo=$_POST['indirizzo'];
@$email=$_POST['mail'];
@$cf=$_POST['cf'];
@$username=$_POST['username'];
@$psw=$_POST['psw'];
if(isset($username) && $email!==""){
	
	$query="insert into utenti values('$nome','$cognome','$indirizzo','$email','$username','$psw','$cf')";
mysql_query($query);
echo"Grazie per aver inserito i tuoi dati. Ora puoi accedere all'area privata cliccando <a href=\"index.php\"> qui</a>";
}
else{
	echo"Devi inserire dei valori nel form";
	}
?>


<div id="form" style="width:400px; height:auto; margin-left:auto; margin-right:auto; margin-top:30px;">
	
	<form action="registrazioni.php" method="post">
	<fieldset>
		<legend>Inserisci i tuoi dati</legend>
		<table>
		<tr><td width="90px">Nome</td><td><input type="text" name="nome"></td></tr>
		<tr><td>Cognome</td><td><input type="text" name="cognome"></td></tr>
		<tr><td>Indirizzo</td><td><input type="text" name="indirizzo"></td></tr>
		<tr><td>E-mail</td><td><input type="text" name="mail"></td></tr>
        <tr><td>Codice fiscale</td><td><input type="text" name="cf"></td></tr>
		<tr><td>Username</td><td><input type="text" name="username"></td></tr>
		<tr><td>Inserisci una tua Password</td><td><input type="password" name="psw"></td></tr>
	
	
		</table>
</fieldset>
		<br><input type="submit" name="registra" value"Registrati">
		<input type="reset" name="reset" value="Resetta le impostazioni">

	</form>

</div>
<p>Se sei già registrato inserisci i tuoi dati nell'apposiro form cliccando <a href="index.php">qui</a></p>
</body>
</html>
