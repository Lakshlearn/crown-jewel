document.getElementById('contactForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const status = document.getElementById('form-status');

    const payload = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        orderNumber: document.getElementById('order').value,
        message: document.getElementById('message').value
    };

    try {
        const response = await fetch(
            'https://api.crownjewel.in/contact',
            {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            }
        );

        const result = await response.json();

        if (response.ok) {
            status.innerHTML =
                '<div class="form-status success">Thank you! Your message has been sent successfully.</div>';

            document.getElementById('contactForm').reset();
        } else {
            status.innerHTML =
                `<div class="form-status error">${result.message || 'Something went wrong.'}</div>`;
        }
    } catch (error) {
        status.innerHTML =
            '<div class="form-status error">Unable to connect to the server.</div>';
    }
});