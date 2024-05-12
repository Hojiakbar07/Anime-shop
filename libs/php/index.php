<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylevhoda.css">
</head>
<body>

    <div class="registration-cssave">
        <form action="register.php" method="post">
            <h3 class="text-center">Регистрация</h3>
            <div class="form-group">
                <input class="form-control item" type="text" name="login" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="login" placeholder="Логин" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Пароль" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit">Зарегистрироваться</button>   
            </div>
        

        </form>
    </div>
</body>
</html>