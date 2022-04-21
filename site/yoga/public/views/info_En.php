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
        $_SESSION['loc'] = 'en';
        include ('header.php');
        ?>
        <div class="content">
            <h1 class="titleBlock1">Real-time online training programs</h1>
            <p class="textBlock1">Improve your body and fill it with positive energy from the comfort of your home</p>
            <div class="buttonBlock1">
                <button class="textButtonBlock1">TRY IT FOR FREE</button>
            </div>
        </div>
    </section>

    <section>
        <div class="block2">
            <div class="contentBlock2">
                <h1 class="titleBlock2">About our training programs</h1>
                <p class="textBlock2">The lessons are designed for different levels of fitness and are suitable for both
                    beginners and professionals. The duration of each lesson is 15 to 60 minutes.
                    No workouts require any additional equipment.</p>
            </div>
            <div class="imgBlock2">
                <img src="public/img/girlOnBlock2.svg">
            </div>
        </div>
    </section>

    <section>
        <div class="block3">
            <h1 class="titleBlock3">Reasons why you should practice yoga</h1>
            <div class="notesBlock3">
                <div class="note1" style="
                background-image: url(public/img/noteWithMoonBlock3.svg);
                background-repeat: no-repeat;
                background-size: contain;
                ">
                    <p class="titleNote1">Better sleep</p>
                    <p class="textNote1">Yoga reduces stress which helps fight insomnia. Yoga teaches how to isolate the mind from
                        everyday problems, thanks to which you will fall asleep faster and you will not wake up fearful and
                        stressed out in the middle of the night.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block4">
            <div class="contentBlock4">
                <h1 class="titleBlock4">About our training programs</h1>
                <p class="textBlock4">The lessons are designed for different levels of fitness and are suitable for both
                    beginners and professionals. The duration of each lesson is 15 to 60 minutes.
                    No workouts require any additional equipment.</p>
                <div class="buttonBlock4">
                    <button class="textButtonBlock4">TRY IT FOR FREE</button>
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
                <h1 class="titleBlock5">Choose your subscription</h1>
                <div class="pricesBlock5">
                    <div class="firstPriceBlock">
                        <p class="oneMonth"><span class="month1">1</span> month</p>
                        <hr />
                        <p class="price1"><span class="amount1">50</span> USD</p>
                        <div class="buttonBlock5">
                            <button class="textButtonBlock5">Choose</button>
                        </div>
                    </div>

                    <div class="secondPriceBlock">
                       <p class="oneMonth2"><span class="month2">3</span> month</p>
                        <hr />
                       <p class="price2"><span class="amount2">120</span> USD</p>
                        <div class="buttonBlock5_2">
                            <button class="textButtonBlock5_2">Choose</button>
                        </div>
                    </div>

                    <div class="thirdPriceBlock">
                        <p class="oneMonth3"><span class="month3">2</span> month</p>
                        <hr />
                        <p class="price3"><span class="amount3">120</span> USD</p>
                        <div class="buttonBlock5_3">
                            <button class="textButtonBlock5_3">Choose</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="block6">
            <div class="contentBlock6">
                <h1 class="titleBlock6">Receive a month of free service</h1>
                <div class="emailAndButton">
                    <div class="email">
                        <div class="login-conteiner">
                            <input class="login-conteiner-form" type="email" size="30" placeholder="email@email.pl">
                        </div>
                    </div>

                    <div class="buttonBlock6">
                        <div class="button-conteinerBlock6">
                            <button class="textButtonBlock6">Choose</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include ('footer.php'); ?>
</body>