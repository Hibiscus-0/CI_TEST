<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/dataRestoration.css') ?>">
<link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/notifications.css') ?>">

<div class="header-container">
    <div class="header-name">
        <h1>Hello, ADMIN</h1>
    </div>
    <div class="notif-container position-relative">
        <img src="<?= base_url('public/images/notifications.png') ?>" alt="Notifications" class="notif-icon"
            id="notificationIcon">
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
            id="notificationBadge">
            2
        </span>
    </div>
</div>

<div class="main-container">
    <h1>DATA RESTORATION</h1>
</div>