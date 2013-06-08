<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento senza titolo</title>
</head>

<body>
<?php


if(isset($_SESSION['username'])){

$core->session->set_username(null);
header('location:index.php');


}else{
header('location:errore.php');
}
?>



</body>
</html>