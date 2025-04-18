<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/allNotes.css') ?>">
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

<div class="allNotes-Main-Wrapper">
    <div class="top-header-content">
        <div class="left-side">
            <i class="bi bi-arrow-left back-icon"></i>
            <div class="notes-dropdown dropdown">
                <button class="dropdown-toggle custom-dropdown-btn" type="button" id="notesDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    ALL NOTES <i class="bi bi-caret-down-fill dropdown-icon"></i>
                </button>
                <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="notesDropdown">
                    <li><a class="dropdown-item custom-dropdown-item" href="#">ALL NOTES</a></li>
                    <li><a class="dropdown-item custom-dropdown-item" href="#">ARCHIVED NOTES</a></li>
                </ul>
            </div>

        </div>
        <div class="right-side">
            <div class="search-box">
                <input type="text" placeholder="Search Notes..." />
                <i class="bi bi-search search-icon"></i>
            </div>
        </div>
    </div>
    <div class="allNotes-container">
        <div class="note-card">
            <div class="note-card-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-card-body">
                <h5 class="note-title">Title</h5>
            </div>
            <div class="note-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="note-card">
            <div class="note-card-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-card-body">
                <h5 class="note-title">Title</h5>
                <p class="note-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="note-card-footer">

            </div>
        </div>
        <div class="note-card">
            <div class="note-card-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-card-body">
                <h5 class="note-title">Title</h5>
            </div>
            <div class="note-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="note-card">
            <div class="note-card-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-card-body">
                <h5 class="note-title">Title</h5>
                <p class="note-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="note-card-footer">
            </div>
        </div>
        <div class="note-card">
            <div class="note-card-header">
                <i class="bi bi-pin-angle-fill pin-icon"></i>
                <i class="bi bi-trash-fill delete-icon"></i>
            </div>
            <div class="note-card-body">
                <h5 class="note-title">Title</h5>
                <p class="note-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="note-card-footer">

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>