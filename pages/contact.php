<?php
$contact_send_status = '';
$name = '';
$email = '';
$phone = '';
$orderNumber = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone = trim($_POST['phone'] ?? '');
    $orderNumber = trim($_POST['order'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === false || $message === '') {
        $contact_send_status = '<div class="form-status error">Please enter your name, a valid email, and your message.</div>';
    } else {
        $to = 'mail@crownjewel.in';
        $subject = 'New contact form submission';
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nOrder Number: $orderNumber\n\nMessage:\n$message\n";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact — CROWNJEWELS</title>
    <link rel="stylesheet" href="../css/pages/contact.css">
    <link rel="icon" type="image/png" sizes="60x60" href="../images/favicon.png">
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <main>

        <!-- =================== -->
        <!--     Help Section     -->
        <!-- =================== -->
        <section class="help-section">
            <div class="help-header">
                <span class="help-label">Contact</span>
                <h2>WE’RE HERE TO HELP</h2>
            </div>

            <div class="help-grid">

                <div class="help-card">
                    <h3>Address</h3>
                    <p>18/20/1, Hasamabad Industrial Area, </p>
                    <p>District Sonipat, Haryana 131021</p>
                </div>

                <div class="help-card">
                    <h3>CUSTOMER CARE</h3>
                    <p>9667733152</p>
                    <p>mail@crownjewel.in</p>
                </div>

                <div class="help-card">
                    <h3>Find Us</h3>
                    <p><a href="https://share.google/eNgnqmv2zuvgzk4i1" target="_blank">Google Maps</a></p>
                    <p><a href="https://www.instagram.com/crownjewelindia" target="_blank">Instagram</a></p>
                </div>
            </div>

        </section>




        <!-- =================== -->
        <!--     Contact Form     -->
        <!-- =================== -->
        <div class="form-container">

            <h1>
                PLEASE COMPLETE THE FORM BELOW, AND YOUR QUERY WILL BE SENT
                DIRECTLY TO OUR CUSTOMER SUPPORT TEAM
            </h1>

            <?php echo $contact_send_status; ?>
            <form method="post" action="">
                <div class="row">
                    <div class="field">
                        <label for="name">Your name</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"
                            required>
                    </div>

                    <div class="field">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"
                            required>
                    </div>
                </div>

                <div class="row">
                    <div class="field">
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                    </div>

                    <div class="field">
                        <label for="order">Order number</label>
                        <input type="text" id="order" name="order"
                            value="<?php echo htmlspecialchars($orderNumber); ?>">
                    </div>
                </div>

                <div class="field full-width">
                    <label for="message">Your message</label>
                    <textarea id="message" name="message" rows="8"
                        required><?php echo htmlspecialchars($message); ?></textarea>
                </div>

                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>

        </div>

        <?php include '../includes/footer.php'; ?>

        <script src="../js/script.js"></script>
</body>

</html>