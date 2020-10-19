<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user']==''):
        ?>

        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
            <form action="validation-form/chek.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
            <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегистрироваться</button>
            </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1>
            <form action="validation-form/auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизация</button>
            </form>
            </div>
        </div>
            <?php else: ?> 
                <p>Привет, <?=$_COOKIE['user']?>. Чтобы сьебать на главную нажмите <a href="validation-form/exit.php">здесь</a>
        <?php endif; ?>        
    </div>
</body>
</html>