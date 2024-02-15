<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'includes/head-includes.php'; ?>
    <title>ByteBloom - Contact</title>
</head>

<body>
    <!-- ScrollToTop -->
    <div class="scroll d-lg-none">
        <span class="scroll-value">&#x1F815;</span>
    </div>
    
    <!-- NavBar -->
    <section class="head-section">
        <div class="container">
            <?php include_once 'includes/navbar.php'; ?>
        </div>
    </section>

    <!-- ContactSection -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 contact-left">
                    <div class="contact-main" data-aos="fade-right" data-aos-duration="1000">
                        Something in your mind? Let's have a discussion.
                    </div>
                    <div class="text-regular" data-aos="fade-right" data-aos-duration="1300">
                        We're here round the clock, ready to assist you at any hour. Don't hesitate to reach out with your questions!
                    </div>
                    <div class="parent-detail-box">
                        <div class="row contact-details" data-aos="zoom-in" data-aos-duration="1500">
                            <div class="col-12 col-md-2">
                                <div class="icon-box">
                                    <div class="email-icon image"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-10">
                                <div class="detail-box">
                                    <div class="label text-uppercase">
                                        email
                                    </div>
                                    <div class="detail">
                                        contactus@bytebloom.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="parent-detail-box">
                        <div class="row contact-details" data-aos="zoom-in" data-aos-duration="1700">
                            <div class="col-12 col-md-2">
                                <div class="icon-box">
                                    <div class="phone-icon image"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-10">
                                <div class="detail-box">
                                    <div class="label text-uppercase">
                                        phone
                                    </div>
                                    <div class="detail">
                                        +94 777 123 456
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-none d-lg-flex align-items-center justify-content-center contact-right">
                    <div class="img-box" data-aos="fade-left" data-aos-duration="1000">
                        <div class="contact-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FooterSection -->
    <section class="footer-section">
        <?php include_once 'includes/footer.php'; ?>
    </section>

    <script src="<?php echo BASE_URL; ?>public/scripts/bytebloom.js" type="module"></script>
</body>

</html>