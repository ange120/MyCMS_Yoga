<!DOCTYPE html>

<head>
    <?php include 'admin/adminHead.php'?>
    <link rel="stylesheet" type="text/css" href="public/css/contact.css">
    <link rel="stylesheet" type="text/css" href="public/css/modal.css">
    <script src="public/js/admin/uploadPhoto.js"></script>
    <script src="public/js/modal.js"></script>

</head>

<body>
<main>
    <?php include 'admin/adminMenu.php'?>
    <div class="bodyTable">
        <h2>Upload Photo</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>Img</th>
                    <th>Url Img</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach ($photo as $value): ?>
                    <tr>
                        <td><img class="imgToTable" src="<?=$value?>" /></td>
                        <td><?=$value?></td>
                        <td>
                            <button onclick="AddNew()">Upload New</button>
                        </td>
                    </tr>
                <?php endforeach;  ?>
                <tbody>
            </table>
        </div>
    </div>

</main>
</body>