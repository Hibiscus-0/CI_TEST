<div class="sidebar">
    <div class="sidebar-pic">
        <img src="<?= base_url('public/images/Jotterpal Mascot.png') ?>" alt="Jotterpal" class="menu-icon">
    </div>

    <ul class="sidebar-menu">
        <li class="menu-item">
            <a href="<?= base_url('admin') ?>" class="menu-link">
                <img src="<?= base_url('public/images/accountManager.png') ?>" alt="Account Manager" class="menu-icon">
                <span>Account Manager</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?= base_url('admin/analytics') ?>" class="menu-link">
                <img src="<?= base_url('public/images/analytics.png') ?>" alt="Analytics" class="menu-icon">
                <span>Analytics</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?= base_url('admin/dataRestoration') ?>" class="menu-link">
                <img src="<?= base_url('public/images/dataRestore.png') ?>" alt="Data Restoration" class="menu-icon">
                <span>Data Restoration</span>
            </a>
        </li>
    </ul>

    <div class="logout-container">
        <ul class="sidebar-menu">
            <li class="menu-item logout">
                <a href="<?= base_url('admin/logout') ?>" class="menu-link">
                    <img src="<?= base_url('public/images/logout.png') ?>" alt="Logout" class="menu-icon">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #1E2054;
    padding: 0px;
    border-top-right-radius: 2rem;
    border-bottom-right-radius: 2rem;
    display: flex;
    flex-direction: column;
}

.sidebar-pic {
    padding: 10px;
    margin: 20px 0px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.sidebar-pic img {
    width: 100px;
    height: 100px;
}

.sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu-item {
    margin: 30px 0px 0px 0px;
}

.menu-link {
    font-weight: 600;
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 14px;
    color: #FCF5EE;
    opacity: 70%;
    text-decoration: none;
    width: 100%;
}

.menu-link:active {
    background-color: #FCF5EE;
    color: #1E2054;
    opacity: 100%;
}

.menu-link:hover {
    background-color: #FCF5EE;
    color: #1E2054;
    opacity: 100%;
}

.menu-link:hover .menu-icon {
    filter: brightness(0) invert(0);
}

.logout-container {
    margin-top: auto;
    bottom: 0;
    border-bottom-right-radius: 2rem;
}

.menu-item.logout {
    margin-top: 0;
    border-top: 2px solid #FCF5EE;
    padding-top: 0;
}

.menu-item.logout .menu-link {
    padding-top: 20px;
    color: #FCF5EE;
    border-bottom-right-radius: 2rem;
}

.menu-item.logout .menu-link:hover {
    color: #FCF5EE;
    background-color: #e74c3c;
    border-bottom-right-radius: 2rem;
}

.menu-icon {
    width: 20px;
    height: 20px;
    object-fit: contain;
    transition: all 0.3s ease;
}
</style>