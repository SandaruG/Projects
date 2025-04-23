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
                        <li><a href="prices.php" class="active">Price</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>

        <!-- main -->
        <section class="section-five">
            <div class="container">
                <div class="contact-top">
                    <h3>Prices</h3>
                    <p>At Malcolm Lismore Photography, we offer a range of service packages to suit your needs. From individual photo sessions to event coverage, our transparent pricing ensures you get the best value for high-quality photography.</p>
                </div>

                <div class="pricing-table">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h4>Basic Package</h4>
                            <p>Perfect for quick shoots</p>
                        </div>
                        <ul class="pricing-features">
                            <li>1-hour session</li>
                            <li>10 edited photos</li>
                            <li>Online gallery</li>
                        </ul>
                        <div class="price">$100</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h4>Standard Package</h4>
                            <p>Ideal for small events</p>
                        </div>
                        <ul class="pricing-features">
                            <li>2-hour session</li>
                            <li>20 edited photos</li>
                            <li>Online gallery</li>
                            <li>Print release</li>
                        </ul>
                        <div class="price">$200</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h4>Premium Package</h4>
                            <p>Best for larger events</p>
                        </div>
                        <ul class="pricing-features">
                            <li>4-hour session</li>
                            <li>50 edited photos</li>
                            <li>Online gallery</li>
                            <li>Print release</li>
                            <li>Photo album</li>
                        </ul>
                        <div class="price">$400</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h4>Custom Package</h4>
                            <p>Tailored to your specific needs</p>
                        </div>
                        <ul class="pricing-features">
                            <li>Flexible session length</li>
                            <li>Number of photos varies</li>
                            <li>Custom features</li>
                        </ul>
                        <li><a href="contact.php">Contact for pricing</a></li>
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
                    <p><?php echo "Malcolm Lismore: Your trusted name in photography."; ?></p>
                </div>
                <div>
                    <h3><?php echo "Free Subscription!"; ?></h3>
                    <p>We'd love to hear from you! Whether you have a question, need a custom quote, or want to book a session, our contact page provides all the information you need to get in touch with Malcolm Lismore Photography.</p>

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
