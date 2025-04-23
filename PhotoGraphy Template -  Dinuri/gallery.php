<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo "Malcolm's Photography"; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="simplelightbox-master/dist/simple-lightbox.css">
    </head>
    <body>
        
        <!-- header -->
        <header class="header">
            <div class="nav-section">
                <div class="brand-and-navBtn">
                    <span class="brand-name">
                        <?php echo "Malcolm's Lab"; ?>
                    </span>
                    <span class="navBtn flex">
                        <i class="fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class="top-nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php" class="active">Gallery</a></li>
                        <li><a href="prices.php">Price</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </header>

        <!-- main -->
        <section class="section-three">
            <div class="container">
                <div class="gallery">
                    <?php
                        // Define an array of gallery images and iterate through it
                        $galleryImages = [
                            "gallery1.jpg", "gallery2.jpg", "gallery3.jpg",
                            "gallery4.jpg", "gallery5.jpg", "gallery6.jpg",
                            "gallery7.jpg", "gallery8.jpg", "gallery9.jpg"
                        ];

                        foreach ($galleryImages as $image) {
                            echo "
                            <a href='images/$image'>
                                <div class='single-img'>
                                    <img src='images/$image' alt='gallery image'>
                                    <div class='single-img-content'>
                                        <h3>Beautiful Work</h3>
                                    </div>
                                </div>
                            </a>";
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- end of main -->

        <!-- footer -->
        <footer class="footer">
            <div class="footer-container container">
                <div>
                    <h2><?php echo "Malcolm Lismore"; ?></h2>
                    <p>Contact Malcolm for personalized photography services.</p>
                </div>
                <div>
                    <h3><?php echo "Free Subscription!"; ?></h3>
                    <p>Dive into our curated galleries and experience the world through Malcolm's lens. Each category, from landscapes to wildlife, showcases the finest moments captured in stunning detail.</p>

                    <div class="subs">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" placeholder="Email Address">
                        <button type="submit">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <p>&copy; <?php echo date("Y"); ?> Copyright Dinuri</p>
        </footer>
        <!-- end of footer -->
        
        <!-- LIGHTBOX -->
        <script src="simplelightbox-master/dist/simple-lightbox.js"></script>
        <script src="script.js"></script>
    </body>
</html>
