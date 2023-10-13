<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/admin-panel.css">
    <title>Document</title>
</head>
<body>
    <section class="adminPanel">
        <div class="container">
            <div class="adminPanelContainer">
                
                <div class="allUsers">
                    <div class="allUsersTitle">
                        <h2>Все пользователи</h2>
                        <a href="">Выйти</a>
                    </div>

                    <?php 
                    for ($i=0; $i < 10; $i++) { ?>

                        <a href="" class="userBlock">
                            <div class="userBlockImg">
                                <img src="img/users/unsplash_F6039SWvBp0.jpg" alt="">

                                <div class="status statusProcessing statusConfirmed statusRejected"></div>
                            </div>

                            <div class="userBlockText">
                                <h3>Андрей Кустов</h3>
                                <p>@andrey</p>
                            </div>
                        </a>

                    <?php } ?>
                </div>

                <div class="userContent">
                    <div class="userContentHeader">
                        <div class="userHeaderBlock">
                            <div class="userHeaderBlockImg">
                                <img src="img/users/unsplash_F6039SWvBp0.jpg" alt="">
                            </div>

                            <div class="userHeaderBlockText">
                                <h3>Андрей Кустов</h3>
                                <p>@andrey - в обработке</p>
                            </div>
                        </div>

                        <div class="userBtnContent">
                            <a href="" class="userBtn">Подтвердить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('include/footer.php'); ?>

</body>
</html>