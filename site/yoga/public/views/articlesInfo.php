<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/info.css">
    <link rel="stylesheet" type="text/css" href="public/css/mainStyleToPage.css">
    <link rel="stylesheet" type="text/css" href="public/css/news.css">
    <title>Yoga</title>
    <link rel="icon" href="public/img/yoga.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
    <script src="public/js/langOnLoad.js"></script>
</head>


<body>
<div class="head">

</div>
<div class="localSelect">
    <select class="dropdown" id="langOnLoad">
        <?php var_dump($localController); foreach ($localController as $key => $value):?>
            <option  value="<?=$key?>"><?=$value?></option>
        <?php endforeach; ?>
    </select>
</div>
<main class="mainBloc">
</main>
<div class="footerOnLoad">
</div>

</body>