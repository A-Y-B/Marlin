<?php

$pdo = new PDO('mysql:host=localhost;dbname=sandbox;', "root", "");

$sql = 'SELECT * FROM users WHERE id=:id';

$statement = $pdo->prepare($sql);
$statement->execute($_GET);
$user = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test/show.php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="my.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h1>Show User - <?php echo $user['username'] ?></h1>

        </div>
    </div>
</div>

</body>
</html>

