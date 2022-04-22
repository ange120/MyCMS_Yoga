<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/info.css">
    <link rel="stylesheet" type="text/css" href="public/css/news.css">
    <link rel="stylesheet" type="text/css" href="public/css/mainStyleToPage.css">
    <title>Yoga</title>
    <link rel="icon" href="public/img/yoga.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
<!--    <script src="public/js/langOnLoad.js"></script>-->
</head>


<body>
<div class="head">

</div>
<div class="localSelect">
    <select class="dropdown" id="langOnLoad">
        <?php
        foreach ($localController as $key => $value):

        ?>
        <option  value="<?=$key?>"><?=$value?></option>
        <?php endforeach; ?>
    </select>
</div>
<main class="mainBloc">



    <div class="blog-card">
        <div class="meta">
            <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
            <ul class="details">
                <li class="author"><a href="#">John Doe</a></li>
                <li class="date">Aug. 24, 2015</li>
                <li class="tags">
                    <ul>
                        <li><a href="#">Learn</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="description">
            <h1>Learning to Code</h1>
            <h2>Opening a door to the future</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <p class="read-more">
                <a href="#">Read More</a>
            </p>
        </div>
    </div>


</main>
<div class="footerOnLoad">
</div>

</body>