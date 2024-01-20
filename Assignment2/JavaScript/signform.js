function validate() {
    // Reset error messages and style
    resetErrors();

    // Get form elements
    var firstName = document.getElementById('firstname');
    var lastName = document.getElementById('lastname');
    var email = document.getElementById('email');
    var login = document.getElementById('login');
    var phone = document.getElementById('phone');
    var password1 = document.getElementById('password');
    var password2 = document.getElementById('password2');
    var terms = document.getElementById('terms');

    // Flag to track validation status
    var isValid = true;

    // Validate First Name
    if (firstName.value.trim() === '') {
        showError(firstName, "First Name should not be empty.");
        isValid = false;
    }

    // Validate Last Name
    
    if (lastName.value.trim() === '') {
        showError(lastName, "Last Name should not be empty.");
        isValid = false;
    }

    // Validate Email
    if (!validateEmail(email.value)) {
        showError(email, "Email address should be non-empty with this format xyx@xyz.xyz.");
        isValid = false;
    }

    // Validate User Name
    if (login.value.trim() === '') {
        showError(login, "User Name should not be empty.");
        isValid = false;
    }else if (login.value.length > 20) {
        showError(login, "User Name should be less than 20 character long.");
        isValid = false;
    } else {
        login.value = login.value.toLowerCase(); // Convert to lowercase
    }

    // Validate Phone Number
    if (phone.value.trim() === '' || !/^\d{3}-\d{3}-\d{4}$/.test(phone.value)) {
        showError(phone, "Phone number should be in the format xxx-xxx-xxxx.");
        isValid = false;
    }

    // Validate Password
    if (password1.value.length < 8) {
        showError(password, "Password should be at least 8 characters.");
        isValid = false;
    } else if (!/[A-Z]/.test(password.value)) {
        showError(password, "Password should contain at least one uppercase letter.");
        isValid = false;
    } else if (!/[!@#$%^&*(),.?":{}|<>]/.test(password.value)) {
        showError(password, "Password should contain at least one special character (!@#$%^&*(),.?\":{}|<>).");
        isValid = false;
    }

    // Validate Retype Password
    if (password2.value !== password.value) {
        showError(password2, "Passwords do not match.");
        isValid = false;
    }

    // Validate Terms and Conditions
    if (!terms.checked) {
        showError(terms, "You must agree to the terms and conditions.");
        isValid = false;
    }

    // Show alert for newsletter
    if (newsletter.checked) {
        alert("Be cautious, you may receive spam!");
    }

    // Return validation status
    return isValid;
}

// Function to validate email format
function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Function to show error message and highlight the input field
function showError(element, message) {
    // Create a container div for the error
    var errorContainer = document.createElement('div');
    errorContainer.className = 'error-container';

    // Create a div for the error message
    var errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;

    // Create a span for the cross mark (X)
    var crossMark = document.createElement('span');
    crossMark.className = 'cross-mark';
    crossMark.innerHTML = '&times;'; // Unicode character for 'X'

    // Append the error message and cross mark to the container
    errorContainer.appendChild(errorDiv);
    errorContainer.appendChild(crossMark);

    // Append the container to the parent of the input element
    element.parentNode.appendChild(errorContainer);

    // Add classes to highlight the input field and apply a red border
    element.classList.add('error-input');
    errorDiv.classList.add('error-text');
    crossMark.classList.add('error-cross');
    element.classList.add('error-border'); // Add this line for red border
}

// Function to reset error messages and styles
function resetErrors() {
    var errorContainers = document.querySelectorAll('.error-container');
    var errorInputs = document.querySelectorAll('.error-input');

    errorContainers.forEach(function (container) {
        container.parentNode.removeChild(container);
    });

    errorInputs.forEach(function (input) {
        input.classList.remove('error-input', 'error-border');
    });
}
