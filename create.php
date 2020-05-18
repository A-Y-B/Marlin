<?php

$pdo = new PDO('mysql:host=localhost; dbname=student;', 'root', '');
$sql = 'SELECT * FROM categories';

$statement = $pdo->query($sql);
$categories = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="not/my.css">

    <title>test-marlin/create.php - Добавить</title>

</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-6">
    <h1>Добавление продукта</h1>

    <!-- form -->
    <form action="create-store-db.php" method="post" enctype="multipart/form-data">
        <!-- title -->
        <div class="form-group">
            <label for="">Название</label>

            <input name="title" type="text" class="form-control">
        </div>
        <!-- description -->
        <div class="form-group">
            <label for="">Описание</label>

            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>

        <!-- categories -->
        <div class="form-group">
            <label for="">Категории</label>
                <select name="categories" id="">

                    <!-- foreach -->
                    <?php foreach ($categories as $category): ?>

                            <option value=""><?php echo $category['title']; ?></option>

                    <?php endforeach; ?>
                </select>
        </div>

        <!-- image-->
        <div class="form-group">
            <label for="">Картинка</label>

            <input name="image" type="file">
        </div>

        <!-- checkbox -->
        <div class="form-group">
            <label for="">Показывать</label>

            <input name="status" type="checkbox">
        </div>

        <!-- btn -->
        <div class="form-group">

            <button class="btn btn-success" type="submit">Добавить</button>
        </div>
    </form>
</div>
</div>
</div>

</body>
</html>
