// Utility function to add or update a warning message next to an input element
function addOrUpdateWarning(element, message) {
    let warning = element.parentNode.querySelector('.warning');
    if (!warning) {
        warning = document.createElement('span');
        warning.className = 'warning';
        element.parentNode.appendChild(warning);
    }
    warning.textContent = message;
}

// Utility function to clear the warning message
function clearWarning(element) {
    let warning = element.parentNode.querySelector('.warning');
    if (warning) {
        warning.textContent = '';
    }
}

// Validate Email with dynamic feedback
function validateEmail() {
    const emailInput = document.getElementById('email');
    const email = emailInput.value;
    const regexp = /\S+@\S+\.\S+/;
    if (regexp.test(email)) {
        clearWarning(emailInput);
        return true;
    } else {
        addOrUpdateWarning(emailInput, 'Please enter a valid email address with the format xyz@xyz.xyz.');
        return false;
    }
}

// Validate Username
function validateUsername() {
    const usernameInput = document.getElementById('username');
    const username = usernameInput.value;
    if (username.length < 4 || username.length > 20) {
        addOrUpdateWarning(usernameInput, 'Username must be between 4 and 20 characters.');
        return false;
    } else {
        clearWarning(usernameInput);
        return true;
    }
}

// Validate Password
function validatePassword() {
    const passwordInput = document.getElementById('password');
    const password = passwordInput.value;
    if (!password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/)) {
        addOrUpdateWarning(passwordInput, 'Password must include at least 6 characters with a mix of upper, lower cases, and numbers.');
        return false;
    } else {
        clearWarning(passwordInput);
        return true;
    }
}

// Validate Password Confirmation
function validateConfirmPassword() {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    if (passwordInput.value !== confirmPasswordInput.value) {
        addOrUpdateWarning(confirmPasswordInput, 'Passwords do not match.');
        return false;
    } else {
        clearWarning(confirmPasswordInput);
        return true;
    }
}

// Bind event listeners to inputs for real-time validation
document.getElementById('email').addEventListener('input', validateEmail);
document.getElementById('username').addEventListener('input', validateUsername);
document.getElementById('password').addEventListener('input', validatePassword);
document.getElementById('confirm-password').addEventListener('input', validateConfirmPassword);

/*// Main validation function called on form submission
function validate() {
    return validateEmail() && validateUsername() && validatePassword() && validateConfirmPassword();
}*/

// Main validation function called on form submission
function validate(event) {
    const isEmailValid = validateEmail();
    const isUsernameValid = validateUsername();
    const isPasswordValid = validatePassword();
    const isConfirmPasswordValid = validateConfirmPassword();
    if (!isEmailValid || !isUsernameValid || !isPasswordValid || !isConfirmPasswordValid) {
        event.preventDefault(); // Prevent form submission
        return false;
    }
    return true;
}

// Attach validation function to the form submission event
document.querySelector('form').addEventListener('submit', validate);


// Reset the form's warnings
document.querySelector('form').addEventListener('reset', function() {
    document.querySelectorAll('.warning').forEach(function(warning) {
        warning.textContent = '';
    });
});
