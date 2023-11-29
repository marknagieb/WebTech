// JavaScript Document
function validateName(nameInput, statusElement) {
    var nameRegex = /^[a-zA-Z-' ]+$/;
    statusElement.classList.add("alert");
    if (nameInput.value.match(nameRegex) && nameInput.value !== "") {
        statusElement.classList.remove("alert-danger");
        statusElement.classList.add("alert-success");
        statusElement.innerHTML = "Name is valid!";
    } else {
        statusElement.classList.remove("alert-success");
        statusElement.classList.add("alert-danger");
        statusElement.innerHTML = "Name is NOT valid!";
    }
}

function validatePhoneNumber(phoneInput, statusElement) {
    var phoneRegex = /^\d{10}$/;
    statusElement.classList.add("alert");
    if (phoneInput.value.match(phoneRegex)) {
        statusElement.classList.remove("alert-danger");
        statusElement.classList.add("alert-success");
        statusElement.innerHTML = "Phone number is valid!";
    } else {
        statusElement.classList.remove("alert-success");
        statusElement.classList.add("alert-danger");
        statusElement.innerHTML = "Phone number is NOT valid!";
    }
}

function validateComments(commentsInput, statusElement) {
    statusElement.classList.add("alert");
    if (commentsInput.value !== "") {
        statusElement.classList.remove("alert-danger");
        statusElement.classList.add("alert-success");
        statusElement.innerHTML = "Comments are valid!";
    } else {
        statusElement.classList.remove("alert-success");
        statusElement.classList.add("alert-danger");
        statusElement.innerHTML = "Comments cannot be empty!";
    }
}

function validateEmail(email) {
    var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var elEmailStatus = document.getElementById('emailStatus');
    elEmailStatus.classList.add("alert");
    if (email.value.match(validRegex) && email.value !== "") {
        elEmailStatus.classList.remove("alert-danger");
        elEmailStatus.classList.add("alert-success");
        elEmailStatus.innerHTML = "Email is valid!";
    } else {
        elEmailStatus.classList.remove("alert-success");
        elEmailStatus.classList.add("alert-danger");
        elEmailStatus.innerHTML = "Email is NOT valid!";
    }
}

document.getElementById('firstName').addEventListener('blur', function() {
    validateName(this, document.getElementById('firstNameStatus'));
}, false);

document.getElementById('lastName').addEventListener('blur', function() {
    validateName(this, document.getElementById('lastNameStatus'));
}, false);

document.getElementById('phoneNumber').addEventListener('blur', function() {
    validatePhoneNumber(this, document.getElementById('phoneStatus'));
}, false);

document.getElementById('comments').addEventListener('blur', function() {
    validateComments(this, document.getElementById('commentsStatus'));
}, false);

document.getElementById('email').addEventListener('blur', function() {
    validateEmail(this);
}, false);
