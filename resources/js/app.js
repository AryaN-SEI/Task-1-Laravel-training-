document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#user-form');

    if (!form) {
        return;
    }

    form.addEventListener('submit', (event) => {
        let isValid = true;

        clearErrors(form);

        const name = form.querySelector('[name="name"]');
        const email = form.querySelector('[name="email"]');
        const password = form.querySelector('[name="password"]');

        // Name
        if (!name.value.trim()) {
            showError(name, 'Name is required.');
            isValid = false;
        } else if (name.value.trim().length > 255) {
            showError(name, 'Name cannot exceed 255 characters.');
            isValid = false;
        }

        // Email
        if (!email.value.trim()) {
            showError(email, 'Email is required.');
            isValid = false;
        } else if (!isValidEmail(email.value.trim())) {
            showError(email, 'Please enter a valid email address.');
            isValid = false;
        }

        // Password
        if (password.required && !password.value) {
            showError(password, 'Password is required.');
            isValid = false;
        } else if (password.value && password.value.length < 8) {
            showError(password, 'Password must be at least 8 characters.');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});


function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}


function showError(input, message) {
    input.classList.add('input-error');

    const error = document.createElement('p');
    error.className = 'client-error';
    error.textContent = message;

    input.parentElement.appendChild(error);
}


function clearErrors(form) {
    form.querySelectorAll('.client-error').forEach(error => {
        error.remove();
    });

    form.querySelectorAll('.input-error').forEach(input => {
        input.classList.remove('input-error');
    });
}
window.openDeleteModal = function () {
    const modal = document.getElementById('delete-modal');

    if (modal) {
        modal.classList.add('active');
    }
};

window.closeDeleteModal = function () {
    const modal = document.getElementById('delete-modal');

    if (modal) {
        modal.classList.remove('active');
    }
};
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeDeleteModal();
    }
});