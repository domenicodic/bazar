<?php 
	require_once('src/php/core.php'); 
	$core = new core();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Area riservata</title>

<link href="src/css/stile3.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php



if(isset($_POST['username'])&& isset($_POST['psw'])){
	$username=$_POST['username'];
	$password=$_POST['psw'];
	$query="select * from utenti where username='$username' and password='$password'";
	$sql=mysql_query($query);
	if(mysql_num_rows($sql)==0){
	header('location:errore.php');
	}
else{
	$core->session->set_username($username);
	
	header('location:index_login.php');
	}
}
else{
header('location:errore.php');

}

?>

</body>
</html>