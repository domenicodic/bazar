<?php
class utils
{
	private $core = null;
	
	
	
	function __construct($core = null)
	{
		$this->core = $core;
	}

	
	
	function __destruct()
	{
		
	}
	
	
	
	public function print_lista_tipi()
	{
		$out    = '';
		$result = $this->core->cn->query("select DISTINCT tipo from prodotti");
		
		$out .= '<!-- print_lista_tipi -->';
		
		if( mysql_num_rows($result) > 0 )
		{
			$out .= '<ul>';
			
			while( $row = mysql_fetch_array($result))
			{
				$out .= '<li><a href="tipi.php?tipo='.$row['tipo'].'">'.$row['tipo'].'</a></li>';	
			}
			
			$out .= '</ul>';
		}
		
		$out .= '<!-- /print_lista_tipi -->';
		
		echo $out;
	}
	
	

}