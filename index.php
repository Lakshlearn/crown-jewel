<html>
<head>
    <title>Crown Web</title>
    <link rel="stylesheet" href='css/style.css'> 
     <?php include 'includes/header.php'; ?>   
</head>
<body>
    
    <section class="hero-section">

    <!-- TOP CONTENT -->
    <div class="hero-content">

        <span class="mini-text">DETAILED CRAFTSMANSHIP</span>

        <h1>
            THE CUSTOM CLOTHING <br>
            EXPERIENCE YOU DESERVE
        </h1>

        <a href="#" class="hero-btn">
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
                    <source src="videos/frontmov3.MOV" type="video/mp4">
                </video>
            </div>

            <!-- CENTER CIRCLE -->
            <div class="media-card circle-card">
                <video autoplay muted loop playsinline>
                    <source src="videos/frontmov4.MOV" type="video/mp4">
                </video>
            </div>

            <!-- RIGHT ARCH -->
            <div class="media-card arch-bottom">
                <video autoplay muted loop playsinline>
                    <source src="videos/frontmov5.MOV" type="video/mp4">
                </video>
            </div>

            <!-- SMALL RIGHT -->
            <div class="media-card side-card">
                <video autoplay muted loop playsinline>
                    <source src="videos/frontmovie1.MOV" type="video/mp4">
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
                    <source src="videos/frontmov3.MOV" type="video/mp4">
                </video>
            </div>

            <!-- CENTER CIRCLE -->
            <div class="media-card circle-card">
                <video autoplay muted loop playsinline>
                    <source src="videos/frontmov4.MOV" type="video/mp4">
                </video>
            </div>

            <!-- RIGHT ARCH -->
            <div class="media-card arch-bottom">
                <video autoplay muted loop playsinline>
                    <source src="videos/frontmov5.MOV" type="video/mp4">
                </video>
            </div>

            <!-- SMALL RIGHT -->
            <div class="media-card side-card">
                <video autoplay muted loop playsinline>
                    <source src="videos/frontmovie1.MOV" type="video/mp4">
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
                    Backed by deep industry experience, we transform semi-precious stones into statement pieces that 
                    define luxury. From concept to execution, our process is rooted in collaboration, attention to 
                    detail, and a passion for elevating everyday spaces into extraordinary environments.
                </p>
                
                <div class="about-links">
                    <a class="shrink-underline" href="#">
                        OUR STORY
                    </a>
                    <a class="shrink-underline" href="#">
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
                    <source src="videos/MOV1.MOV" type="video/mp4" >
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

        <!-- CARD 1 -->
        <div class="category-card">

            <div class="fit-img-1">
            </div>

            <a href="#" class="category-link text-md shrink-underline">
                SEMI PRECIOUS STONES
            </a>

        </div>





        <!-- CARD 2 -->
        <div class="category-card">

            <div class="fit-img-2">
            </div>

            <a href="#" class="category-link text-md shrink-underline">
                BESPOKE WOMEN'S SUITS
            </a>

        </div>





        <!-- CARD 3 -->
        <div class="category-card tall-card">

            <div class="fit-img-3">
            </div>
            <a href="#" class="category-link text-md shrink-underline">
                BESPOKE COATS
            </a>

        </div>





        <!-- CARD 4 -->
        <div class="category-card">

            <div class="fit-img-4">
            </div>

            <a href="#" class="category-link text-md shrink-underline">
                BESPOKE BOW TIES
            </a>

        </div>

    </div>

</section>

<!-- section 4 -->   

