<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jotterpal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/createAccount.css') ?>">
</head>

<body>
    <div class="main-container">
        <!-- Left Side -->
        <div class="left-container">
            <div class="branding">
                <img src="<?= base_url('public/images/JotterpalLogo.png') ?>" alt="JotterPal Logo" class="logo">
                <p class="brand-tagline">Your note-taking best friend</p>
            </div>
        </div>

        <!-- Right Side  -->
        <div class="right-container">
            <div class="registration-form">
                <h2 class="form-title">Create Account</h2>
                <p class="form-subtitle">Hey there! Let’s get started.</p>

                <form action="process_registration.php" method="POST">
                    <h3 class="form-section-title">Personal Information</h3>
                    <div class="input-group">
                        <div class="row">
                            <label for="firstname">First Name</label>
                            <input type="text" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="row">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="last_name" placeholder="Last Name" required>
                        </div>

                    </div>

                    <div class="input-group">
                        <div class="row">
                            <label for="birth_month">Birth Month</label>
                            <select name="birth_month" required>
                                <option value="" disabled selected>Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="March">April</option>
                                <option value="March">May</option>
                                <option value="March">June</option>
                                <option value="March">July</option>
                                <option value="March">August</option>
                                <option value="March">September</option>
                                <option value="March">October</option>
                                <option value="March">November</option>
                                <option value="March">December</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="birth_day">Day</label>
                            <select name="birth_day" required>
                                <option value="" disabled selected>Day</option>
                                <?php for ($i = 1; $i <= 31; $i++) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="row">
                            <label for="birth_year">Year</label>
                            <select name="birth_year" required>
                                <option value="" disabled selected>Year</option>
                                <?php for ($i = date("Y"); $i >= 1940; $i--) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="contact_number">Contact Number</label>
                        <input type="number" name="contact_number" placeholder="Contact Number" required>
                    </div>
                    <div class="row">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <h3 class="form-section-title">Account Information</h3>
                    <div class="row">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>

                    <div class="input-group">
                        <div class="row">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="row">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" placeholder="Re-enter Password" required>
                        </div>

                    </div>

                    <button type="submit" class="submit-btn">Create Account</button>

                    <p class="login-text">Already have an account? <a href="<?= base_url('login') ?>">Login</a></p>

                    <div class="divider-container">
                        <hr class="divider">
                        <p class="or">OR</p>
                        <hr class="divider">
                    </div>

                    <button type="button" class="google-login">
                        <img src="<?= base_url('public/images/google.png') ?>" alt="Google Icon">
                        Login with Google
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('public/scripts/snackbar.js') ?>"></script>
    <script src="<?= base_url('public/scripts/registerValidation.js') ?>"></script>
</body>

</html>