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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/profile-form.css">
    <link rel="stylesheet" href="css/applications.css">
    <title>Document</title>
</head>
<body>
    <section class="profileSection">
        <div class="container">
            <div class="profileContent">
                <div class="profileImg">
                    <img src="img/users/unsplash_F6039SWvBp0.jpg" alt="">
                
                    <div class="photoAdd">
                        <form action="" method="post">
                            <input type="text" class="inputPhoto" id="photo">
                            <label for="photo" class="labelPhoto">
                                <img src="img/elements/camera.png" alt="">
                            </label>
                        </form>
                    </div>
                </div>

                <div class="profileTitle">
                    <h2>Андрей Кустов</h2>
                    <p>@andrey</p>
                </div>
            </div>

            <div class="msgContent">
                <div class="msg">
                    <div class="msgIcon">
                        <img src="img/elements/time.png" alt="">
                    </div>

                    <div class="msgText">
                        <p>Запись находится на модерации</p>
                    </div>
                </div>
            </div>

            <div class="profileMenu">
                <button class="btnMenu btnProfile">Профиль</button>
                <button class="btnMenu btnApplications">Заявки</button>
            </div>


            <div class="profileDynamicContent">
                <?php require_once('include/profile-form.php'); ?>
                
                <?php require_once('include/applications.php'); ?>`
            </div>



        </div>
    </section>

    <?php require_once('include/footer.php'); ?>


    <script src="scripts/profile-menu.js"></script>
</body>
</html>