<section class="process-section">

    <!-- TOP -->
    <div class="process-top">

        <h2>THE PROCESS</h2>

        <div class="process-icon">
            <img src="images/process-icon.png" alt="">
        </div>

    </div>

        <!-- PROCESS LIST -->
    <?php
    $processSteps = [
        [
            'title' => 'UNDERSTANDING & REQUIREMENT MAPPING',
            'description' => 'We begin by understanding your vision, space, and functional needs to define a personalized design direction.'
        ],
        [
            'title' => 'SITE MEASUREMENT',
            'description' => 'Precise on-site measurements ensure accuracy and seamless integration with your space.'
        ],
        [
            'title' => 'MATERIAL, COLOUR & FINISH SELECTION',
            'description' => 'Curated mood boards guide the selection of colours, textures, and finishes to achieve depth and luxury.'
        ],
        [
            'title' => '3D DESIGN & APPROVAL',
            'description' => 'We present detailed drawings and 3D visualizations for your approval before moving ahead.'
        ],
        [
            'title' => 'PRODUCTION & CRAFTING',
            'description' => 'Expert craftsmanship and advanced techniques bring your design to life with exceptional quality.'
        ],
        [
            'title' => 'QUALITY CHECK & PRE-INSTALLATION',
            'description' => 'Each element undergoes strict quality checks to ensure perfection before dispatch.'
        ],
        [
            'title' => 'INSTALLATION & FINAL STYLING',
            'description' => 'We execute precise installation and finishing touches to deliver a flawless space.'
        ]
    ];
    ?>
    <div class="process-list">
        <?php foreach ($processSteps as $index => $step): ?>
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

        <a href="#" class="shrink-underline">
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
        <circle cx="12" cy="7" r="4"/><path d="M5.5 20a6.5 6.5 0 0 1 13 0"/>
      </svg>
    </div>
    <span class="products-hero__url" style="position:absolute;bottom:14px;left:16px;">https://innovecouture.vamtam.com/shop/sale/</span>
  </div>
 
  <!-- Product card 1 -->
  <div class="product-card">
    <div class="product-card__img">
        <!-- Image  -->
     <div class="prod-img-2">
      </div>
      <div class="ph">
        <svg class="ph-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 2l-4 5v15h16V7l-4-5"/><path d="M9 2s1 3 3 3 3-3 3-3"/>
        </svg>
      </div>
    </div>
    <div class="product-card__info">
      <p class="product-card__name text-md shrink-underline">
        Regular Fit Cotton Blend Shirt
    </p>
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
          <path d="M6 2l-4 5v15h16V7l-4-5"/><path d="M9 2v4"/><path d="M15 2v4"/>
        </svg>
      </div>
    </div>
    <div class="product-card__info">
      <p class="product-card__name text-md shrink-underline">Suit blazer in stretch wool</p>
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
 
      <div class="testimonial__slide active">
        <blockquote class="testimonial__quote">
          "Loved my first suit so much, I decided to go and get a second one. Typically, when expectations are so high because of your first experience. Keep up the excellent work, gents!"
        </blockquote>
        <p class="testimonial__author">Michael Brilla</p>
      </div>
 
      <div class="testimonial__slide">
        <blockquote class="testimonial__quote">
          "My dream custom suit came through. I can't thank you enough for my custom-made suit's excellent customer service and fantastic fit. Thank you."
        </blockquote>
        <p class="testimonial__author">John Carlos</p>
      </div>
 
      <div class="testimonial__slide">
        <blockquote class="testimonial__quote">
          "Absolutely impeccable craftsmanship. The attention to detail in every stitch is remarkable. This is what bespoke truly means."
        </blockquote>
        <p class="testimonial__author">James Hartford</p>
      </div>
 
    </div>
 
    <div class="testimonial__controls">
      <button class="testimonial__btn" id="prevBtn" aria-label="Previous review">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <polyline points="15 18 9 12 15 6"/>
        </svg>
      </button>
      <button class="testimonial__btn" id="nextBtn" aria-label="Next review">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <polyline points="9 18 15 12 9 6"/>
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
        <circle cx="12" cy="7" r="4"/><path d="M5.5 20a6.5 6.5 0 0 1 13 0"/>
      </svg>
    </div>
  </div>
 
  <!-- Blog panel -->
  <div class="blog-panel">
    <h3 class="blog-panel__heading">
      The Modern Gentleman's Guide to Choosing and Caring for the Perfectly Fitted Suit
    </h3>
    <a class="blog-panel__link shrink-underline" href="#">Read more</a>
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
                
                <div class="about-links-bottom">
                    <a class="shrink-underline" href="#">
                        EXPLORE OUR LOCATIONS
                    </a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- ════ PART 6: instagram  ════ -->

<?php
/**
 * Instagram Section
 * Replace the image URLs dynamically from Instagram API if needed.
 */

$instagramPosts = [
    [
        'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1200&auto=format&fit=crop',
        'link'  => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=1200&auto=format&fit=crop',
        'link'  => '#'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=1200&auto=format&fit=crop',
        'link'  => '#'
    ]
];
?>

<section class="ig-section" id="igSection">

    <div class="ig-bg-circle"></div>

    <div class="ig-container">

        <div class="ig-heading">
            <div class="ig-heading-content">
                <span class="ig-subtitle">INSTAGRAM</span>
                
                <h2>
                    JOIN THE ADVENTURE <br>
                    @BESPOKEINNOVE
                </h2>
                
                <a href="https://instagram.com/bespokeinnove" target="_blank" class="shrink-underline">
                    FOLLOW US
                </a>
            </div>
        </div>

        <div class="ig-grid">

            <?php foreach($instagramPosts as $post): ?>
                <a href="<?php echo $post['link']; ?>" class="ig-card" target="_blank">
                    <img src="<?php echo $post['image']; ?>" alt="Instagram Post">
                </a>
            <?php endforeach; ?>

        </div>

    </div>
</section>

    <?php include 'includes/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>