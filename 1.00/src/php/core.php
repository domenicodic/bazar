<?php
require_once( dirname(__FILE__) . '\\cn.class.php' );
require_once( dirname(__FILE__) . '\\session.class.php' );
require_once( dirname(__FILE__) . '\\utils.class.php' );

class core
{
	public $cn = null;
	public $session = null;
	public $utils = null;
	
	function __construct()
	{
		$this->cn = new cn();
		$this->session = new session();
		$this->utils = new utils();
		
	}
	
	function __destruct()
	{
		$this->cn = null;
		$this->session = null;
		$this->utils = null;
	}
}
?>