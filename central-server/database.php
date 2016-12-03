<?php
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	define('DBHOST', 'db538759002.db.1and1.com');
	define('DBUSER', 'dbo538759002');
	define('DBPASS', 'Password');
	define('DBNAME', 'db538759002');
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	if ( !$conn ) {
	die("Connection failed : " . mysql_error());
	}
	if ( !$dbcon ) {
	die("Database Connection failed : " . mysql_error());
}
