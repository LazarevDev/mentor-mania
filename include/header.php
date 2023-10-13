<?php
require_once('require/db.php');

if(!empty($_COOKIE['login']) AND !empty($_COOKIE['password'])){
    $loginCookie = $_COOKIE['login'];
    $passwordCookie = $_COOKIE['password'];

    $queryCookie = mysqli_query($db, "SELECT * FROM `mentors` WHERE `login` = '$loginCookie' AND `password` = '$passwordCookie'"); 
    $resultQueryCookie = mysqli_fetch_array($queryCookie);
}else{
    $resultQueryCookie = null;
}


?>


<link rel="stylesheet" href="../css/header.css">
<script src="scripts/jquery.min.js"></script>


<header class="header">
    <div class="container">
        <div class="headerBody">
            <a href="" class="headerLogo"><img src="../img/elements/logo.svg" alt=""></a>
            
            <div class="headerBurger">
                <span></span>
                <span></span>
            </div>

            <nav class="headerMenu">
                <ul class="headerList">
                    <?php if(!$resultQueryCookie){ ?>
                        <li><a href="index.php#home" class="headerLink">Главная</a></li>
                        <li><a href="#cases" class="headerLink">Найти ментора</a></li>
                        
                        <li><a href="register.php" class="btnBecomeMentor">Стать ментором</a></li>
                    <?php }else{ ?>
                        <li><a href="index.php#home" class="headerLink">Главная</a></li>
                        <li><a href="#cases" class="headerLink">Найти ментора</a></li>
                        <li><a href="profile.php" class="headerLink">Профиль</a></li>
                        
                        <li><a href="include/logout.php" class="btnBecomeMentor">Выйти</a></li>

                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</header>


