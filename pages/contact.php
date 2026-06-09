<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact — CROWNJEWELS</title>
    <link rel="stylesheet" href="../css/pages/contact.css">
</head>

<body>
    <?php include '/../includes/header.php'; ?>
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

            <form>
                <div class="row">
                    <div class="field">
                        <label>Your name</label>
                        <input type="text">
                    </div>

                    <div class="field">
                        <label>Email address</label>
                        <input type="email">
                    </div>
                </div>

                <div class="row">
                    <div class="field">
                        <label>Phone number</label>
                        <input type="tel">
                    </div>

                    <div class="field">
                        <label>Order number</label>
                        <input type="text">
                    </div>
                </div>

                <div class="field full-width">
                    <label>Your message</label>
                    <textarea rows="8"></textarea>
                </div>

                <button type="submit">SUBMIT</button>
            </form>

        </div>

        <?php include '../includes/footer.php'; ?>

</body>

</html>