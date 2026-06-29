document.getElementById('newsletterForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const email = document.getElementById('email').value;

    try {
        const response = await fetch('http://localhost:8080/signup', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email
            })
        });

        const result = await response.json();

        if (result.success) {
            showToast('success', 'Thank you for signing up!');
            document.getElementById('newsletterForm').reset();
        } else {
            showToast('error', result.message || 'Something went wrong.');
        }
    } catch (error) {
        console.error(error);
        showToast('error', 'Unable to connect to server.');
    }
});