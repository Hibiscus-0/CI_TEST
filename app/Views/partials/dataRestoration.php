<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/dataRestoration.css') ?>">
<link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/styles/notifications.css') ?>">

<div class="header-container">
    <div class="header-name">
        <h2>Hello, ADMIN</h2>
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

<div class="data-main-container">
    <div class="stats-requests-container">
        <div class="deleted-stats-container">
            <div class="deleted-stat-card">
                <div class="stat-header">
                    <img src="<?= base_url('public/images/notes.png') ?>" alt="Deleted notes" class="icon">
                    <h3 class="stat-title">Deleted Notes</h3>
                </div>
                <div class="stat-value">10</div>
            </div>

            <div class="deleted-stat-card">
                <div class="stat-header">
                    <img src="<?= base_url('public/images/folders.png') ?>" alt="Deleted Folders" class="icon">
                    <h3 class="stat-title">Deleted Folders</h3>
                </div>
                <div class="stat-value">0</div>
            </div>

            <div class="deleted-stat-card">
                <div class="stat-header">
                    <img src="<?= base_url('public/images/tasks.png') ?>" alt="Deleted Tasks" class="icon">
                    <h3 class="stat-title">Deleted Tasks</h3>
                </div>
                <div class="stat-value">3</div>
            </div>
        </div>
        <div class="restore-requests-container">
            <?= view('partials/restoreRequests') ?>
        </div>
    </div>
    <div class="deletedTable-container">
        <?= view('partials/deletedTable') ?>
    </div>
</div>