<!-- Popup Overlay -->
<div id="waterjetPopup" class="wj-popup-overlay">

    <div class="wj-popup-container">

        <button class="wj-close-btn" onclick="closeWaterjetPopup()">
            &times;
        </button>

        <div class="wj-image-section">
            <img
                src="images/waterjet-flooring.jpg"
                alt="Water Jet Flooring"
            >
        </div>

        <div class="wj-form-section">

            <span class="wj-badge">
                Premium Water Jet Flooring
            </span>

            <h2>Get a Free Design Consultation</h2>

            <p>
                Share your details and our flooring specialist will
                contact you shortly.
            </p>

            <form id="waterjetLeadForm" action="save-lead.php" method="POST">

                <input
                    type="text"
                    name="name"
                    placeholder="Your Name"
                    required
                >

                <input
                    type="tel"
                    name="phone"
                    placeholder="Phone Number"
                    required
                >

                <button type="submit">
                    Get Free Quote
                </button>

            </form>

        </div>

    </div>

</div>