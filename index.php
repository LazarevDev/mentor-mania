<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <?php
     require_once('include/header.php'); ?>

    <section class="home" id="#home">
        <div class="container">
            <div class="homeContent">
                <div class="homeTitle">
                    <h1>Обучитесь IT профессии с нуля с помощью <span>ментора</span></h1>
                    <h2>Прокачивайте навыки на индивидуальных занятиях 
                        с опытными разработчиками</h2>
    
                    <div class="homeContainerBtn">
                        <a href="" class="pickUp">Подобрать ментора</a>

                        <a href="#more" class="more">Подробнее</a>
                    </div>
                </div>
    
                <div class="homeImg">
                    <img src="img/elements/home.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="needMentor">
        <div class="container">
            <div class="needMentorContent">
                <div class="needMentorImg">
                    <img src="img/elements/more.png" alt="">
                </div>

                <div class="needMentorText">
                    <h2>Зачем нужен ментор?</h2>
                    <p>Правильный разговор прояснит ситуацию лучше, чем десять часов поисков в интернете. Поэтому мы помогаем тем, кому нужен совет, найти человека с экспертизой и обсудить свой вопрос один на один.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="howWorks" id="more">
        <div class="container">
            <div class="sectionTitle">
                <h2>Как это работает?</h2>
            </div>

            <div class="worksContent">
                <div class="worksBlock">
                    <span>1.</span>

                    <div class="worksBlockText">
                        <h3>Выбери ментора</h3>
                        <p>С нами работают 500+ специалистов из Авито, Яндекса, Google и других компаний. Можешь выбрать нужного человека по специальности, опыту работы и стоимости встречи.</p>
                    </div>
                </div>

                <div class="worksBlock">
                    <span>2.</span>

                    <div class="worksBlockText">
                        <h3>Выбери ментора</h3>
                        <p>С нами работают 500+ специалистов из Авито, Яндекса, Google и других компаний. Можешь выбрать нужного человека по специальности, опыту работы и стоимости встречи.</p>
                    </div>
                </div>

                <div class="worksBlock">
                    <span>3.</span>

                    <div class="worksBlockText">
                        <h3>Выбери ментора</h3>
                        <p>С нами работают 500+ специалистов из Авито, Яндекса, Google и других компаний. Можешь выбрать нужного человека по специальности, опыту работы и стоимости встречи.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ourMentors">
        <div class="container">
            <div class="sectionTitle sectionTitleRight">
                <h2>Наши менторы</h2>
            </div>

            <div class="mentorsContent">
                <?php
                
                for ($i=0; $i < 6; $i++) {?> 
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
                <a href="all-mentors.php" class="mentorsSectionAllBtn">Все специалисты</a>
            </div>
        </div>
    </section>

    <section class="becomeMentor" id="#home">
        <div class="container">
            <div class="becomeMentorContent">
                <div class="becomeMentorText">
                    <h2>Хочешь стать ментором?</h2>
                    <p>У тебя есть опыт и ты хочешь делиться своими знаниями 
                        и помогать другим? <br> Присоединяйся к нашей команде менторов! </p>
                
                    <div class="becomeMentorBtnContainer">
                        <a href="register.php" class="questionnaireBtn">Заполнить анкету</a>
                        <a href="" class="askQuestionBtn">Задать вопрос</a>
                    </div>
                </div>

                <div class="becomeMentorImg">
                    <img src="img/elements/become-mentor.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php require_once('include/footer.php'); ?>
</body>
</html>