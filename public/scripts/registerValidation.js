document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.registration-form form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = form.querySelector('[name="email"]').value;
        const password = form.querySelector('[name="password"]').value;
        const confirmPassword = form.querySelector('[name="confirm_password"]').value;
        const contactNumber = form.querySelector('[name="contact_number"]').value;
        
        if (!validateEmail(email)) {
            showSnackbar('Please enter a valid email address', 'error');
            return;
        }

        if (contactNumber.length < 10 || contactNumber.length > 15) {
            showSnackbar('Contact number must be 10-15 digits', 'error');
            return;
        }
        
        if (password.length < 8) {
            showSnackbar('Password must be at least 8 characters', 'error');
            return;
        }
        
        if (password !== confirmPassword) {
            showSnackbar('Passwords do not match', 'error');
            return;
        }
        
        showSnackbar('Account created successfully!', 'success', 3000);
        
        setTimeout(() => {
            form.submit();
        }, 1000);
    });
    
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});