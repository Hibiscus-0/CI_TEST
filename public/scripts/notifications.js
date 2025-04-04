// public/assets/js/notifications.js
document.addEventListener('DOMContentLoaded', function() {
    const notifContainer = document.querySelector('.notif-container');
    const notifPanel = document.getElementById('notificationPanel');
    const notifBadge = document.querySelector('.notif-container .badge');
    const markAllRead = document.querySelector('.mark-all-read');
    
    // Toggle panel visibility
    notifContainer.addEventListener('click', function(e) {
        e.stopPropagation();
        notifPanel.classList.toggle('show');
    });
    
    // Close when clicking outside - FIXED THIS LINE
    document.addEventListener('click', function(e) {
        if (!notifPanel.contains(e.target) && e.target !== notifContainer) {
            notifPanel.classList.remove('show');
        }
    });
    
    // Mark all as read
    if (markAllRead) {
        markAllRead.addEventListener('click', function(e) {
            e.stopPropagation();
            document.querySelectorAll('.notification-item.unread').forEach(item => {
                item.classList.remove('unread');
            });
            updateBadgeCount();
        });
    }
    
    // Mark single as read when clicking anywhere on item
    document.querySelectorAll('.notification-item').forEach(item => {
        item.addEventListener('click', function(e) {
            if (!e.target.closest('a')) { // Don't mark as read if clicking a link
                this.classList.remove('unread');
                updateBadgeCount();
            }
        });
    });
    
    function updateBadgeCount() {
        const unreadCount = document.querySelectorAll('.notification-item.unread').length;
        if (notifBadge) {
            notifBadge.textContent = unreadCount;
            notifBadge.style.display = unreadCount > 0 ? 'block' : 'none';
        }
    }
    
    // Initialize badge count
    updateBadgeCount();
});