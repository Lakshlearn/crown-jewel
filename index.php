<?php require_once __DIR__ . '/includes/constants.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown Web</title>
    <link rel="icon" type="image/png" sizes="60x60" href="images/favicon.png">
    <link rel="stylesheet" href='css/style.css'>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/popup.php'; ?>

    <main>

        <section class="hero-section">

            <!-- TOP CONTENT -->
            <div class="hero-content">

                <span class="mini-text">DETAILED CRAFTSMANSHIP</span>

                <h1>
                    Premium Semi-Precious Stones, <br>Crafted to Perfection
                </h1>

                <a href="#" onclick="openWaterjetPopup(); return false;" class="shrink-underline">
                    BOOK AN APPOINTMENT
                </a>

            </div>



            <!-- INFINITE VIDEO CAROUSEL -->
            <div class="carousel-wrapper">

                <div class="carousel-track">

                    <!-- SMALL LEFT -->
                    <div class="media-card side-card">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov2.mp4" type="video/mp4">
                        </video>
                    </div>

                    <!-- LEFT ARCH "C:\xampp\htdocs\crownweb\videos\frontmov3.MOV" -->
                    <div class="media-card arch-top">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov3.mov" type="video/mp4">
                        </video>
                    </div>

                    <!-- CENTER CIRCLE -->
                    <div class="media-card circle-card">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov4.mov" type="video/mp4">
                        </video>
                    </div>

                    <!-- RIGHT ARCH -->
                    <div class="media-card arch-bottom">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov5.mov" type="video/mp4">
                        </video>
                    </div>

                    <!-- SMALL RIGHT -->
                    <div class="media-card side-card">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmovie1.mov" type="video/mp4">
                        </video>
                    </div>





                    <!-- DUPLICATE FOR INFINITE LOOP -->

                    <div class="media-card side-card">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov2.mp4" type="video/mp4">
                        </video>
                    </div>

                    <!-- LEFT ARCH "C:\xampp\htdocs\crownweb\videos\frontmov3.MOV" -->
                    <div class="media-card arch-top">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov3.mov" type="video/mp4">
                        </video>
                    </div>

                    <!-- CENTER CIRCLE -->
                    <div class="media-card circle-card">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov4.mov" type="video/mp4">
                        </video>
                    </div>

                    <!-- RIGHT ARCH -->
                    <div class="media-card arch-bottom">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmov5.mov" type="video/mp4">
                        </video>
                    </div>

                    <!-- SMALL RIGHT -->
                    <div class="media-card side-card">
                        <video autoplay muted loop playsinline>
                            <source src="videos/frontmovie1.mov" type="video/mp4">
                        </video>
                    </div>


                </div>

            </div>

        </section>


        <!-- section 2 -->

        <section class="about-section">

            <div class="about-container">


                <!-- LEFT CONTENT -->
                <div class="about-content-top">

                    <h2>
                        EXCEPTIONAL CRAFT <br>
                        TIMELESS STONE
                    </h2>

                    <div class="about-content-text">
                        <p>
                            Backed by deep industry experience, we transform semi-precious stones into statement pieces
                            that
                            define luxury. From concept to execution, our process is rooted in collaboration, attention
                            to
                            detail, and a passion for elevating everyday spaces into extraordinary environments.
                        </p>

                        <div class="about-links">
                            <a class="shrink-underline" href="/crownweb/pages/about.php">
                                OUR STORY
                            </a>
                            <a class="shrink-underline" href="/crownweb/pages/gallery.php">
                                VIEW ALL STONES
                            </a>
                        </div>
                    </div>

                </div>

                <!-- RIGHT IMAGES -->
                <div class="about-images">

                    <!-- BIG IMAGE -->
                    <div class="big-image big-img-top zoom-scroll">
                    </div>

                    <!-- SMALL RIGHT -->
                    <div class="small-image sm-img-top zoom-scroll">
                        <video autoplay muted loop playsinline>
                            <source src="videos/MOV1.mov" type="video/mp4">
                        </video>
                    </div>

                </div>

            </div>

        </section>


        <!-- section 3 -->
        <section class="category-section">

            <!-- HEADING -->
            <div class="section-top">
                <span>PERSONAL FIT FOR ALL</span>
            </div>

            <!-- CATEGORY GRID -->
            <div class="category-grid">
                <?php foreach (CATEGORIES_CARDS as $index => $category): ?>
                    <div class="category-card">
                        <div class="fit fit-img-<?php echo $index + 1; ?>">
                        </div>
                        <a href="<?php echo $category['link']; ?>" class="category-link text-md shrink-underline">
                            <?php echo $category['title']; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- section 4 -->

        <section class="process-section">

            <!-- TOP -->
            <div class="process-top">

                <h2>THE PROCESS</h2>

                <div class="process-icon">
                    <img src="images/process.png" alt="">
                </div>

            </div>

            <!-- PROCESS LIST -->
            <div class="process-list">
                <?php foreach (PROCESS_STEPS as $index => $step): ?>
                    <div class="process-item">

                        <div class="process-number">
                            <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                        </div>

                        <div class="process-title">
                            <?php echo $step['title']; ?>
                        </div>

                        <div class="process-description">
                            <?php echo $step['description']; ?>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>




            <!-- BUTTON -->
            <div class="process-button">

                <a href="#" onclick="openWaterjetPopup(); return false;" class="hero-btn">
                    BOOK AN APPOINTMENT
                </a>

            </div>

        </section>

        <!-- section 5 -->


        <!-- ════ PART 1: PRODUCTS ════ -->
        <section class="products-section">

            <!-- Hero model photo -->
            <div class="products-hero">
                <!-- Image -->
                <div class="prod-img-1">
                </div>
                <div class="ph">
                    <svg class="ph-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="7" r="4" />
                        <path d="M5.5 20a6.5 6.5 0 0 1 13 0" />
                    </svg>
                </div>

            </div>

            <!-- Product card 1 -->
            <div class="product-card">
                <div class="product-card__img">
                    <!-- Image  -->
                    <div class="prod-img-2">
                    </div>
                    <div class="ph">
                        <svg class="ph-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 2l-4 5v15h16V7l-4-5" />
                            <path d="M9 2s1 3 3 3 3-3 3-3" />
                        </svg>
                    </div>
                </div>
                <div class="product-card__info">

                    <div class="product-card__dots">
                        <div class="product-card__dot active"></div>
                        <div class="product-card__dot"></div>
                    </div>
                </div>
            </div>

            <!-- Product card 2 -->
            <div class="product-card">
                <div class="product-card__img">
                    <!-- Image  -->
                    <div class="prod-img-3">
                    </div>
                    <div class="ph">
                        <svg class="ph-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 2l-4 5v15h16V7l-4-5" />
                            <path d="M9 2v4" />
                            <path d="M15 2v4" />
                        </svg>
                    </div>
                </div>
                <div class="product-card__info">

                    <div class="product-card__dots">
                        <div class="product-card__dot"></div>
                        <div class="product-card__dot active"></div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ════ PART 2: TESTIMONIAL + BLOG ════ -->
        <section class="lower-section">

            <!-- Testimonial CAROUSEL -->
            <div class="testimonial">
                <div class="testimonial__track" id="testimonialTrack">

                    <?php foreach (TESTIMONIALS as $index => $testimonial): ?>
                        <div class="testimonial__slide <?php echo $index === 0 ? 'active' : ''; ?>">
                            <blockquote class="testimonial__quote">
                                "<?php echo $testimonial['quote']; ?>"
                            </blockquote>
                            <p class="testimonial__author"><?php echo $testimonial['author']; ?></p>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="testimonial__controls">
                    <button class="testimonial__btn" id="prevBtn" aria-label="Previous review">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="15 18 9 12 15 6" />
                        </svg>
                    </button>
                    <button class="testimonial__btn" id="nextBtn" aria-label="Next review">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Center model -->
            <div class="lower-model">
                <!-- Image  -->
                <div class="prod-img-4">
                </div>
                <div class="ph">
                    <svg class="ph-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="7" r="4" />
                        <path d="M5.5 20a6.5 6.5 0 0 1 13 0" />
                    </svg>
                </div>
            </div>

            <!-- Blog panel -->
            <div class="blog-panel">
                <h3 class="blog-panel__heading">
                    Discover exquisite semi-precious stone creations crafted for exceptional interiors.
                </h3>

            </div>

        </section>

        <!-- Section 6 -->
        <section class="about-section">

            <div class="about-container">


                <!-- Left IMAGES -->
                <div class="about-images">

                    <!-- BIG IMAGE -->
                    <div class="big-image big-img-bottom zoom-scroll">
                    </div>


                    <!-- SMALL RIGHT -->
                    <div class="small-image sm-img-bottom zoom-scroll">
                    </div>

                </div>


                <!-- Right CONTENT -->
                <div class="about-content">

                    <h2>
                        WHERE NATURE BECOMES <br>
                        LUXURY
                    </h2>

                    <div class="about-content-text">
                        <p>
                            Enter a refined sanctuary dedicated to the art of semi-precious stones. Experience
                            textures, colors, and formations shaped over centuries, thoughtfully curated for modern
                            living. From statement surfaces to bespoke creations, we help you design pieces that
                            embody sophistication, depth, and your unique vision.
                        </p>

                        <div class="process-button">

                            <a href="#" onclick="openWaterjetPopup(); return false;" class="shrink-underline">
                                BOOK AN APPOINTMENT
                            </a>

                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- ════ PART 6: instagram  ════ -->
        <section class="ig-section" id="igSection">

            <div class="ig-bg-circle"></div>

            <div class="ig-container">

                <div class="ig-heading">
                    <div class="ig-heading-content">
                        <span class="ig-subtitle">INSTAGRAM</span>

                        <h2>
                            JOIN THE ADVENTURE <br>
                            @CROWNJEWELINDIA
                        </h2>

                        <a href="https://instagram.com/crownjewelindia" target="_blank" class="shrink-underline">
                            FOLLOW US
                        </a>
                    </div>
                </div>

                <div class="ig-grid">

                    <?php foreach (INSTAGRAM_POSTS as $post): ?>
                        <a href="<?php echo $post['link']; ?>" class="ig-card" target="_blank">
                            <img src="<?php echo $post['image']; ?>" alt="Instagram Post">
                        </a>
                    <?php endforeach; ?>

                </div>

            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>

    <script src="./js/script.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/popup.js"></script>
</body>

</html>