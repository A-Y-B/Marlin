<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post">

                        <input type="email" name="email" placeholder="email">

                        <input type="password" name="password" placeholder="password">

                        <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

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

$sql = "SELECT * FROM 'registration' where email = :email";

$statement = $pdo->prepare($sql);

$statement->bindValue(1, 'email');



$data = $_POST["email"];
// var_dump($data);die();



$statement->execute($data);
//var_dump($data);die();


$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);
