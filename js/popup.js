function openWaterjetPopup() {
    document.getElementById("waterjetPopup").style.display = "flex";
}

function closeWaterjetPopup() {
    document.getElementById("waterjetPopup").style.display = "none";
}

window.onclick = function(event) {

    const popup = document.getElementById("waterjetPopup");

    if (event.target === popup) {
        closeWaterjetPopup();
    }
};

document
    .getElementById('waterjetLeadForm')
    .addEventListener('submit', async function (e) {
        e.preventDefault();

        const status = document.getElementById('waterjet-status');

        const payload = {
            name: document.getElementById('leadName').value,
            phone: document.getElementById('leadPhone').value,
            source: 'Waterjet Flooring Popup'
        };

        try {
            const response = await fetch(
                'https://api.crownjewel.in/leads/waterjet',
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
                    '<div class="form-status success">Thank you! Our specialist will contact you shortly.</div>';

                document.getElementById('waterjetLeadForm').reset();

                setTimeout(() => {
                    closeWaterjetPopup();
                }, 2000);
            } else {
                status.innerHTML =
                    `<div class="form-status error">${result.message || 'Something went wrong.'}</div>`;
            }
        } catch (error) {
            status.innerHTML =
                '<div class="form-status error">Unable to connect to the server.</div>';
        }
    });