<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/analytics.css') ?>">
<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">
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

<div class="analytics-main-container">
    <div class="line-graph-container">
        <div class="line-graph-header">
            <h2>Total Users Report</h2>
        </div>
        <div id="chart-container">
            <canvas id="userChart"></canvas>
        </div>
    </div>
    <div class="bar-graph-container">
        <div class="bar-graph-header">
            <h2>Notes & Tasks Report</h2>
            <div class="search-container">
                <input type="text" placeholder="Search Accounts..." class="search-bar">
                <i class="bi bi-search search-icon"></i>
            </div>
        </div>

        <div id="bar-chart-container">
            <canvas id="reportChart"></canvas>
        </div>
    </div>
</div>

<!-- Line Chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= base_url('public/scripts/analytics-chart.js') ?>"></script>

<!-- Bar Graph-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= base_url('public/scripts/analytics-bar.js') ?>"></script>