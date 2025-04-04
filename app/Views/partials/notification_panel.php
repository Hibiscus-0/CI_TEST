<link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/styles/notifications.css') ?>">

<div class="notification-container">
    <div class="notification-panel" id="notificationPanel">
        <div class="notification-header">
            <h3>Notifications</h3>
            <button class="btn btn-sm btn-link text-decoration-none p-0" id="markAllRead">
                Mark all as read
            </button>
        </div>

        <div class="notification-list">
            <!-- Notification Item 1 -->
            <div class="notification-item unread">
                <div class="unread-badge"></div>
                <div class="notification-left">
                    <div class="notification-title">aaron212312312312312 has submitted a ticket</div>
                    <div class="notification-time">2 min ago</div>
                </div>
                <div class="notification-right">
                    <div class="notification-icon">
                        <i class="bi bi-ticket-detailed-fill"></i>
                    </div>
                </div>
            </div>

            <!-- Notification Item 2 -->
            <div class="notification-item">
                <div class="notification-left">
                    <div class="notification-title">aaron2 joins JotterPal</div>
                    <div class="notification-time">10 min ago</div>
                </div>
                <div class="notification-right">
                    <div class="notification-icon">
                        <i class="bi bi-person-fill-add"></i>
                    </div>
                </div>
            </div>

            <!-- Notification Item 3 -->
            <div class="notification-item">
                <div class="notification-left">
                    <div class="notification-title">aaron2 wants to delete their account</div>
                    <div class="notification-time">10 min ago</div>
                </div>
                <div class="notification-right">
                    <div class="notification-icon">
                        <i class="bi bi-trash-fill bi2"></i>
                    </div>
                </div>
            </div>
            <!-- Notification Item 4 -->
            <div class="notification-item">
                <div class="notification-left">
                    <div class="notification-title">aaron2 joins JotterPal</div>
                    <div class="notification-time">10 min ago</div>
                </div>
                <div class="notification-right">
                    <div class="notification-icon">
                        <i class="bi bi-person-fill-add"></i>
                    </div>
                </div>
            </div>
            <!-- Notification Item 5 -->
            <div class="notification-item">
                <div class="notification-left">
                    <div class="notification-title">aaron2 wants to delete their account</div>
                    <div class="notification-time">10 min ago</div>
                </div>
                <div class="notification-right">
                    <div class="notification-icon">
                        <i class="bi bi-trash-fill bi2"></i>
                    </div>
                </div>
            </div>
            <!-- Notification Item 6 -->
            <div class="notification-item">
                <div class="notification-left">
                    <div class="notification-title">aaron2 joins JotterPal</div>
                    <div class="notification-time">10 min ago</div>
                </div>
                <div class="notification-right">
                    <div class="notification-icon">
                        <i class="bi bi-person-fill-add"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>