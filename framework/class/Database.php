<?php

class Database extends PDO
{

}
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$myObject = new Database('mysql:dbname=pit-2;host=127.0.0.1;charset=utf-8', 'root', '123', $opt);
$arr = get_object_vars($myObject);
foreach ($arr as $key => $val)
    echo "myObject->$key = $val\n";
$myObject->