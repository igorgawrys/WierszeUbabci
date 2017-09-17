<?php
SESSION_SART;
If ($_SERVER['PHP_AUTH_USER'] != 'user' || $_SERVER['PHP_AUTH_PW'] != 'haslo')
	{
	header("WWW-Authenticate: Basic realm=Logowanie do systemu");
	header("HTTP/1.0 401 Unauthorized");
	echo 'Unauthorized';
	exit();
	}
// Wszystko poni¿ej jest chronione
echo 'zalogowany';

?>