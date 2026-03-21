<?php $emailId = 'email_' . uniqid(); ?>
<form class="signup-input-container my-4">
    <div class="input-wrapper">
        <input type="email" id="<?= esc($emailId) ?>" placeholder=" " required autocomplete="email">
        <label for="<?= esc($emailId) ?>">Enter email address</label>
    </div>
    <button type="submit" class="signup-button">Sign up now</button>
</form>
