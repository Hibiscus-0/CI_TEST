<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/notes.css') ?>">
<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">
<link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

<div class="header-container">
    <div class="header-name">
        <h2>Hello, aaron</h2>
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

<div class="notes-main-wrapper">
    <div class="top-header-container">
        <div class="left-side">
            <h2 class="header">FOLDERS</h2>
        </div>
        <div class="right-side">
            <div class="search-box">
                <button class="addFolderBtn">
                    <i class="bi bi-plus-lg add-icon"></i>
                    <p>ADD FOLDER</p>
                </button>
                <input type="text" placeholder="Search Folder..." />
                <i class="bi bi-search search-icon"></i>
            </div>
        </div>
    </div>
    <div class="folders-container">
        <div class="folder-item">
            <i class="bi bi-folder-fill folder-icon"></i>
            <div class="folder-name">FOLDER NI AARON</div>
            <i class="bi bi-lock-fill lock-icon"></i>
        </div>
        <div class="folder-item">
            <i class="bi bi-folder-fill folder-icon"></i>
            <div class="folder-name">FOLDER NI AARON</div>

        </div>
        <div class="folder-item">
            <i class="bi bi-folder-fill folder-icon"></i>
            <div class="folder-name">FOLDER NI AARON</div>

        </div>
        <div class="folder-item">
            <i class="bi bi-folder-fill folder-icon"></i>
            <div class="folder-name">FOLDER NI AARON</div>

        </div>
        <div class="folder-item">
            <i class="bi bi-folder-fill folder-icon"></i>
            <div class="folder-name">FOLDER NI AARON</div>
            <i class="bi bi-lock-fill lock-icon"></i>
        </div>
        <div class="folder-item">
            <i class="bi bi-folder-fill folder-icon"></i>
            <div class="folder-name">FOLDER NI AARON</div>
            <i class="bi bi-lock-fill lock-icon"></i>
        </div>
        <div class="folder-item">
            <i class="bi bi-folder-fill folder-icon"></i>
            <div class="folder-name">FOLDER NI AARON</div>

        </div>
    </div>
</div>