<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="../../css/pages/gallery.css">
    <link rel="icon" type="image/png" sizes="60x60" href="../../images/favicon.png">
</head>

<body>
    <?php include '../../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="gallery-hero">

        <div class="hero-content">

            <div class="hero-subtitle">
                DETAILED CRAFTSMANSHIP
            </div>

            <h1>
                Furniture in Marble
            </h1>

            <p>
                Elegant marble furniture combining luxury, strength, and timeless sophistication.
            </p>

        </div>

    </section>


    <!-- Gallery Section -->
    <section class="gallery-section">

        <div class="category-grid">

            <?php
            require '../../includes/constants.php';
            foreach (FURNITURE_IN_MARBLE as $image):
                ?>
                <div class="gallery-item">
                    <img src="../../<?php echo $image; ?>" alt="Gallery Image">
                </div>
            <?php endforeach; ?>

        </div>

    </section>

    <?php include '../../includes/footer.php'; ?>

    <script src="../../js/script.js"></script>
    <script src="../../js/header.js"></script>
    <script src="../../js/popup.js"></script>
</body>

</html>