<?php
	if (!($dbconn = @mysql_connect ($cfg['db_host'], $cfg['db_user'], $cfg['db_pass']))) {
		die (___('Database connection error!'));
	}
	
	@mysql_select_db ($cfg['db_name'], $dbconn) or die (___('Database Error!'));
	
	function mysql_get ($query)
	{
		if ($res = @mysql_query($query)) {
			return @mysql_fetch_array ($res);
		} else {
			return 0;
		}
	}
?>
