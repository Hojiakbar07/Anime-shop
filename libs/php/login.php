<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylevhoda.css">
    <link rel="shortcut icon" href="free-icon-game-10959781.png" type="image/x-icon">
</head>
<body>

    <div class="registration-cssave">
        <form action="login.php" method="post">
            <h3 class="text-center">Вход</h3>
            <div class="form-group">
                <input class="form-control item" type="text" name="login" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="login" placeholder="Логин" required>
            </div>
            <div class="form-group">
                <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Пароль" required>
            </div>
            <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit">Войти</button>
                <p>  <a  href="index.php" class = "register">Нет аккаунта?</a></p>
                
            </div>
        </form>
    </div>
    <?php
        require "connect.php";
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $login = array_key_exists('login', $_POST) ? $_POST['login'] : null;
            $password = array_key_exists('password', $_POST) ? $_POST['password'] : null;
            $sql = "SELECT * FROM vhod WHERE `login` = '$login' AND `password` = '$password'";
            $result = $db->query($sql);
            $user = $result->fetchAll();
            if(count($user)){
                $new_url = 'main.html';
                header('Location:'.$new_url);
            }else{
                echo "<p class = 'pclass' > Логин или пароль введены неверно</p>";
            }
        }
        ?>
</body>
</html>