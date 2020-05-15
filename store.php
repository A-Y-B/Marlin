<?php

$title = $_POST['title'];
$description = $_POST['description'];
$status = isset($_POST['status']) ? 1 : 0;

$pdo = new PDO('mysql:host=localhost; dbname=student;', 'root', '');

$sql = 'INSERT INTO products (title, description, status) VALUES (:title, :description, :status)';

$statement = $pdo->prepare($sql);
$statement->execute([
    'title' => $title,
    'description' => $description,
    'status' => $status
]);

//var_dump($sql);die();

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "uploads/" . $name);

header("Location: /index.php");
