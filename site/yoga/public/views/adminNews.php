<!DOCTYPE html>

<head>
    <?php include 'admin/adminHead.php'?>
    <link rel="stylesheet" type="text/css" href="public/css/contact.css">
    <script src="public/js/admin/adminNews.js"></script>
</head>

<body>
<main>
    <?php include 'admin/adminMenu.php'?>
<div class="bodyTable">
    <h2>News List</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <?foreach ($heatTable as $item): ?>
                <th><?=$item?></th>
                <?php endforeach; ?>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <?php  foreach ($newsList as  $value): ?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=mb_substr($value['title_en'],0,50, 'UTF-8').'...'?></td>
                <td><?=mb_substr($value['title_ru'],0,50, 'UTF-8').'...'?></td>
                <td><?=mb_substr($value['description_en'],0,30, 'UTF-8').'...' ?></td>
                <td><?=mb_substr($value['description_ru'],0,30, 'UTF-8').'...'?></td>
                <td><?=$value['author']?></td>
                <td><?=$value['img']?></td>
                <td><?=$value['date']?></td>
                <td><button onclick="AddNew()">Add New</button><button onclick="updateNewsPage(<?=$value['id']?>)">Update</button><button onclick="requestToDelete(<?=$value['id']?>)">Delete</button></td>
            </tr>
            <?php endforeach;  ?>
            <tbody>
        </table>
    </div>
</div>

</main>
</body>