<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container form">
    <div class="row">
        <div class="col-md-6">

            <form action="pdo.php" method="POST">

<!--                <input type="text" name="name" placeholder="Имя" >-->

                <input type="email" name="email" placeholder="Введите свой: email">

<!--                <input type="password" name="password" placeholder="Пароль">-->

                <button type="submit" class="btn btn-primary">Отправить</button>

            </form>

        </div><!-- col-md-6-->
    </div>
</div>

</body>
</html>

