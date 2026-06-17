<?php
$contact_send_status = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);

    if ($name === '' || $email === false || $message === '') {
        $contact_send_status = '<div class="form-status error">Please enter your name, a valid email, and your message.</div>';
    } else {
        $to = 'mail@crownjewel.in';
        $subject = 'New SignUp Submission';
        $body = "New User has Signed Up. Here is their Email: $email\n";
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

<!-- ========================= -->
<!--       Newsletter Footer   -->
<!-- ========================= -->
<section class="newsletter-footer">

    <div class="brand-logo">
        <h2>
            CROWN JEWELS
        </h2>
    </div>

    <div class="newsletter-box">
        <div class="offer-text">
            SIGN UP TO GET 10% OFF YOUR FIRST ORDER
        </div>

        <form class="email-box" action="https://formsubmit.co/vivekdahiya312@gmail.com" method="POST">
            <input type="hidden" name="_next" value="https://crownjewel.in/">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">&#8594;</button>
        </form>
    </div>

    <div class="footer-links">
        <a href="/crown-jewel/pages/categories/accessories.php">Accessories</a>
        <a href="/crown-jewel/pages/categories/articles-precious-stones.php">Articles in Precious Stones</a>
        <a href="/crown-jewel/pages/categories/cnc-carving-panels.php">CNC Carving Panels</a>
        <a href="/crown-jewel/pages/categories/furniture-marble.php">Furniture in Marble</a>
        <a href="/crown-jewel/pages/categories/inlay.php">Inlays</a>
        <a href="/crown-jewel/pages/categories/italian-glass.php">Italian Glass</a>
        <a href="/crown-jewel/pages/categories/semi-precious-slabs.php">Semi Precious Slabs</a>
        <a href="/crown-jewel/pages/categories/metals-precious-stone.php">Metals With Precious Stone</a>
        <a href="/crown-jewel/pages/categories/waterjet-floorings.php">Waterjet Floorings</a>
    </div>

</section>
</main>




<!-- ============ -->
<!--     Footer   -->
<!-- ============ -->
<footer class="site-footer">

    <div class="footer-left">
        © 2026 Crown Jewel. All rights reserved.
    </div>


    <div class="footer-right">
        <a href="#">Terms & conditions</a>
        <a href="#">Privacy policy</a>
    </div>

</footer>