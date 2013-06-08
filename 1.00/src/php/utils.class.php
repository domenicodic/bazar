<?php
class utils
{
	
	function __construct()
	{
			
	}

	function __destruct()
	{
		
	}
	
	public function print_lista_tipi()
	{
		$result = mysql_query("select DISTINCT tipo from prodotti");
		
		if(mysql_num_rows($result) > 0)
		{
			echo "<ul>";
			
			while( $row = mysql_fetch_array($result))
			{
				echo "<li><a href=\"tipi.php?tipo=".$row['tipo']."\">".$row['tipo']."</a></li>";	
			}
			
			echo "</ul>";
		}
	}
	
	

}