<?php
$host = "localhost";
$mysqladi = "";
$mysqlsifre ="";
$db = "febitek_member";
@mysql_connect ("$host", "$mysqladi", "$mysqlsifre") or die ("MySql Baglantisinda Hata");
@mysql_select_db ("$db") or die ("Üye Veritabanina Baglanilamadi");
@mysql_query("SET CHARACTER SET utf8");
?>
