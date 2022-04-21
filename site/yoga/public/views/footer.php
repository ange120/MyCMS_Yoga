<?php
if($_SESSION['loc'] == 'en'){?>
    <footer class="allFooter">
        <p class="titleFooterSettings">yoga</p>
        <div class="contactsSettings">
            <a class="profileSettings">Home</a>
            <a class="aboutUsSettings">About us</a>
            <a class="contactsSettings_1">Contact us</a>
        </div>
        <div class="mediaSettings">
            <img src="public/img/facebookBlock7.svg">
            <img src="public/img/instagramBlock7.svg">
            <img src="public/img/viberBlock7.svg">
            <img src="public/img/twitterBlock7.svg">
        </div>
        <p class="copyrigthSettings">Copyrigth © 2020.</p>

    </footer>

<?php }else{?>
    <footer class="allFooter">
        <p class="titleFooterSettings">yoga</p>
        <div class="contactsSettings">
            <a class="profileSettings">Главная</a>
            <a class="aboutUsSettings">Новости</a>
            <a class="contactsSettings_1">Контакты</a>
        </div>
        <div class="mediaSettings">
            <img src="public/img/facebookBlock7.svg">
            <img src="public/img/instagramBlock7.svg">
            <img src="public/img/viberBlock7.svg">
            <img src="public/img/twitterBlock7.svg">
        </div>
        <p class="copyrigthSettings">Copyrigth © 2020.</p>

    </footer>

<?php   } ?>