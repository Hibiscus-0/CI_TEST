<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/tasks.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/styles/tasks-calendar.css') ?>">
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

<div class="tasks-main-wrapper">
    <div class="top-header-container">
        <div class="left-side">
            <h2 class="header">TASKS</h2>
        </div>
        <div class="right-side">
            <div class="search-box">
                <button class="addTaskBtn">
                    <i class="bi bi-plus-lg add-icon"></i>
                    <p>ADD TASK</p>
                </button>
                <input type="text" placeholder="Search Task..." />
                <i class="bi bi-search search-icon"></i>
            </div>
        </div>
    </div>
    <div class="tasks-content-container">
        <div class="left-content-container">
            <div class="calendar-container">
                <div class="calendar">
                    <div class="calendar-header">
                        <button id="prevMonthBtn"><i class="bi bi-caret-left-fill"></i></i></button>
                        <h2 id="currentMonth"></h2>
                        <button id="nextMonthBtn"><i class="bi bi-caret-right-fill"></i></i></button>
                    </div>
                    <div class="calendar-grid">
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="days" id="calendarDays">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-content-container">
            <div class="content-header">
                <p>COMPLETED</p>
            </div>
            <div class="tasks-wrapper">
                <div class="task-card-completed">
                    <div class="task-details">
                        <h3 class="task-title">HIGH-FI</h3>
                        <p class="task-date">4/15/2025</p>
                        <p class="task-time">6:00PM - 12:30AM</p>
                        <div class="task-category">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="task-actions">
                        <button class="complete-btn">
                            <i class="bi bi-check-square-fill"></i>
                        </button>
                    </div>
                </div>
                <div class="task-card-completed">
                    <div class="task-details">
                        <h3 class="task-title">TITLE</h3>
                        <p class="task-date">DATE</p>
                        <p class="task-time">TIME</p>
                        <div class="task-category">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="task-actions">
                        <button class="complete-btn">
                            <i class="bi bi-check-square-fill"></i>
                        </button>
                    </div>
                </div>
                <div class="task-card-completed">
                    <div class="task-details">
                        <h3 class="task-title">TITLE</h3>
                        <p class="task-date">DATE</p>
                        <p class="task-time">TIME</p>
                        <div class="task-category">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="task-actions">
                        <button class="complete-btn">
                            <i class="bi bi-check-square-fill"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-content-container">
            <div class="content-header">
                <p>ON-GOING</p>
            </div>
            <div class="tasks-wrapper">
                <div class="task-card-ongoing">
                    <div class="task-details2">
                        <h3 class="task-title">HIGH-FI</h3>
                        <p class="task-date">4/15/2025</p>
                        <p class="task-time">6:00PM - 12:30AM</p>
                        <div class="task-category">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="task-right-section">
                        <div class="task-priority">
                            <i class="bi bi-flag-fill high-priority"></i>
                        </div>
                        <div class="task-actions2">
                            <button class="delete-btn">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                            <button class="edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="task-card-ongoing">
                    <div class="task-details2">
                        <h3 class="task-title">HIGH-FI</h3>
                        <p class="task-date">DATE</p>
                        <p class="task-time">TIME</p>
                        <div class="task-category">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="task-right-section">
                        <div class="task-priority">
                            <i class="bi bi-flag-fill high-priority"></i>
                        </div>
                        <div class="task-actions2">
                            <button class="delete-btn">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                            <button class="edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="task-card-ongoing">
                    <div class="task-details2">
                        <h3 class="task-title">HIGH-FI</h3>
                        <p class="task-date">DATE</p>
                        <p class="task-time">TIME</p>
                        <div class="task-category">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="task-right-section">
                        <div class="task-priority">
                            <i class="bi bi-flag-fill high-priority"></i>
                        </div>
                        <div class="task-actions2">
                            <button class="delete-btn">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                            <button class="edit-btn">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('public/scripts/tasks-calendar.js') ?>"></script>