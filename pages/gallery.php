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

$galleryImages = [
    'image1.png',
];

foreach($galleryImages as $image):
?>

<div class="gallery-item reveal">
    <img src="../images/gallery/<?php echo $image; ?>" alt="">
</div>

<?php endforeach; ?>

        </div>

    </section>

</body>
</html>