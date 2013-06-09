<?php
	require_once( dirname(__FILE__) . '\\cn.class.php' );
	require_once( dirname(__FILE__) . '\\session.class.php' );
	require_once( dirname(__FILE__) . '\\utils.class.php' );
	
	class core
	{
		public $cn      = null;
		public $session = null;
		public $utils   = null;
		
		function __construct()
		{
			// Passo a tutti l'oggetto core ($this)
			$this->cn      = new cn($this);
			$this->session = new session($this);
			$this->utils   = new utils($this);
		}
		
		function __destruct()
		{
			$this->cn      = null;
			$this->session = null;
			$this->utils   = null;
		}
	}
?>