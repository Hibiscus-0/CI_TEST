<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/home.css') ?>">
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

<div class="home-main-container">
    <div class="top-section">
        <div class="all-notes">
            <div class="note-header">
                <i class="bi bi-stickies-fill"></i>
                <span>ALL NOTES</span>
            </div>
            <div class="note-count">10</div>
            <div class="arrow-box">
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
        <div class="deleted-notes">
            <div class="note-header">
                <i class="bi bi-trash-fill"></i>
                <span>DELETED NOTES</span>
            </div>
            <div class="note-count">10</div>
            <div class="arrow-box">
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
        <div class="submit-ticket-container">
            <div class="ticket-left">
                <h2>Want to recover your<br>notes or folders?</h2>
                <button class="submit-btn">
                    <i class="bi bi-ticket-detailed-fill"></i>
                    Submit request ticket
                </button>
            </div>
            <div class="ticket-right">
                <img src="<?= base_url('public/images/NotesFolders.png') ?>" alt="NotesFolders" class="clipboard-icon"
                    id="notificationIcon">
            </div>
        </div>
    </div>
    <div class="reminder-container">
        <div class="reminder-header">
            <h2>Reminders</h2>
            <select class="filter-select">
                <option>All</option>
                <option>Today</option>
                <option>Upcoming</option>
            </select>
        </div>

        <div class="reminder-card">
            <div class="reminder-info">
                <span class="reminder-title">Title</span>
                <span class="reminder-description">Description</span>
            </div>
            <div class="reminder-meta">
                <span>Date</span>
                <span>Time</span>
            </div>
            <div class="dots-menu">•••</div>
        </div>

        <div class="reminder-card">
            <div class="reminder-info">
                <span class="reminder-title">Title</span>
            </div>
            <div class="reminder-meta">
                <span>Date</span>
                <span>Time</span>
            </div>
            <div class="dots-menu">•••</div>
        </div>
        <div class="reminder-card">
            <div class="reminder-info">
                <span class="reminder-title">Title</span>
            </div>
            <div class="reminder-meta">
                <span>Date</span>
                <span>Time</span>
            </div>
            <div class="dots-menu">•••</div>
        </div>
        <div class="reminder-card">
            <div class="reminder-info">
                <span class="reminder-title">Title</span>
            </div>
            <div class="reminder-meta">
                <span>Date</span>
                <span>Time</span>
            </div>
            <div class="dots-menu">•••</div>
        </div>
    </div>
</div>