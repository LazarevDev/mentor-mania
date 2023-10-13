<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/mentor.css">
    <title>Document</title>
</head>
<body>
    <section class="mentorSection">
        <div class="container">
            <div class="mentorContent">
                <div class="mentor">
                    <div class="mentorPhoto">
                        <img src="img/users/unsplash_F6039SWvBp0.jpg" alt="">
                    </div>

                    <div class="mentorBtn">
                        <a href="" class="send">Оставить заявку</a>
                        <a href="" class="back">Назад</a>
                    </div>
                </div>

                <div class="mentorInformation">
                    <div class="title">
                        <h2>Андрей Кустов</h2>
                        <p>Senior Backend Developer</p>
                        <p>Опыт: 5 лет</p>
                        <p>Цена (за час): 1200 рублей</p>
                    </div>

                    <div class="tags">
                        <p>Frontend</p> <p>DataBase</p> <p>IOS</p> <p>Android</p> <p>HR</p> <p>HTML</p> <p>CSS</p> <p>Frontend</p> <p>DataBase</p> <p>IOS</p> <p>Android</p> <p>HR</p> <p>HTML</p> <p>CSS</p>
                    </div>

                    <div class="description">
                        <h2>О себе</h2>

                        <p>Lorem ipsum dolor sit amet, an eos lorem ancillae expetenda, vim et utamur quaestio. Sale liber et vel. Lorem ipsum dolor sit amet, an eos lorem ancillae expetenda, vim et utamur quaestio. Eam id posse dictas voluptua, veniam laoreet oportere no mea, quis regione suscipiantur mea an.
                            Odio contentiones sed cu, usu commodo prompta prodesset id. Elitr accommodare deterruisset eam te, vim munere pertinax consetetur at. Per cu iracundia splendide. Eu eam dolores lobortis percipitur, quo te equidem deleniti disputando.</p>
                    </div>

                    <div class="description">
                        <h2>С чем помогу</h2>

                        <p>Lorem ipsum dolor sit amet, an eos lorem ancillae expetenda, vim et utamur quaestio. Sale liber et vel. Lorem ipsum dolor sit amet, an eos lorem ancillae expetenda, vim et utamur quaestio. Eam id posse dictas voluptua, veniam laoreet oportere no mea, quis regione suscipiantur mea an.
                            Odio contentiones sed cu, usu commodo prompta prodesset id. Elitr accommodare deterruisset eam te, vim munere pertinax consetetur at. Per cu iracundia splendide. Eu eam dolores lobortis percipitur, quo te equidem deleniti disputando.</p>
                    </div>

                    <div class="description">
                        <h2>Еще менторы</h2>


                        <div class="mentorsContent">
                            <?php for ($i=0; $i < 3; $i++) {?> 
                                <div class="mentorsBlock">
                                    <div class="mentorsBlockImg"><img src="img/users/unsplash_F6039SWvBp0.jpg" alt=""></div>

                                    <div class="mentorsBlockTitle">
                                        <h2>Андрей Кустов</h2>
                                        <p>Senior Backend Developer</p>
                                    </div>

                                    <div class="mentorsBlockDescription">
                                        <p>Возраст: <span>24 года</span></p>
                                        <p>Опыт работы: <span>4 года</span></p>
                                        <p>Регистрация: <span>28.01.2023</span></p>
                                        <p>Последний визит: <span>сегодня</span></p>
                                    </div>

                                    <div class="mentorsBlockBtnContainer">
                                        <a href="mentor.php"  class="mentorsBlockBtn">Подробнее</a>
                                    </div>
                                
                                </div>
                            <?php } ?>
                        </div>       

                        <div class="mentorsSectionBtnContainer">
                            <a href="" class="mentorsSectionAllBtn">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('include/footer.php'); ?>

</body>
</html>