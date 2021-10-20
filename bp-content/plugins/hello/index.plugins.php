<?php
if(!defined('IS_IN_MODULE')) { die("NO DIRECT FILE ACCESS!"); }

class HelloWorld {

	function index() // This is our index function. It is called if we do not have a function defined
	{
		print("HelloWorld Module from Keiran's Module System");
	}
	
	function hello() // hello function called from modules.php?module=HelloWorld&function=hello
	{
		print("hello");
	}
	
	function world() // hello function called from modules.php?module=HelloWorld&function=world
	{
		print("world");
	}

}

?>