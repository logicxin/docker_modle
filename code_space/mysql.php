<?php
$hasMySQL = false;
$hasMySQLi = false;
$withMySQLnd = false;
$sentence = '';
if (function_exists('mysql_connect')) {
        $hasMySQL = true;
            $sentence.= "(Deprecated) MySQL is installed ";
} else
        $sentence.= "(Deprecated) MySQL is not installed ";

if (function_exists('mysqli_connect')) {
        $hasMySQLi = true;
            $sentence.= "and the new (improved) MySQL is installed . ";
} else
        $sentence.= "and the new (improved) MySQL is not installed . ";

$sentence.="\r\n";

if (function_exists('mysqli_fetch_all')) {
        $withMySQLnd = true;
            $sentence.= "This server is using MySQLnd as the driver.";
} else
        $sentence.= "This server is using libmysqlclient as the driver.";

$sentence.="\r\n";


echo $sentence;


$pdo = new PDO('mysql:host=mysql;dbname=mysql', 'root', '123456');
if (strpos($pdo->getAttribute(PDO::ATTR_CLIENT_VERSION), 'mysqlnd') !== false) {
        echo 'PDO MySQLnd enabled!';
}
