<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/deletedNotes.css') ?>">
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

<div class="deletedNotes-mainWrapper">
    <div class="top-header-container">
        <div class="left-side">
            <i class="bi bi-arrow-left back-icon"></i>
            <h2 class="header">DELETED NOTES</h2>
        </div>
        <div class="right-side">
            <div class="search-box">
                <button class="deleteBtn">
                    <i class="bi bi-trash-fill delete-icon"></i>
                    <p>DELETE ALL</p>
                </button>
                <input type="text" placeholder="Search Notes..." />
                <i class="bi bi-search search-icon"></i>
            </div>
        </div>
    </div>
    <div class="reminder-header">
        <p>Notes are available here for 7 days. After that, notes will be permanently deleted.</p>
    </div>
    <div class="deletedNotes-container">
        <div class="deleted-card">
            <div class="deleted-card-header">
                <i class="bi bi-trash-fill delete-icon2"></i>
            </div>
            <div class="deleted-card-body">
                <h5 class="deleted-title">Title</h5>
                <p class="deleted-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="deleted-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="deleted-card">
            <div class="deleted-card-header">
                <i class="bi bi-trash-fill delete-icon2"></i>
            </div>
            <div class="deleted-card-body">
                <h5 class="deleted-title">Title</h5>
                <p class="deleted-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="deleted-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="deleted-card">
            <div class="deleted-card-header">
                <i class="bi bi-trash-fill delete-icon2"></i>
            </div>
            <div class="deleted-card-body">
                <h5 class="deleted-title">Title</h5>
                <p class="deleted-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="deleted-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="deleted-card">
            <div class="deleted-card-header">
                <i class="bi bi-trash-fill delete-icon2"></i>
            </div>
            <div class="deleted-card-body">
                <h5 class="deleted-title">Title</h5>
                <p class="deleted-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="deleted-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="deleted-card">
            <div class="deleted-card-header">
                <i class="bi bi-trash-fill delete-icon2"></i>
            </div>
            <div class="deleted-card-body">
                <h5 class="deleted-title">Title</h5>
                <p class="deleted-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="deleted-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
        <div class="deleted-card">
            <div class="deleted-card-header">
                <i class="bi bi-trash-fill delete-icon2"></i>
            </div>
            <div class="deleted-card-body">
                <h5 class="deleted-title">Title</h5>
                <p class="deleted-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
            </div>
            <div class="deleted-card-footer">
                <i class="bi bi-lock-fill lock-icon"></i>
            </div>
        </div>
    </div>
</div>