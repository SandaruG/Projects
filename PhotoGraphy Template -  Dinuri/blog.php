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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="prices.php">Price</a></li>
                    <li><a href="blog.php" class="active">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <span class="search-icon">
                <i class="fas fa-search"></i>
            </span>
        </div>
    </header>

    <!-- main -->
    <section class="section-four">
        <div class="container">
            <div class="blogs">
                <div class="blog-wrapper-lg">
                    <!-- single blog post -->
                    <div class="blog">
                        <img src="images/blog1.jpg">
                        <div class="blog-content">
                            <span class="badge">Photography</span>
                            <span class="misc-info">
                                <?php echo "Published: 1 Week Ago | 25 Comments"; ?>
                            </span>
                            <h3 class="blog-title">
                                Best Photography Tips For Beginners
                            </h3>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                    <!-- end of single post -->

                    <!-- single blog post -->
                    <div class="blog">
                        <img src="images/blog2.jpg">
                        <div class="blog-content">
                            <span class="badge">Photography</span>
                            <span class="misc-info">
                                <?php echo "Published: 1 Week Ago | 25 Comments"; ?>
                            </span>
                            <h3 class="blog-title">
                                Best Photography Tips For Beginners
                            </h3>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                    <!-- end of single post -->
                </div>

                <div class="blog-wrapper-sm">
                    <!-- single blog post -->
                    <div class="blog">
                        <img src="images/blog3.jpg">
                        <div class="blog-content">
                            <span class="badge">Photography</span>
                            <span class="misc-info">
                                <?php echo "Published: 1 Week Ago | 25 Comments"; ?>
                            </span>
                            <h3 class="blog-title">
                                Best Photography Tips For Beginners
                            </h3>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                    <!-- end of single post -->

                    <!-- single blog post -->
                    <div class="blog">
                        <img src="images/blog4.jpg">
                        <div class="blog-content">
                            <span class="badge">Photography</span>
                            <span class="misc-info">
                                <?php echo "Published: 1 Week Ago | 25 Comments"; ?>
                            </span>
                            <h3 class="blog-title">
                                Best Photography Tips For Beginners
                            </h3>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                    <!-- end of single post -->
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
            </div>
            <div>
                <h3><?php echo "Free Subscription!"; ?></h3>
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