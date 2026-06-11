<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="../../css/pages/gallery.css">
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
                Italian Glass
            </h1>

            <p>
                Exquisite Italian glass creations blending artistry, elegance, and enduring appeal.
            </p>

        </div>

    </section>


    <!-- Gallery Section -->
    <section class="gallery-section">

        <div class="category-grid">

            <?php
            require '../../includes/constants.php';
            foreach (ITALIAN_GLASS as $image):
                ?>
                <div class="gallery-item">
                    <img src="../../<?php echo $image; ?>" alt="Gallery Image">
                </div>
            <?php endforeach; ?>

        </div>

    </section>

    <?php include '../../includes/footer.php'; ?>

    <script src="../../js/script.js"></script>
</body>

</html>