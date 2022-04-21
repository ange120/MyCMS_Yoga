<?php
    if($_SESSION['loc'] == 'en'){?>


<div>
    <header>
        <div class="containerProfile">
            <div class="logo">
                <p>yoga</p>
            </div>
            <div class="menu" style="margin-left: 20rem;">
                <nav>
                    <a class="findingCourseActivity" href="info_En">Home</a>
                    <a class="aboutUsActivity" href="news">News</a>
                    <a class="myProfileInActivity" href="articlesIndex">Article</a>
                    <a class="myProfileInActivity" href="contact">Contact</a>

                    <select class="dropdown" id="lang">
                        <option value="En">English </option>
                        <option  value="Ru">Russian</option>
                    </select>
                    <div class="buttonHeader">
                        <button class="textLogIn"><a href="login">log in</a></button>
                    </div>
                </nav>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="public/js/lang.js"></script>
    </header>
</div>
<?php }else{?>
        <div>
            <header>
                <div class="containerProfile">
                    <div class="logo">
                        <p>yoga</p>
                    </div>
                    <div class="menu" style="margin-left: 20rem;">
                        <nav>
                            <a class="findingCourseActivity" href="info_Ru">Главная</a>
                            <a class="aboutUsActivity" href="news">Новости</a>
                            <a class="myProfileInActivity" href="articlesIndex">Статьи</a>
                            <a class="myProfileInActivity" href="contact">Контакты</a>
                            <select class="dropdown" id="lang">
                                <option  value="Ru">Russian</option>
                                <option value="En">English </option>
                            </select>
                            <div class="buttonHeader">
                                <button class="textLogIn"><a href="login">Вход</a></button>
                            </div>
                        </nav>
                    </div>
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="public/js/lang.js"></script>
            </header>
        </div>

    <?php   } ?>