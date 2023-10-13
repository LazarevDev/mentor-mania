<?php

session_start();
require_once('require/db.php');
require_once('require/cookie-check-auth.php');

$msg = "";

if(isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = md5($password);

    if(!empty($login) and !empty($password)){
        $query = mysqli_query($db, "SELECT * FROM `mentors` WHERE `login` = '$login' and `password` = '$password'");
        $result = mysqli_fetch_array($query);

        if(is_array($result) && $result['login'] == $login && $result['password'] == $password){
            setcookie('login', $login);
            setcookie('password', $password);
            $_SESSION['them'] = 'light';
            header('Location: index.php');
        }else{
            $msg = "Вы ввели некорректные данные";
        }
    }else{
        $msg = "Вы заполнили не все данные";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section class="auth">
        <div class="pick">
            <div class="container">
                <div class="contentForm">
                    <div class="formTitle">
                        <h2>Авторизация</h2>
                        <p></p>
                    </div>
                     
                    <form action="" method="POST" class="form">
                        <div class="formIcon"><img src="img/auth/student-center.png" alt=""></div>
                        
                        <div class="formItem">
                            <input type="text" name="login" class="input" required>
                            <label class="label">Логин</label>
                        </div>
    
                        <div class="formItem">
                            <input type="password" name="password" class="input" required>
                            <label class="label">Пароль</label>
                        </div>

                        <div class="formBtn">
                            <input type="submit" name="submit" class="submit" value="Войти">
                            <a href="register.php" class="authRegLog">Зарегистрироваться</a>
                        </div>

                        <div class="formImgElementMan">
                            <img src="img/auth/auth-man.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('include/footer.php'); ?>

</body>
</html>