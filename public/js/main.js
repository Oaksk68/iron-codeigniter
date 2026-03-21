document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.signup-input-container');

    if (!forms.length) return;

    forms.forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const emailInput = form.querySelector('input[type="email"]');
            const status = form.querySelector('[role="status"]');
            const email = emailInput ? emailInput.value.trim() : '';

            if (!emailInput || !status) return;

            if (!email) {
                emailInput.setAttribute('aria-invalid', 'true');
                status.textContent = 'Please enter your email.';
                emailInput.focus();
                return;
            }

            emailInput.removeAttribute('aria-invalid');
            status.textContent = 'Thanks for signing up!';
        });
    });
});
