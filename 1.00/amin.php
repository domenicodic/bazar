<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<html>

<head>
<link rel="stylesheet" href="src/css/stile.css" type="text/css"> 
</head>


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
      
      
 
<div class="registrazione_1">
	<form action="admin.php" method="post">
	 
     <fieldset>
    <legend>Entra nell'area amministratore</legend>
    <table border="1px" solid black>
   	<tr>
    <td>Username</td><td><input type="text" name="username" /></td>
    </tr>
    <tr>
    <td>Password</td><td><input type="password" name="psw" /></td>
    </tr>
    
	  
        </table>
        </fieldset>
	 <input type="submit" name="accedi" value="Accedi" />
	<input type="reset" name="resetta" value="Cancella" />
    </form>
