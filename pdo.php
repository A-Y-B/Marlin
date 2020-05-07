<?php

$driver = 'mysql'; // тип базы данных, с которой мы будем работать

$host = 'localhost';// альтернатива '127.0.0.1' - адрес хоста, в нашем случае локального

$db_name = 'blog'; // имя базы данных

$db_user = 'root'; // имя пользователя для базы данных

$db_password = ''; // пароль пользователя

$charset = 'utf8'; // кодировка по умолчанию

$data = $_POST;

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];



$dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";

$pdo = new PDO($dsn, $db_user, $db_password, $options);

$sql = "SELECT * FROM table_name where id = :id";

$statement = $pdo->prepare($sql);


$statement->bindValue(1, 'email');
$statement->execute($data);

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);


Fatal error: Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: no parameters were bound in E:\OSPanel\domains\test\pdo.php:31 Stack trace: #0 E:\OSPanel\domains\test\pdo.php(31): PDOStatement->execute(Array) #1 {main} thrown in E:\OSPanel\domains\test\pdo.php on line 31

//Привет! В execute() в целом, что нужно передавать? Что он там ожидает?)
//Правильно Данные. То есть до этого мы их привязываем к меткам: $statement->bindValue(1, 'email');
//А теперь же нужно связать эту метку с конкретным email-ом! А где он лежит? В $_POST['email'];
//Поэтому, чтобы не прописывать вручную, проще просто передач пачку с данными в execute,
// он там сам разберется какие данные под какую метку подставлять.







































