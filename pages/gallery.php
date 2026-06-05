<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <link rel="stylesheet" href="../css/components/gallery.css">
</head>

<body>

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

            // Use a root-relative path so the image resolves correctly
            // regardless of how this page is served/embedded.
            $galleryImages = [
                '../images/gallery/red_carnelian.png',
                '../images/gallery/black_rutile.png',
                '../images/gallery/green_carnelian.png',
                '../images/gallery/hermatite.png',
                '../images/gallery/rainbow_flourite.png',
                '../images/gallery/red_carnelian.png',
                '../images/gallery/sodalite.png',
                '../images/gallery/tiger_eye_red.png',
            ];

            foreach ($galleryImages as $image):
            ?>
                <div class="gallery-item reveal">
                    <img src="<?php echo $image; ?>" alt="Gallery Image">
                </div>
            <?php endforeach; ?>

        </div>

    </section>

</body>

</html>