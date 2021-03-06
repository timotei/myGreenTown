<?php
	/*
		File: include/config.php
		Purpose: contains important values
	*/

	//Server configuration
	$cfg = array (  
	        "siteName"  	=> "myGreenTown",
			"domain"    	=> "www.mygreentown.info",
			"db_host" 	    => "localhost",
			"db_user"   	=> "mygreentown",
			"db_pass"   	=> 'mygreentown',
			"db_name"   	=> "mygreentown",
			"cache_expire" 	=> 54000);
			
	//Game configuration
	define ('DISPLAY_ADS', 0);
	define ('GAME_SPEED', 1000);	
	define ('MAXTOWN', 5);
	define ('MAXBLVL', 4);
	define ('BLVLINC', 0.1);
	define ('MAXSIZE', 50);
	define ('MAXNAMELENGTH', 20);
	define ('INVALID_CHAR',  "!@#$%^&*_+=-/><,.?~`");	
	define ('MINGREEN', 30);
	define ('TILECOST', 500);
	
	date_default_timezone_set('Europe/Bucharest');
?>
