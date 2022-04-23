<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/404.css">
    <title>404</title>
    <link rel="icon" href="public/img/yoga.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
        <script src="public/js/langOnLoad.js"></script>
</head>
<body>
<main>
    <div id="background"></div>
    <div class="top">
        <h1>Извините</h1>
        <h3>Нужно войти на сайт для доступа к этой странице!</h3>
    </div>
    <div class="container">
        <div class="ghost-copy">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
        </div>
        <div class="ghost">
            <div class="face">
                <div class="eye"></div>
                <div class="eye-right"></div>
                <div class="mouth"></div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
    <div class="bottom">
        <div class="buttons">
            <button class="textButtonLogin" id="back">Назад</button>
        </div>
    </div>

    <footer>

    </footer>
</main>
<script>
    document.querySelector("#back").onclick = function () {
        window.history.back()
    }
</script>
</body>