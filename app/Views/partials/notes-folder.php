<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/notes-folder.css') ?>">
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

<div class="notesfolder-main-wrapper">
    <div class="top-header-container">
        <div class="left-side">
            <i class="bi bi-arrow-left-short back-icon"></i>
            <h2 class="header">FOLDER NAME</h2>
            <i class="bi bi-lock-fill lock-icon"></i>
        </div>
        <div class="right-side">
            <div class="search-box">
                <button class="addNoteBtn">
                    <i class="bi bi-plus-lg add-icon"></i>
                    <p>ADD NOTE</p>
                </button>
                <input type="text" placeholder="Search Note..." />
                <i class="bi bi-search search-icon"></i>
            </div>
            <i class="bi bi-three-dots dots-icon"></i>
        </div>
    </div>
    <div class="notes-container">
        <div class="note-item">
            <div class="note-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-body">
                <h3 class="note-title">Title</h3>
                <p class="note-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="note-footer">
                <span class="note-date">Date</span>
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="note-item">
            <div class="note-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-body">
                <h3 class="note-title">aaronasda12312312312s</h3>
                <p class="note-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="note-footer">
                <span class="note-date">4/18/2025</span>
            </div>
        </div>
        <div class="note-item">
            <div class="note-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-body">
                <h3 class="note-title">Title</h3>
                <p class="note-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="note-footer">
                <span class="note-date">Date</span>
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="note-item">
            <div class="note-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-body">
                <h3 class="note-title">ahahahahah</h3>
            </div>
            <div class="note-footer">
                <span class="note-date">4/17/2025</span>
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
    </div>
</div>