<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JotterPal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/login.css') ?>">
</head>

<body>
    <div class="main-container">
        <div class="left-container">
            <div class="branding">
                <img src="<?= base_url('public/images/JotterpalLogo.png') ?>" alt="JotterPal Logo" class="logo">
                <p class="brand-tagline">Your note-taking best friend</p>
            </div>
        </div>

        <div class="right-container">
            <div class="login-form">
                <h2 class="form-title">Login</h2>
                <p class="form-subtitle">Welcome back!</p>

                <form id="loginForm">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        <div class="forgot-pass">
                            <a href="#" class="forgot">Forgot Password?</a>
                        </div>
                    </div>

                    <button type="submit" class="login-btn">Login</button>

                    <div class="form-footer">
                        <p>Don't have an account? <a href="<?= base_url('createAccount') ?>">Create</a></p>
                    </div>
                </form>
                <div class="snackbar" id="snackbar">Invalid Credentials</div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('public/scripts/login.js') ?>"></script>

</body>

</html>