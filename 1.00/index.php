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
      
      
      <div class="contenuto">
        <p>Il nostro bazar &egrave specializzato nella vendita di prodotti IT(information tecnology). Siamo i numeri uno in Italia. Il nostro obiettivo &egrave; finalizzato a garantire al cliente sicurezza e facilit&agrave; di utilizzo nell'acquisto di prodotti. I nostri prodotti sono garantiti al 100%. Inoltre posseddiamo anche la clausola soddisfatti o rimborsati, secondo la quale il cliente ha il diritto di restituire il proprio prodotto, se non soddisfatto, entro 30 giorni. Vieni a vedere i nostri oggetti a prezzi imbattibili nella categoria PRODOTTI</p>
      </div> 
 
<div class="registrazione">
	<form action="reserved.php" method="post">
	 
     <fieldset>
    <legend>Entra nell'area riservata</legend>
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
<p>Oppure registrati cliccando <a href="registrazioni.php" style="color:#00C">qui</a></p>
</div>
   

  <div class="altro">
  <hr>
  <p>Cerchiamo in ogni modo di accontentare il nostro cliente. per questo siamo una garanzia di fiducia. I nostri venditori sono autorizzati e certificati. Sar&agrave; poddibile visionare nell'area riservate, le specifiche di ogni singolo compratore con i suoi feedback.Cerchiamo in ogni modo di accontentare il nostro cliente. per questo siamo una garanzia di fiducia. I nostri venditori sono autorizzati e certificati. Sar&agrave; poddibile visionare nell'area riservate, le specifiche di ogni singolo compratore con i suoi feedback.Cerchiamo in ogni modo di accontentare il nostro cliente. per questo siamo una garanzia di fiducia. I nostri venditori sono autorizzati e certificati. Sar&agrave; poddibile visionare nell'area riservate, le specifiche di ogni singolo compratore con i suoi feedback.</p>
    </div>
    
<div class="footer">Copyright. Domenico Di Capua. All rights reserved. 2013 <a href="amin.php">admin</a></div>

    </div><!-- Fine contenitore div -->


</body>
</html>
