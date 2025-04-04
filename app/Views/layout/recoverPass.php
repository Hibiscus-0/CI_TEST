<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jotterpal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/recoverPass.css') ?>">
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">
</head>

<body>
    <img src="<?= base_url('public/images/Jotterpal Mascot.png') ?>" alt="Jotterpal Mascot" class="mascot">
    <h1 class="title">Recover Your Password</h1>
    <p class="subtitle">No worries! Let’s recover your password.</p>
    <div class="container">
        <div class="progress">
            <span class="step active">1</span>
            <span class="line"></span>
            <span class="step">2</span>
            <span class="line"></span>
            <span class="step">3</span>
        </div>

        <div class="form-container step-1">
            <h2>Contact Number</h2>
            <p>Enter the Contact Number you use to sign in to your account.</p>
            <input type="text" placeholder="Enter your contact number" class="input-box">
            <button class="btn primary" onclick="nextStep(2)">Continue</button>
            <button class="btn secondary">Back to Login</button>
        </div>

        <div class="form-container step-2" style="display: none;">
            <h2>Verification Code</h2>
            <p>Enter the verification code sent to your number.</p>
            <input type="text" class="input-box" placeholder="Enter verification code">
            <button class="btn primary" onclick="nextStep(3)">Verify</button>
            <button class="btn secondary" onclick="prevStep(1)">Back</button>
        </div>

        <div class="form-container step-3" style="display: none;">
            <h2>New Password</h2>
            <p>Enter your new password.</p>

            <input type="password" id="new-password" class="input-box" placeholder="Enter new password">

            <input type="password" id="confirm-password" class="input-box" placeholder="Confirm new password">

            <button class="btn primary">Recover</button>
            <button class="btn secondary" onclick="prevStep(2)">Back</button>
        </div>
    </div>
    <script src="<?= base_url('public/scripts/recoverPass.js') ?>"></script>
</body>

</html>