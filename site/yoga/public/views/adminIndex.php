<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/menuAdminPanel.css">
    <title>Yoga</title>
    <link rel="icon" href="public/img/yoga.ico" type="image/x-icon">
</head>

<body>
<main>
    <nav class="menu" tabindex="0">
        <div class="smartphone-menu-trigger"></div>
        <header class="avatar">
            <h2>Welcome: <?=$userName?></h2>
        </header>
        <ul>
            <li tabindex="0" class="icon-dashboard"><span><a href="/adminNews">News</a></span></li>
            <li tabindex="0" class="icon-customers"><span>categories</span></li>
            <li tabindex="0" class="icon-settings"><span>Article</span></li>
            <li tabindex="0" class="icon-users"><span>Users</span></li>
            <li tabindex="0" class="icon-icon-uploadPhoto"><span><a href="/adminNews">Upload photo</a></span></li>
            <li tabindex="0" class="icon-Log-out"><span><a href="/logOut">Log out</a></span></li>
        </ul>
    </nav>
    <main>
        <div class="helper">
            Welcome to Yoga CMS Admin
        </div>
    </main>
</main>
</body>