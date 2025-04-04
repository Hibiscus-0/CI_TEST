class Snackbar {
    constructor() {
        this.snackbar = document.createElement('div');
        this.snackbar.className = 'snackbar';
        document.body.appendChild(this.snackbar);
        this.isShowing = false;
    }

    show(message, type = 'error', duration = 3000) {
        if (this.isShowing) {
            this.hide();
            setTimeout(() => this.show(message, type, duration), 300);
            return;
        }

        this.snackbar.textContent = message;
        this.snackbar.className = `snackbar snackbar-${type}`;
        this.snackbar.style.display = 'block';
        
        void this.snackbar.offsetWidth;
        
        this.snackbar.classList.add('show');
        this.isShowing = true;

        this.timeout = setTimeout(() => {
            this.hide();
        }, duration);
    }

    hide() {
        if (this.timeout) clearTimeout(this.timeout);
        
        this.snackbar.classList.remove('show');
        
        setTimeout(() => {
            this.snackbar.style.display = 'none';
            this.isShowing = false;
        }, 3000);
    }
}
const snackbar = new Snackbar();

window.showSnackbar = (message, type, duration) => {
    snackbar.show(message, type, duration);
};