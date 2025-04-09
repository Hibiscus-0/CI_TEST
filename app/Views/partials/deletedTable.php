<link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('public/styles/deletedTable.css') ?>">

<div class="deletedTable-header">
    <div class="header-content">
        <h2 class="tableTitle">Deleted Data</h2>
        <div class="search-container">
            <i class="bi bi-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Search Accounts...">
        </div>
    </div>
</div>

<div class="table-container">
    <table class="deleted-items-table">
        <thead>
            <tr>
                <th>User</th>
                <th>Item Name</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>eronwew2</td>
                <td>SOFTENG2 FOLDER</td>
                <td>
                    <span class="item-type deletedFolder">
                        <i class="bi bi-folder-fill"></i> Folder
                    </span>
                </td>
                <td class="actions">
                    <button class="btn-delete">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>

            <tr>
                <td>EWEWEWEQWE</td>
                <td>Project Notes</td>
                <td>
                    <span class="item-type note">
                        <i class="bi bi-file-earmark-text-fill"></i> Note
                    </span>
                </td>
                <td class="actions">
                    <button class="btn-delete">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>EWEWEWEQWE</td>
                <td>Project Notes</td>
                <td>
                    <span class="item-type note">
                        <i class="bi bi-file-earmark-text-fill"></i> Note
                    </span>
                </td>
                <td class="actions">
                    <button class="btn-delete">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>EWEWEWEQWE</td>
                <td>Project Notes</td>
                <td>
                    <span class="item-type note">
                        <i class="bi bi-file-earmark-text-fill"></i> Note
                    </span>
                </td>
                <td class="actions">
                    <button class="btn-delete">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>