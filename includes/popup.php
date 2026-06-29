<?php
$contact_send_status = '';
$name = '';
$phone = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    if ($name === '' || $email === false || $message === '') {
        $contact_send_status = '<div class="form-status error">Please enter your name, a valid email, and your message.</div>';
    } else {
        $to = 'mail@crownjewel.in';
        $subject = 'New contact form submission';
        $body = "Here is the name of the Appointment:-\nName: $name\nPhone: $phone\n";
        $headers = "From: Crown Jewels Website <no-reply@crownjewel.in>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $contact_send_status = '<div class="form-status success">Thank you! Your message has been sent successfully.</div>';
            $name = $email = $phone = $orderNumber = $message = '';
        } else {
            $contact_send_status = '<div class="form-status error">Sorry, we could not send your message right now. Please try again later.</div>';
        }
    }
}
?>



<!-- Popup Overlay -->
<div id="waterjetPopup" class="wj-popup-overlay">

    <div class="wj-popup-container">

        <button class="wj-close-btn" onclick="closeWaterjetPopup()">
            <i class="bi bi-x"></i>
        </button>

        <div class="wj-image-section">
            <div class="water-jet-img">
            </div>
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

            <form id="waterjetLeadForm">
                <input
                    type="text"
                    id="leadName"
                    name="name"
                    placeholder="Your Name"
                    required>

                <input
                    type="tel"
                    id="leadPhone"
                    name="phone"
                    placeholder="Phone Number"
                    required>

                <button type="submit">
                    Get Free Quote
                </button>

                <div id="waterjet-status"></div>
            </form>
        </div>

    </div>

</div>