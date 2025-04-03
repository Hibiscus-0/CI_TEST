document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const snackbar = document.getElementById('snackbar');
    
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value;
        
        if(username === '' || password === '') {
            showSnackbar('Please enter both username and password');
            return;
        }
        showSnackbar('Invalid Credentials');
    });
    
    function showSnackbar(message) {
        snackbar.textContent = message;
        snackbar.classList.add('show');
        
        setTimeout(function() {
            snackbar.classList.remove('show');
        }, 5000);
    }
});