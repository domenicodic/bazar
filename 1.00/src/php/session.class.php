<?php
class session
{
	function __construct()
	{
		if(session_id() == "")
		{
			session_start();
		}
	}
	public function set_username($username)
	{
		$_SESSION['username'] = $username;		
	}
	
	public function get_username()
	{
		return (isset($_SESSION['username'])) ? $_SESSION['username'] : null;	
	}
	
	public function add_to_cart($id)
	{
		if( isset($_SESSION['cart'][$id]) )
		{
			$_SESSION['cart'][$id]++;
		}
		else
		{
	 		$_SESSION['cart'][$id] = 1;
		}
	}
	
	
	public function dec_to_cart($id)
	{
		if ( isset($_SESSION['cart'][$id]) )
		{
			if($_SESSION['cart'][$id]  > 1)
			{
				$_SESSION['cart'][$id]--;
			}
			else
			{
				$this->remove_to_cart($id);
			}
		}
	}
	
	
	public function remove_to_cart($id)
	{
		if (isset($_SESSION['cart'][$id]))
		{
			unset($_SESSION['cart'][$id]);
		}
	}
	
	
	
	function __destruct()
	{
		
	}
}