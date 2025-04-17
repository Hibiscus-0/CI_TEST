<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jotterpal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/studentPanel.css') ?>">
    <link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/notifications.css') ?>">
</head>

<body>
    <div class="main-container">
        <div class="sidebar-container">
            <?= view('partials/studentSidebar') ?>
        </div>

        <div class="student-content">
            <?= view('partials/deletedNotes') ?>
        </div>

        <?= view('partials/notification_panel') ?>
    </div>
    <script src="<?= base_url('public/scripts/notifications.js') ?>"></script>
</body>

</html>