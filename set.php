<?php
$hostadresi			=	"localhost";
$veritabaniadi		=	"abovkebap";
$mysqlkullaniciadi	=	"root";
$mysqlsifresi		=	"";
$mysqlebaglan		=	@mysql_connect($hostadresi,$mysqlkullaniciadi,$mysqlsifresi,false,2) or die ("MYSQL BA�LANTISI KURULAMADI...!");
$veritabanisec		=	@mysql_select_db($veritabaniadi) or die ("VER�TABANI BA�LANTI HATASI...!");
@mysql_query("SET NAMES 'UTF8'");
@mysql_query("SET CHARACTER SET utf8");
@mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
?>