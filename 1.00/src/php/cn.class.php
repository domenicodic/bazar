<?php
class cn
{ 
	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PSW  = '';
	const DB_NAME = 'bazar';
	
	
	public $con   = null;
	
	function __construct()
	//--------------------------------
	// costruisce l'oggetto 
	{
		$this->connect(self::DB_HOST, self::DB_USER, self::DB_PSW );
		
		$this->select_db(self::DB_NAME);
	}
	
	public function connect($db_host, $db_user, $db_psw)
	{
		if($this->con == null)
		{
			$this->con = mysql_connect($db_host, $db_user, $db_psw) or die( mysql_error() );
		}
	}
	
	public function select_db($db_name) 
	{
		if($this->con != null)
		{
			mysql_select_db($db_name, $this->con) or die( mysql_error() );
		}
	}
	
	public function query($query)
	{
		$result = mysql_query($query, $this->con);
		
		if( !$result ) 
		{ 
			die( '<pre>'. $query .'</pre><br />'. mysql_error() );
		}
		
		return $result;
	}

	function __destruct()
	//--------------------------------
	// costruisce l'oggetto 
	{
		if( $this->con != null)
		{
			@mysql_close( $this->con );
		}
	}
}
?>
