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
                CNC Carving Panels
            </h1>

            <p>
                Precision-crafted decorative panels delivering intricate designs with lasting durability.
            </p>

        </div>

    </section>


    <!-- Gallery Section -->
    <section class="gallery-section">

        <div class="category-grid">

            <?php
            require '../../includes/constants.php';
            foreach (CNC_CARVING_PANELS as $image):
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