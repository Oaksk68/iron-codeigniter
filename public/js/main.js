document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.signup-input-container');

    if (!forms.length) return;

    forms.forEach(function (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();

        const emailInput = form.querySelector('input[type="email"]');
        const email = emailInput ? emailInput.value.trim() : '';

        if (!email) {
          alert('Please enter your email');
          return;
        }

        alert('Thanks for signing up!');
      });
    });
});
