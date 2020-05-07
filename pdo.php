<?php

$driver = 'mysql'; // тип базы данных, с которой мы будем работать

$host = 'localhost';// альтернатива '127.0.0.1' - адрес хоста, в нашем случае локального

$db_name = 'blog'; // имя базы данных

$db_user = 'root'; // имя пользователя для базы данных

$db_password = ''; // пароль пользователя

$charset = 'utf8'; // кодировка по умолчанию

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";
$pdo = new PDO($dsn, $db_user, $db_password, $options);

$sql = "SELECT * FROM table_name where id = :id";
$statement = $pdo->prepare($sql);



//  получившееся выражение выполняем методом execute(), 
//  передавая в него массив с переменными, которые используются в запросе:


$statement->execute($data); // НЕПОНЯТКА ЗДЕСЬ У МЕНЯ :(



$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);

// Рахим привет, здесь не понял, переменную $data, не создавал же или объясни как создать ее, или вообще может не нужно ее создавать скажи, не понимаю, что делать подскажи плиз :)

// я создал бд - blog
// создал в бд таблицу - comments

// сделал  var_dump($result);

// выдал ошибку: Fatal error

