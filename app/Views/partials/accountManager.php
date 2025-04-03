<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/accountManager.css') ?>">
<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">

<div class="header-container">
    <div class="header-name">
        <h1>Hello, ADMIN</h1>
    </div>
    <div class="notif-container">
        <img src="<?= base_url('public/images/notifications.png') ?>" alt="Notifications" class="notif-icon">
    </div>
</div>

<div class="main-card-container">
    <div class="card-containers">
        <div class="card-content">
            <div class="card-header">
                <img src="<?= base_url('public/images/totalUsers.png') ?>" alt="Total Users" class="card-icon">
                <p class="card-label">Total Users</p>
            </div>
            <p class="card-value">100</p>
        </div>
    </div>
    <div class="card-containers">
        <div class="card-content">
            <div class="card-header">
                <img src="<?= base_url('public/images/newUsers.png') ?>" alt="New Users" class="card-icon">
                <p class="card-label">New Users Today</p>
            </div>
            <p class="card-value">0</p>
        </div>
    </div>
    <div class="card-containers">
        <div class="card-content">
            <div class="card-header">
                <img src="<?= base_url('public/images/activeUsers.png') ?>" alt="Active Users" class="card-icon">
                <p class="card-label">Active Users</p>
            </div>
            <p class="card-value">23</p>
        </div>
    </div>
</div>

<div class="main-table-container">
    <div class="table-header">
        <h1 class="table-title">Users</h1>
        <div class="search-container">
            <i class="bi bi-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Search Username...">
        </div>
    </div>

    <table class="user-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>eronwew2</td>
                <td>aaronvillamentol0@gmail.com</td>
                <td><span class="status-badge active">ACTIVE</span></td>
                <td>
                    <button class="action-btn">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>eronwew2</td>
                <td>aaronvillamentol0@gmail.com</td>
                <td><span class="status-badge inactive">INACTIVE</span></td>
                <td>
                    <button class="action-btn">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>eronwew2</td>
                <td>aaronvillamentol0@gmail.com</td>
                <td><span class="status-badge inactive">INACTIVE</span></td>
                <td>
                    <button class="action-btn">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>eronwew2</td>
                <td>aaronvillamentol0@gmail.com</td>
                <td><span class="status-badge inactive">INACTIVE</span></td>
                <td>
                    <button class="action-btn">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>eronwew2</td>
                <td>aaronvillamentol0@gmail.com</td>
                <td><span class="status-badge inactive">INACTIVE</span></td>
                <td>
                    <button class="action-btn">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>eronwew2</td>
                <td>aaronvillamentol0@gmail.com</td>
                <td><span class="status-badge inactive">INACTIVE</span></td>
                <td>
                    <button class="action-btn">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>eronwew2</td>
                <td>aaronvillamentol0@gmail.com</td>
                <td><span class="status-badge inactive">INACTIVE</span></td>
                <td>
                    <button class="action-btn">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>