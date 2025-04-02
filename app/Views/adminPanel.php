<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jotterpal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/adminPanel.css') ?>">
</head>

<body>
    <div class="main-container">
        <div class="sidebar-container">
            <?= view('adminSidebar') ?>
        </div>

        <div class="admin-content">
            <?= view('accountManager') ?>
        </div>
    </div>

</body>

</html>