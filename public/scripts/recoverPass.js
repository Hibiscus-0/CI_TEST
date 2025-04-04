function nextStep(step) {
    document.querySelectorAll('.form-container').forEach(container => {
        container.style.display = 'none';
    });

    let currentStep = document.querySelector(`.step-${step}`);
    if (currentStep) {
        currentStep.style.display = 'block';
    }

    document.querySelectorAll('.step').forEach((el, index) => {
        el.classList.toggle('active', index < step);
    });
}

function prevStep(step) {
    nextStep(step);
}

const recoverButton = document.querySelector('.step-3 .btn.primary');

recoverButton.addEventListener('click', function() {
    const modalOverlay = document.createElement('div');
    modalOverlay.className = 'modal-overlay';
    
    const modalContent = document.createElement('div');
    modalContent.className = 'modal-content';
    
    modalContent.innerHTML = `
        <i class="bi bi-check-circle-fill success-icon"></i>
        <h2>Password Recovered</h2>
        <p>Congratulations, you have successfully recovered your password!</p>
        <button class="btn primary login-btn">Go to Login</button>
    `;
    
    modalOverlay.appendChild(modalContent);
    document.body.appendChild(modalOverlay);
    
    void modalOverlay.offsetWidth;
    
    modalOverlay.classList.add('visible');
    modalContent.classList.add('animate-in');
    
    modalContent.querySelector('.login-btn').addEventListener('click', function() {
        window.location.href = 'Views/layout/login.php'; 
    });
});