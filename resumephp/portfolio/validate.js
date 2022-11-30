function checkPassword() {
    if (document.getElementById('psw').value !== 'deedle823') {
        alert('Incorrect password: reenter your password');
        event.preventDefault();
    }
}

function checkUsername() {
    if (document.getElementById('uname').value !== 'gatormonkey') {
        alert('Incorrect username: reenter your username');
        event.preventDefault();
    }
}

function checkLogin() {
    checkPassword();
    checkUsername();
}