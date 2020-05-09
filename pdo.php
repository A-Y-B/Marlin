<?php

//var_dump ($_POST);die();

$driver = 'mysql'; // тип базы данных, с которой мы будем работать

$host = 'localhost';// альтернатива '127.0.0.1' - адрес хоста, в нашем случае локального

$db_name = 'blog'; // имя базы данных

$db_user = 'root'; // имя пользователя для базы данных

$db_password = ''; // пароль пользователя

$charset = 'utf8'; // кодировка по умолчанию

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];



$dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";

$pdo = new PDO($dsn, $db_user, $db_password, $options);

$sql = "SELECT * FROM 'registration' where email = :email";

$statement = $pdo->prepare($sql);

//$statement->bindValue(1, 'email');



//$data = $_POST['email'];
//var_dump($data);die();



$statement->execute('$_POST');
//var_dump($data);die();


$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);

