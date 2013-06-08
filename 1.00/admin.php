<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>


<html>
<head>




<link href="src/css/stile.css" rel="stylesheet" type="text/css">






</head>

<body>
<?php





if(isset($_POST['username']) && isset($_POST['psw'])){
$username=$_POST['username'];
$psw=$_POST['psw'];
$query="select * from amministratore where username='$username' and password='$psw'";


$sql=mysql_query($query);

if(mysql_num_rows($sql)==0){
header('location:errore.php');

}
else
{
$core->session->set_username($username);
header('location:controlla.php');
}
}
else{
header('location:errore.php');
}
session_close();
?>




<p><a href="index.php">Torna indietro</a></p>




</body >

</html>
