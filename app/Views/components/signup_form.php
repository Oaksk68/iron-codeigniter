<?php
$emailId = 'email_' . uniqid();
$emailHelpId = 'email_help_' . uniqid();
$statusId = 'signup_status_' . uniqid();
?>
<form class="signup-input-container my-4">
    <div class="input-wrapper">
        <input type="email" id="<?= esc($emailId) ?>" placeholder=" " required autocomplete="email" aria-describedby="<?= esc($emailHelpId . ' ' . $statusId) ?>">
        <label for="<?= esc($emailId) ?>">Enter email address</label>
        <p id="<?= esc($emailHelpId) ?>" class="visually-hidden">Enter a valid email address to sign up.</p>
    </div>
    <button type="submit" class="signup-button">Sign up now</button>
    <p id="<?= esc($statusId) ?>" class="visually-hidden" role="status" aria-live="polite"></p>
</form>
