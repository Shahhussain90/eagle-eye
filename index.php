<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- AOS CSS -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">

    <style>
        <?php
        include 'style/index.css';
        ?>
    </style>

    <title>HOME</title>

</head>

<body>

    <div class="LOGO_div">

        <div class="logo_div_1" data-aos="fade-down" data-aos-delay="300">
            <!-- <i class="fa-solid fa-shield-halved"></i> -->
            <img src="images/EagleEye Security Logo Design.png" alt="">
            <!-- <div>
                <span>EagleEye</span>
            </div> -->
        </div>




    </div>

    <header>
        <nav data-aos="fade-in">
            <div class="nav_1">
                <a href="" style="padding-left: 0;">Home</a>
                <a href="">About us</a>
                <a href="">Services</a>
                <a href="">Contact</a>
            </div>
            <div class="nav_2">
                <a class="nav-link" href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="nav-link" href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>


            <div class="ll">
                <!-- <i class="fa-solid fa-shield-halved"></i>
                <span>EagleEye</span> -->
                <img src="images/EagleEye Security Logo Design.png" height="100" width="100" alt="">
            </div>
            <i class="fa-solid fa-bars"></i>
        </nav>

        <div class="sidebar_main">
            <div class="Sidebar">
                <i class="fa-solid fa-xmark"></i>
                <!-- <i class="fa-solid fa-shield-halved"></i> -->
                <div>
                    <a href="">Home</a>
                    <a href="">About us</a>
                    <a href="">Services</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>

    </header>




    <section class="ccf-hero-banner">
        <div class="ccf-hero-content" data-aos="fade-down">
            <span class="ccf-hero-subtitle">We Supply Security</span>
            <h1 class="ccf-hero-title">
                24/7 Surveillance<br>For Your Safety
            </h1>
            <p class="ccf-hero-description">
                At <strong>EagleEye Security</strong>, we’re committed to protecting what matters most.
                Our expert team and advanced surveillance systems ensure your peace of mind—day and night.<br><br>
                Ready to get started?
            </p>

            <div class="ccf-hero-buttons">
                <button class="ccf-btn ccf-btn-primary">Get Started</button>
                <button class="ccf-btn ccf-btn-outline">Contact</button>
            </div>
        </div>
    </section>



    <section class="ccf-pricing-section">
        <div class="ccf-pricing-header" data-aos="fade-up">
            <h2>Pricing Plans</h2>
        </div>

        <div class="ccf-pricing-grid" data-aos="fade-up" data-aos-delay="300">
            <!-- BASIC PLAN -->
            <div class="ccf-pricing-card">
                <h3>Basic</h3>
                <p>Perfect for small spaces or individuals.</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> 1 Camera</li>
                    <li><i class="fa-solid fa-check"></i> 1 GB Storage</li>
                    <li><i class="fa-solid fa-check"></i> 1 User</li>
                    <li><i class="fa-solid fa-check"></i> 24/7 Support</li>
                </ul>
                <h2>$10/month</h2>
                <button class="ccf-btn ccf-btn-primary" id="ccf-service-btn-1" data-bs-toggle="modal" data-bs-target="#ccfPurchaseModal">Book Consultation</button>
            </div>

            <!-- STANDARD PLAN -->
            <div class="ccf-pricing-card featured">
                <h3>Standard</h3>
                <p>Ideal for homes and small businesses.</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> 3 Cameras</li>
                    <li><i class="fa-solid fa-check"></i> 5 GB Storage</li>
                    <li><i class="fa-solid fa-check"></i> 5 Users</li>
                    <li><i class="fa-solid fa-check"></i> Priority Support</li>
                </ul>
                <h2>$25/month</h2>
                <button class="ccf-btn ccf-btn-primary" id="ccf-service-btn-2" data-bs-toggle="modal" data-bs-target="#ccfPurchaseModal">Book Consultation</button>
            </div>

            <!-- PREMIUM PLAN -->
            <div class="ccf-pricing-card">
                <h3>Premium</h3>
                <p>For complete security coverage.</p>
                <ul>
                    <li><i class="fa-solid fa-check"></i> 10 Cameras</li>
                    <li><i class="fa-solid fa-check"></i> 20 GB Storage</li>
                    <li><i class="fa-solid fa-check"></i> Unlimited Users</li>
                    <li><i class="fa-solid fa-check"></i> 24/7 Monitoring</li>
                </ul>
                <h2>$49/month</h2>
                <button class="ccf-btn ccf-btn-primary" id="ccf-service-btn-3" data-bs-toggle="modal" data-bs-target="#ccfPurchaseModal">Book Consultation</button>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="ccfPurchaseModal" tabindex="-1" aria-labelledby="ccfPurchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ccf-modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ccfPurchaseModalLabel">Book Consultation</h5>
                </div>
                <div class="modal-body">
                    <form id="ccf-pricing-form" action="<?php echo htmlspecialchars(dirname($_SERVER['PHP_SELF']) . '/files/purchase.php'); ?>" method="post">
                        <h2 id="ccf-chosen-plan">Chosen Plan:</h2>

                        <input type="text" id="ccf-name" name="name" placeholder="Full Name" required>
                        <span id="ccf-span-1" class="ccf-error"></span>

                        <input type="email" id="ccf-email" name="email" placeholder="Email Address" required>
                        <span id="ccf-span-2" class="ccf-error"></span>

                        <input type="number" id="ccf-number" name="number" placeholder="Phone Number" required>
                        <span id="ccf-span-3" class="ccf-error"></span>

                        <!-- <div class="ccf-check-div">
                            <input type="checkbox" name="checkbox" id="ccf-checkbox" checked required>
                            <label for="ccf-checkbox">You agree with our terms, conditions, and privacy policy.</label>
                        </div> -->

                        <input type="hidden" name="PLAN" id="ccf-hidden-input">

                        <button type="submit" class="ccf-btn ccf-btn-submit">Get a Quote</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="ccf-btn ccf-btn-close" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

















    <section class="ccf-services-section">
        <div class="ccf-services-bg">
            <div class="ccf-services-header" data-aos="fade-up" data-aos-delay="300">
                <span class="ccf-services-subtitle">Our Services</span>
                <h2 class="ccf-services-title">What We Offer</h2>
                <p class="ccf-services-description">
                    At EagleEye, we provide customized protection plans designed to keep your people, property, and assets secure.
                </p>
            </div>

            <div class="ccf-services-grid" data-aos="fade-up" data-aos-delay="380">
                <div class="ccf-service-box">
                    <i class="fa-solid fa-globe"></i>
                    <h4>Security Consulting</h4>
                    <p>Expert advice to assess and strengthen your current security systems.</p>
                </div>

                <div class="ccf-service-box">
                    <i class="fa-solid fa-user-shield"></i>
                    <h4>Personal Security</h4>
                    <p>Professional bodyguards and personnel for executive or private protection.</p>
                </div>

                <div class="ccf-service-box">
                    <i class="fa-solid fa-address-card"></i>
                    <h4>On-Site Protection</h4>
                    <p>Trained guards ensuring safety at commercial, industrial, and residential properties.</p>
                </div>

                <div class="ccf-service-box">
                    <i class="fa-solid fa-shield"></i>
                    <h4>Commercial Security</h4>
                    <p>Comprehensive monitoring and protection for businesses and offices.</p>
                </div>

                <div class="ccf-service-box">
                    <i class="fa-solid fa-lock"></i>
                    <h4>Surveillance Systems</h4>
                    <p>State-of-the-art CCTV and camera installation with real-time monitoring.</p>
                </div>

                <div class="ccf-service-box">
                    <i class="fa-solid fa-camera"></i>
                    <h4>Asset & Object Protection</h4>
                    <p>Prevent theft and unauthorized access with our smart detection systems.</p>
                </div>
            </div>
        </div>
    </section>




    <section class="ccf-partners-section">
        <div class="ccf-partners-card" data-aos="fade-up" data-aos-delay="300">
            <div class="ccf-partners-row">
                <div class="ccf-partners-image">
                    <img src="images/map_1.png" alt="Global Partner Locations">
                </div>
                <div class="ccf-partners-content">
                    <span class="ccf-partners-subtitle">Our Partners</span>
                    <h2 class="ccf-partners-title">Over 23+ Partner Locations Worldwide</h2>
                    <p class="ccf-partners-description">
                        We proudly collaborate with more than 23 partners across the globe, providing advanced security
                        solutions that ensure reliability, innovation, and excellence in every project.
                    </p>
                </div>
            </div>
        </div>
    </section>







    <section class="about_us">
        <div class="card mb-3 partner_card" data-aos="fade-up" data-aos-delay="300">
            <div class="row no-gutters">

                <div class="col-md-6">
                    <div class="card-body partners_body">
                        <span>About us</span>
                        <h5>A Legacy of Trust and Protection</h5>
                        <p>With years of experience and a dedicated team of professionals, EagleEye Security stands as a leader in modern protection systems.
                            From advanced technology to on-ground expertise, we ensure your safety every step of the way.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="images/image_2.png" class="card-img" alt="...">
                </div>
            </div>
        </div>
    </section>




    <section class="reviews_sec" data-aos="fade-up" data-aos-delay="300">
        <div class="rev_div">
            <span>Testimonial</span>
            <h2>What Our Clients Say</h2>
        </div>

        <div class="reviews_divs">

            <div class="revs">
                <div>
                    <img src="images/client-1.jpg" alt="...">
                    <div>
                        <h5>John Doe — </h5>
                        <span>CEO</span>
                    </div>
                </div>
                <p>“EagleEye Security transformed our workplace safety. Their systems are reliable, and the support team is exceptional.
                    "</p>
            </div>



            <div class="revs">
                <div>
                    <img src="images/client-2.jpg" alt="...">
                    <div>
                        <h5>Jane Smith — </h5>
                        <span>Business Owner</span>
                    </div>
                </div>
                <p>“Highly professional and responsive. I finally feel confident leaving my property in their hands.
                    "</p>
            </div>


            <div class="revs">
                <div>
                    <img src="images/client-3.jpg" alt="...">
                    <div>
                        <h5>Michael Johnson — </h5>
                        <span>Property Manager</span>
                    </div>
                </div>
                <p>“From installation to maintenance, everything was handled seamlessly. Great service!
                    "</p>
            </div>

        </div>
    </section>






    <div class="contact_section" data-aos="fade-up" data-aos-delay="300">
        <div>
            <span>Need Assistance?</span>
            <h2>We’re Here to Help</h2>
            <p>Have questions or need a custom quote?<br>
                Our team is ready to assist you anytime.
        </div>

        <div>

            <form action="">
                <input type="email" placeholder="Email Address" required>
                <button type="submit" class="email_btn">button</button>
            </form>

        </div>
    </div>








    <footer>
        <div class="container_footer">
            <!-- Logo -->
            <div class="footer_divs" id="logo_footer">
                <img src="images/EagleEye Security Logo Design.png" height="200px" width="200px" alt="">
                <!-- <i class="fa-solid fa-shield-halved"></i>
                Eagle Eye -->
            </div>

            <!-- Useful Links -->
            <div class="footer_divs">
                <h6>Useful Links</h6>
                <a href="index.php">Home</a>
                <a href="#about">About Us</a>
                <a href="#Portfolio">Portfolio</a>
                <a href="#services">Services</a>
            </div>

            <!-- Support -->
            <div class="footer_divs">
                <h6>Support</h6>
                <a href="index.php">FAQs</a>
                <a href="#contact">Contact Us</a>
                <a href="index.php">Privacy Policy</a>
                <a href="#services">Services</a>
            </div>

            <!-- Contact Info -->
            <div class="footer_divs">
                <h6>Contact Information</h6>
                <span>Address anywhere, City ABC, Country</span>
                <span>+92 322 2617019</span>
                <span>info@eagleeye-security.com</span>
                <span class="social_icons">
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                </span>
            </div>
        </div>

        <div class="copyright">
            <p>© 2022 EagleEye Security — All Rights Reserved</p>
        </div>
    </footer>





    <script>
        document.querySelectorAll('[id^="ccf-service-btn-"]').forEach((btn, i) => {
            btn.addEventListener('click', () => {
                const planNames = ['Basic', 'Standard', 'Premium'];
                document.getElementById('ccf-chosen-plan').textContent = 'Chosen Plan: ' + planNames[i];
                document.getElementById('ccf-hidden-input').value = planNames[i];
            });
        });
    </script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // animation duration in ms
            once: true // whether animation should happen only once
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.fa-bars').on('click', function() {
                $('.sidebar_main').slideDown(1000);
            })
            $('.fa-xmark').on('click', function() {
                $('.sidebar_main').slideUp(1000);
            })
        })
    </script>
    <script>
        var btn_1 = document.getElementById("service_btn_1");
        var btn_2 = document.getElementById("service_btn_2");
        var btn_3 = document.getElementById("service_btn_3");

        var plan = document.getElementById("chosen_plan");

        var hidden = document.getElementById("hidden_input");

        btn_1.addEventListener('click', function() {
            plan.innerHTML = "Choosen plan: Basic";
            hidden.value = "Basic";
        })

        btn_2.addEventListener('click', function() {
            plan.innerHTML = "Choosen plan: Standard";
            hidden.value = "Standard";
        })

        btn_3.addEventListener('click', function() {
            plan.innerHTML = "Choosen plan: Premium";
            hidden.value = "Premium";
        })


        // var pri_termsss = document.getElementById("pri_termsss")
        // var checkbox = document.getElementById("checkbox");

        var form = document.getElementById("form_plans");
        var nameInput = document.getElementById("name");
        var emailInput = document.getElementById("email");
        var numberInput = document.getElementById("number");

        // Get the span elements for error messages
        var span_1 = document.getElementById("span_1");
        var span_2 = document.getElementById("span_2");
        var span_3 = document.getElementById("span_3");

        // Regular expression for email validation
        var emailREG = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Regular expression for phone number validation (assuming 10-digit numbers)
        var numberREG = /^\d{10}$/;

        // Function to validate input fields
        function validateFields() {
            var name = nameInput.value.trim();
            var email = emailInput.value.trim();
            var number = numberInput.value.trim();

            // Reset error messages
            span_1.innerHTML = "";
            span_2.innerHTML = "";
            span_3.innerHTML = "";

            // Check for empty fields and incorrect formats
            if (name === "") {
                span_1.innerHTML = "Name is required";
            }
            if (email === "") {
                span_2.innerHTML = "Email is required";
            } else if (!emailREG.test(email)) {
                span_2.innerHTML = "Email is incorrect";
            }
            if (number === "") {
                span_3.innerHTML = "Number is required";
            }
            if (!checkbox.checked) {
                span_3.innerHTML = "you need to check the box";
            } else if (!numberREG.test(number)) {
                span_3.innerHTML = "Number is incorrect (please enter 10 digits)";

            }
        }

        // Add event listener to the form submit event
        form.addEventListener("submit", function(e) {
            validateFields();
            // Check if there are any error messages
            if (span_1.innerHTML !== "" || span_2.innerHTML !== "" || span_3.innerHTML !== "") {
                e.preventDefault();
            }



        });
    </script>



</body>

</html>