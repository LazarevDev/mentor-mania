<div class="profileApplications">
    <!-- <div class="noApplicationsContent">
        <div class="noApplications">
            <div class="noApplicationsImg">
                <img src="../img/elements/applications.png" alt="">
            </div>

            <div class="noApplicationsText">
                <h2>Новых заявок пока нет</h2>
                <p>В этом разделе появляются оповещения от пользователей</p>
            </div>
        </div>
    </div> -->

    <div class="applicationsContent">

        <?php 
        for ($i=0; $i < 20; $i++) { ?>
            <div class="applicationsHr"></div>

            <div class="applicationsBlock">
                <div class="applicationsUserName">
                    <h2>Андрей Кустов</h2>
                    <!-- <div class="statusApplications statusRead"></div> -->
                    <div class="statusApplications statusNotRead"></div>
                </div>

                <div class="applicationsDateTime">
                    <p>06.11.2022 в 16:12</p>
                </div>

                <div class="applicationsText">
                    <p>Lorem ipsum dolor sit amet, an eos lorem ancillae expetenda, vim et utamur quaestio. Sale liber et vel. Lorem ipsum dolor sit amet, an eos lorem ancillae expetenda, vim et utamur quaestio. Eam id posse dictas voluptua, veniam laoreet oportere no mea, quis regione suscipiantur mea an.
                    Odio contentiones sed cu, usu commodo prompta prodesset id. Elitr accommodare deterruisset eam te, vim munere pertinax consetetur at. Per cu iracundia splendide. Eu eam dolores lobortis percipitur, quo te equidem deleniti disputando.</p>
                </div>

                <div class="applicationsEmail">
                    <p>s11web@yandex.ru</p>
                </div>
            </div>

        
        <?php } ?>

    </div>
</div>