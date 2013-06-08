<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<html>
<head>


<link href="src/css/stile.css" rel="stylesheet" type="text/css">

</head>



<body style="color:#000">
<?php 
//require_once('index.php');

if(!isset($_SESSION['username'])){

header('location:errore.php');

}
else{
$utente=$_SESSION['username'];
echo"<h1 style=\"color:#000\">Benvenuto $utente</h1><br>";
echo"Qui puoi aggiungere i tuoi  prodotti al database cliccando su <br /><h1><a href=\"aggiungi.php\">Aggiungi</h1></a>";
echo"<h3><a href=\"logout.php\">Logout</a></h3>";
}

?>

</body>

</html>
