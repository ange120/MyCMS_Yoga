<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/registration.css">
    <link rel="stylesheet" type="text/css" href="public/css/modal.css">
    <script src="public/js/modal.js"></script>
    <script src="public/js/validateRegistration.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
    <title>Registration page</title>
</head>

<body>
<main>
    <header>
        <div class="logoRegistrationPage">
            <p>yoga</p>
        </div>
    </header>
    <div class="girlReg"><img src="public/img/girlRegPage.svg"></div>
    <div class="tableRegPage">
        <p class="titleTable">Registration</p>
        <form method="POST" onsubmit="return validate_form();" name="contact_form" id="formUser">
            <div class="formTable">

                <div class="surnameRegPage">
                    <div class="surname-conteinerRegPage">
                        <input name="name" class="conteinerSurRegPage" type="text" size="30"
                               placeholder="Name">
                    </div>
                </div>
                <div class="surnameRegPage">
                    <div class="surname-conteinerRegPage">
                        <input name="userName" class="conteinerSurRegPage" type="text" size="30"
                               placeholder="User name">
                    </div>
                </div>
                <div class="forthLine">
                    <div class="weight">
                        <div class="weight-conteinerRegPage">
                            <input name="age" class="conteinerWeightRegPage" type="text" size="30"
                                   onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                   placeholder="Age">
                        </div>
                    </div>
                </div>
                <div class="emailRegPage">
                    <div class="login-conteinerRegPage">
                        <input name="email" class="login-conteiner-formRegPage" type="email" size="30"
                               placeholder="email@email.pl">
                    </div>
                </div>
                <div class="passwordRegPage">
                    <div class="password-conteinerRegPage">
                        <input name="password" class="password-conteiner-formRegPage" type="password" size="30"
                               placeholder="Password">
                    </div>
                </div>
                <div class="buttonRegLogin">
                    <button class="textButtonRegLogin" type="button" onclick="validate_form()">Registration</button>
                </div>
        </form>
        <button class="textButtonRegLogin toRegister"><a href="login">Back to Login</a></button>

    </div>
    </div>
</main>
<?php include('footer.php') ?>
</body>