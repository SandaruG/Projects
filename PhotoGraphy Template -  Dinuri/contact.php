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
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php" class="active">Contact</a></li>
                    </ul>
                </nav>
                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </header>

        <!-- main -->
        <section class="section-five">
            <div class="container">
                <div class="contact-top">
                    <h3><?php echo "CONTACT ME"; ?></h3>
                    <p>We'd love to hear from you! Whether you have a question, need a custom quote, or want to book a session, our contact page provides all the information you need to get in touch with Malcolm Lismore Photography.</p>
                </div>

                <div class="contact-middle">
                    <div>
                        <span class="contact-icon">
                            <i class="fas fa-map-signs"></i>
                        </span>
                        <span>Address</span>
                        <p><?php echo "Main Street - 3456, California 0000"; ?></p>
                    </div>

                    <div>
                        <span class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </span>
                        <span>Contact Number</span>
                        <p><?php echo "4567 3485 2902"; ?></p>
                    </div>

                    <div>
                        <span class="contact-icon">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        <span>Email Address</span>
                        <p><?php echo "malcolm@gmail.com"; ?></p>
                    </div>

                    <div>
                        <span class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </span>
                        <span>Website</span>
                        <p><?php echo "www.Malcolm'sLab.com"; ?></p>
                    </div>
                </div>

                <div class="contact-bottom">
                    <form class="form" action="contact-handler.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="email" name="email" placeholder="Your Email">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea rows="9" name="message" placeholder="Message"></textarea>
                        <input type="submit" class="btn" value="Send Message">
                    </form>

                    <!-- Map -->
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509916.01527587!2d-123.79730890241156!3d37.18431437946637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2snp!4v1595133867574!5m2!1sen!2snp" width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                    <p>Malcolm Lismore: Your trusted name in photography.</p>
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
