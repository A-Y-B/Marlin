<?php

$comments = [
    [
        "id" => 1,
        "name" => "Карл",
        "comments" => "Комментарий Карла ...",
        "image" => "https://picsum.photos/100"
    ],
    [
        "id" => 2,
        "name" => "Клаус",
        "comments" => "Комментарий Клауса ...",
        "image" => "https://picsum.photos/100"
    ]
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                
                <!-- Коментарии -->
                <h1>Комментарии</h1>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Комментарии</th>
                        <th>фото</th>
                    </tr>
                    </thead>
                    <tbody>

                    <!-- PHP foreach -->
                    <?php foreach ($comments as $comment): ?>
                        <tr>
                            <td><?php echo $comment['id']; ?></td>
                            <td><?php echo $comment['name']; ?></td>
                            <td><?php echo $comment['comments']; ?></td>
                            <td>
                                <img src="https://picsum.photos/100" alt="">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- /PHP foreach -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
