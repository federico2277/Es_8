<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = "localhost";
$root = "root";
$password ="Federico22giulia";
$db = "quintaa_assicurazioni";

$connessione = mysqli_connect($host, $root, $password, $db) or die ("Errore nel codice" . mysqli_connect_error());

?>
</body>
</html>