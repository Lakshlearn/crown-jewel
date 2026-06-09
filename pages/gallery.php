<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <link rel="stylesheet" href="../css/pages/gallery.css">
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <!-- Hero Section -->
    <section class="gallery-hero">

        <div class="hero-content">

            <div class="hero-subtitle">
                DETAILED CRAFTSMANSHIP
            </div>

            <h1>
                GALLERY
            </h1>

            <p>
                A curated showcase of precision tailoring, premium fabrics,
                and timeless craftsmanship.
            </p>

        </div>

    </section>


    <!-- Gallery Section -->
    <section class="gallery-section">

        <div class="gallery-grid">

            <?php
            require '../includes/constants.php';

            foreach (SEMI_PRECIOUS_STONES as $image):
                ?>
                <div class="gallery-item">
                    <img src="../<?php echo $image; ?>" alt="Gallery Image">
                </div>
            <?php endforeach; ?>

        </div>

    </section>

    <?php include '../includes/footer.php'; ?>
</body>

</html>