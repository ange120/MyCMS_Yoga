<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/info.css">
    <link rel="stylesheet" type="text/css" href="public/css/mainStyleToPage.css">
    <title>Yoga</title>
    <link rel="icon" href="public/img/yoga.ico" type="image/x-icon">
</head>


<body>
<main>
    <section style="
    background-image: url(public/img/girl.svg);
    background-repeat: no-repeat;
    background-position-x: 80%;
    background-position-y: 75%;
">
        <?php
        $_SESSION['loc'] = 'ru';
        include ('header.php');
        ?>
        <div class="content">
            <h1 class="titleBlock1">Программы онлайн-обучения в режиме реального времени</h1>
            <p class="textBlock1">Совершенствуйте свое тело и наполняйте его позитивной энергией не выходя из дома</p>
            <div class="buttonBlock1">
                <button class="textButtonBlock1">ПОПРОБУЙТЕ БЕСПЛАТНО</button>
            </div>
        </div>
    </section>

    <section>
        <div class="block2">
            <div class="contentBlock2">
                <h1 class="titleBlock2">О наших программах обучения</h1>
                <p class="textBlock2">Уроки рассчитаны на разный уровень физической подготовки и подходят как для
                    новички и профессионалы. Продолжительность каждого занятия от 15 до 60 минут.
                    Никакие тренировки не требуют дополнительного оборудования.</p>
            </div>
            <div class="imgBlock2">
                <img src="public/img/girlOnBlock2.svg">
            </div>
        </div>
    </section>

    <section>
        <div class="block3">
                <h1 class="titleBlock3">Причины, по которым вам стоит заниматься йогой</h1>
            <div class="notesBlock3">
                <div class="note1" style="
                background-image: url(public/img/noteWithMoonBlock3.svg);
                background-repeat: no-repeat;
                background-size: contain;
                ">
                    <p class="titleNote1">Лучший сон</p>
                    <p class="textNote1">Йога снижает стресс, что помогает бороться с бессонницей. Йога учит, как изолировать ум от
                        повседневных проблем, благодаря которым вы быстрее заснете и не проснетесь в страхе и
                        стресс среди ночи.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block4">
            <div class="contentBlock4">
                <h1 class="titleBlock4">О наших программах обучения</h1>
                <p class="textBlock4">Уроки рассчитаны на разный уровень физической подготовки и подходят как для
                    новички и профессионалы. Продолжительность каждого занятия от 15 до 60 минут.
                    Никакие тренировки не требуют дополнительного оборудования.</p>
                <div class="buttonBlock4">
                    <button class="textButtonBlock4">ПОПРОБУЙТЕ БЕСПЛАТНО</button>
                </div>
            </div>
            <div class="imgBlock4">
                <img src="public/img/girlOnBlock4.svg">
            </div>
        </div>
    </section>

    <section>
        <div class="block5">
            <div class="contentBlock5">
                <h1 class="titleBlock5">Выберите свою подписку</h1>
                <div class="pricesBlock5">
                    <div class="firstPriceBlock">
                        <p class="oneMonth"><span class="month1">1</span> месяц</p>
                        <hr />
                        <p class="price1"><span class="amount1">150</span> руб</p>
                        <div class="buttonBlock5">
                            <button class="textButtonBlock5">Выбирать</button>
                        </div>
                    </div>

                    <div class="secondPriceBlock">
                        <p class="oneMonth2"><span class="month2">3</span> месяц</p>
                        <hr />
                        <p class="price2"><span class="amount2">1220</span> руб</p>
                        <div class="buttonBlock5_2">
                            <button class="textButtonBlock5_2">Выбирать</button>
                        </div>
                    </div>

                    <div class="thirdPriceBlock">
                        <p class="oneMonth3"><span class="month3">2</span> месяц</p>
                        <hr />
                        <p class="price3"><span class="amount3">500</span> руб</p>
                        <div class="buttonBlock5_3">
                            <button class="textButtonBlock5_3">Выбирать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="block6">
            <div class="contentBlock6">
                <h1 class="titleBlock6">Получите месяц бесплатного обслуживания</h1>
                <div class="emailAndButton">
                    <div class="email">
                        <div class="login-conteiner">
                            <input class="login-conteiner-form" type="email" size="30" placeholder="email@email.pl">
                        </div>
                    </div>

                    <div class="buttonBlock6">
                        <div class="button-conteinerBlock6">
                            <button class="textButtonBlock6">Выбирать</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include ('footer.php'); ?>
</body>