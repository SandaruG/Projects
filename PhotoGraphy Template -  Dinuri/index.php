<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo "Malcolm's Photography"; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="prices.php">Price</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>

            <div class="container about">
                <div class="about-content">
                    <div class="about-img flex">
                        <img src="images/about-img.jpg" alt="photographer img">
                    </div>
                    <h2><?php echo "I'm Malcolm Lismore"; ?></h2>
                    <h3><?php echo "Photographer"; ?></h3>
                    <blockquote>
                        "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                        <span>-Aaron Siskind</span>
                    </blockquote>
                </div>

                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        <section class="section-one">
            <div class="container">
                <div class="sec-one-left">
                    <div>
                        <h3><?php echo "Lismore's Lens"; ?></h3>
                        <p><?php echo "Capture the beauty of nature with Malcolm Lismore's lens."; ?></p>
                        <a href="#" class="btn">view all</a>
                    </div>
                </div>

                <div class="sec-one-right">
                    <div class="work-content">
                        <h3><?php echo "AMAZING TEAM WORK WITH PROFESSIONAL PHOTOGRAPHER"; ?></h3>
                        <p><?php echo "Experience wildlife photography at its finest."; ?></p>
                        <a href="#" class="btn">view all</a>
                    </div>
                    <div class="work-imgs">
                        <div class="work-img-1">
                            <!-- image here -->
                        </div>
                        <div class="work-img-2">
                            <!-- image here -->
                        </div>
                    </div>
                    <h3>"Taking an image, freezing a moment, reveals how rich reality truly is."</h3>
                </div>
            </div>
        </section>

        <section class="section-two">
            <div class="container">
                <h2><?php echo "FOLLOW ON INSTAGRAM"; ?></h2>
                <span><?php echo "@Malcolm Lismore_photographer"; ?></span>
                <div class="insta-imgs">
                    <div>
                        <img src="images/insta-1.jpg">
                        <div class="icon-overlay flex">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src="images/insta-2.jpg">
                        <div class="icon-overlay flex">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src="images/insta-3.jpg">
                        <div class="icon-overlay flex">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                    <div>
                        <img src="images/insta-4.jpg">
                        <div class="icon-overlay flex">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of main -->

        <!-- footer -->
        <footer class="footer">
            <div class="footer-container container">
                <div>
                    <h2><?php echo "Malcolm Lismore"; ?></h2>
                    <p><?php echo "Transforming moments into timeless memories."; ?></p>
                </div>
                <div>
                    <h3><?php echo "Free Subscription!"; ?></h3>
                    <p><?php echo "Discover the art of landscape photography."; ?></p>

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

        <script src="script.js"></script>
    </body>
</html>
