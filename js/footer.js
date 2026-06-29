
document.getElementById('newsletterForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const status = document.getElementById('newsletter-status');

    try {
        const response = await fetch('https://api.crownjewel.in/newsletter/signup', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: email
            })
        });

        const result = await response.json();

        if (response.ok) {
            status.innerHTML =
                '<div class="form-status success">Thank you for signing up!</div>';

            document.getElementById('newsletterForm').reset();
        } else {
            status.innerHTML =
                `<div class="form-status error">${result.message || 'Something went wrong.'}</div>`;
        }
    } catch (error) {
        status.innerHTML =
            '<div class="form-status error">Unable to connect to server.</div>';
    }
});