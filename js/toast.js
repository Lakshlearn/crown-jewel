document.addEventListener("DOMContentLoaded", () => {
    const toast = document.getElementById("toast");

    if (!toast) return;


    function showToast(type, message, duration = 3500) {
        let container = document.querySelector('.toast-container');

        if (!container) {
            container = document.createElement('div');
            container.className = 'toast-container';
            document.body.appendChild(container);
        }

        const toast = document.createElement('div');
        toast.className = `toast ${type}`;

        toast.innerHTML = `
        <span class="toast-message">${message}</span>
        <button class="toast-close">&times;</button>
    `;

        container.appendChild(toast);

        requestAnimationFrame(() => {
            toast.classList.add('show');
        });

        const hideToast = () => {
            toast.classList.remove('show');

            setTimeout(() => {
                toast.remove();
            }, 350);
        };

        const timer = setTimeout(hideToast, duration);

        toast.querySelector('.toast-close').addEventListener('click', () => {
            clearTimeout(timer);
            hideToast();
        });
    }
    

    const closeBtn = document.getElementById("toastClose");
    const duration = Number(toast.dataset.duration) || 3500;

    requestAnimationFrame(() => {
        toast.classList.add("show");
    });

    const hideToast = () => {
        toast.classList.remove("show");

        setTimeout(() => {
            toast.remove();
        }, 350);
    };

    const timer = setTimeout(hideToast, duration);

    closeBtn?.addEventListener("click", () => {
        clearTimeout(timer);
        hideToast();
    });
});

