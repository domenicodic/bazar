<?php

require_once('fun_conn.php');
$connessione=connessione('localhost','root','domenico','elenco_telefonico');
$sql='SELECT numero_telefono FROM rubrica WHERE nome="Domenico"';
$query=mysql_query($sql);
/*$conta=mysql_num_rows($query);
for($i=0;$i<$conta;$i++){
$cf=mysql_result($query,$i,'cf');
echo"<br>cf: $cf";
$nome=mysql_result($query,$i,'nome');
echo"<br>nome: <b>$nome</b>";
$cognome=mysql_result($query,$i,'cognome');
echo"<br>cognome: <b>$cognome</b>";
$telefono=mysql_result($query,$i,'numero_telefono');
echo"<br>numero telefonico: <b>$telefono</b>";
}
*/
$conta=mysql_num_rows($query);
while($row=mysql_fetch_array($query,MYSQL_ASSOC)){
foreach($row as $chiave=>$risultato){
echo"<h1>$chiave</h1> :$risultato<br>";}

}

?>
