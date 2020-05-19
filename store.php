<?php

$title = $_POST['title'];
$description = $_POST['description'];
$status = isset($_POST['status']) ? 1 : 0;
$category_id = $_POST['categories'];

$pdo = new PDO('mysql:host=localhost; dbname=student;', 'root', '');

$sql = 'INSERT INTO products (title, description, status, image, category_id) VALUES (:title, :description, :status, :image, :category_id)';

$statement = $pdo->prepare($sql);
$statement->execute([
    'title' => $title,
    'description' => $description,
    'status' => $status,
    'image' => $image,
    'category_id' => $category_id
]);

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "uploads/" . $name);

header("Location: /index.php");
