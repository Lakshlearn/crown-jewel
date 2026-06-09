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
                Semi-Precious Slabs
            </h1>

            <p>
                Unique semi-precious stone slabs showcasing natural patterns and vibrant beauty.
            </p>

        </div>

    </section>


    <!-- Gallery Section -->
    <section class="gallery-section">

        <div class="category-grid">

            <?php
            require '../../includes/constants.php';
            foreach (SEMI_PRECIOUS_SLABS as $image):
                ?>
                <div class="gallery-item">
                    <img src="../../<?php echo $image; ?>" alt="Gallery Image">
                </div>
            <?php endforeach; ?>

        </div>

    </section>

    <?php include '../../includes/footer.php'; ?>

</body>

</html>