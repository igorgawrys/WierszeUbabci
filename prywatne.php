<!DOCTYPE
<HTML lang="pl">
<head>
<?php
session_start();
If ($_SERVER['PHP_AUTH_USER'] != 'bozena' || $_SERVER['PHP_AUTH_PW'] != 'bozena1974')
    {
	header("WWW-Authenticate: Basic realm=Logowanie do systemu");
	header("HTTP/1.0 401 Unauthorized");
	echo 'Unauthorized';
	exit();
	}
// Wszystko poni�ej jest chronione
$_SESSION['log'] = "TRUE"
?>


</style>
<link rel="Shortcut icon" href="img/images.jpg" />
<meta charset="utf-8"/>
<meta content=""/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link href="css/style.css" rel="stylesheet">
<title>WierszeUbabci</title>
</head>
<body>
<center><a href="http://www.igorgawr.cal24.pl/WierszeUbabci/#"><IMG src="img/logo.png" name="logo"></a></center>
<h3 align="center">WierszeUbabci</h3>
<div id="cio">
<ul align="center">
<li><a href="#">Lista</a></li>
<li><a href="dlamacusia.php">Do Maciusia</a></li>
<li><a href="index.html">Cofnij</a></li>

</ul>
<div id="left">
<center><h3>Najnowsze informacje</h3></center>
<center>
Strona internetowa WierszeUbabci wystartować ale jest jeszcze dobracowywana.
<br/>
W razie problemów proszę kontaktować się z administratorem na adres <a href="malto:admin@wierszeubabci1.pl">admin@wierszubabci.xonx.pl</a>

<br/>



</div>
</center>


<center><h5>&copy Wszelkie prawa zastrzeżone</h5></center>
</body>
</html>	