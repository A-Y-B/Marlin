<?php
//  SELECT * FROM users WHERE id = :id   ---   выбрать всё из таблици users где id = :id
//  соединение с базой
$pdo = new PDO('mysql:host=localhost;dbname=sandbox;', "root", "");

//  подготовка запроса, для извлечения из бд инфы
$sql = 'SELECT * FROM users WHERE id=:id';

//  так как в запросе есть переменная, его нужно сперва подготовить, пропустив через метод PDO prepare():
$statement = $pdo->prepare($sql);
//var_dump($statement);die();


//  выполнение запроса
$statement->execute($_GET);
var_dump($statement);die();

//  fetchAll — Возвращает массив, содержащий все строки результирующего набора
//  FETCH_ASSOC — Извлекает результирующий ряд в виде ассоциативного массива
$user = $statement->fetch(PDO::FETCH_ASSOC);
