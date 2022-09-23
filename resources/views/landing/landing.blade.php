<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Regna Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{URL::asset('theme/regina-admin/assets/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('theme/regina-admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('theme/regna-admin/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('theme/regna-admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/regna-admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('theme/regna-admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/regna-admin/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/regna-admin/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('modal/login-modal.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{URL::asset('theme/regna-admin/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Regna - v4.9.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <img src="{{URL::asset('regna-admin/assets/img/portfolio/favicon.png')}}" alt="" />
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <a href="index.html"><img src="{{asset('theme/regna-admin/assets/img/logo.png')}}" alt=""></a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href='#'>
                            Login</a></li>
                    <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#signupModal" href='#'>
                            Register</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->



    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Welcome to Regna Writers</h1>
            <h2>We are a talented team of Academic professionals who want to ensure that you pass your classes with A+
            </h2>
            <a href="#about" class="btn-get-started">Submit Assignment</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Few Words About Us</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam
                                libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>

                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Facts</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="2308" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="23534" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="3463" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="104" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Services</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-briefcase"></i></a></div>
                            <h4 class="title"><a href="">Whole class Assignments</a></h4>
                            <p class="description">At lowest rates we handle whole class assignment with A+ grades
                                guaranteed</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-card-checklist"></i></a></div>
                            <h4 class="title"><a href="">Thesis Writing </a></h4>
                            <p class="description">Are you into Thesis writing? We handle thesis writing for PHD,
                                Masters and also Degree Classes. We also do custom Writing </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-bar-chart"></i></a></div>
                            <h4 class="title"><a href="">Accounting Class</a></h4>
                            <p class="description">All Accounting classes and homework are handled here, our team is
                                dedicated to helping you through your education</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-binoculars"></i></a></div>
                            <h4 class="title"><a href="">General Assignment</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-brightness-high"></i></a></div>
                            <h4 class="title"><a href="">Computer Science Work</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-calendar4-week"></i></a></div>
                            <h4 class="title"><a href="">Programming Work</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam
                                libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Portfolio Section ======= -->


        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Team</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="pic"><img src="{{('theme/regna-admin/assets/img/team-1.jpg')}}" alt=""></div>
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="pic"><img src="{{asset('theme/regna-admin/assets/img/team-2.jpg')}}" alt="">
                            </div>
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{asset('theme/regna-admin/assets/img/team-3.jpg')}}" alt="">
                            </div>
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="pic"><img src="{{asset('theme/regna-admin/assets/img/team-4.jpg')}}" alt="">
                            </div>
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Contact</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
            </div>

            <!-- Uncomment below if you wan to use dynamic maps -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="container mt-5">
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>A108 Adam Street<br>New York, NY 535022</p>
                            </div>

                            <div>
                                <i class="bi bi-envelope"></i>
                                <p>info@example.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+1 5589 55488 55s</p>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">


            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Regna</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
    </footer><!-- End Footer -->

    <!-- Button trigger modal -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{URL::asset('theme/regna-admin/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{URL::asset('theme/regna-admin/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{URL::asset('theme/regna-admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('theme/regna-admin/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{URL::asset('theme/regna-admin/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('theme/regna-admin/assets/vendor/swiper/swiper-bundle.min.j')}}s"></script>
    <script src="{{URL::asset('theme/regna-admin/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{URL::asset('theme/regna-admin/assets/js/main.js')}}"></script>

    <!-- Modal log in modal-->
    <div class="modal modal-lg fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login_form_wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-2">
                                    <!-- login_wrapper -->
                                    <div class="login_wrapper">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                                <a href="#" class="btn btn-primary facebook"> <span>Login with
                                                        Facebook</span> <i class="fa fa-facebook"></i> </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                                <a href="#" class="btn btn-primary google-plus"> Login with Google
                                                    <i class="fa fa-google-plus"></i> </a>
                                            </div>
                                        </div>
                                        <h2>or</h2>
                                        <div class="formsix-pos">
                                            <div class="form-group i-email">
                                                <input type="email" class="form-control" required="" id="email2"
                                                    placeholder="Email Address *">
                                            </div>
                                        </div>
                                        <div class="formsix-e">
                                            <div class="form-group i-password">
                                                <input type="password" class="form-control" required="" id="password2"
                                                    placeholder="Password *">
                                            </div>
                                        </div>
                                        <div class="login_remember_box">
                                            <label class="control control--checkbox">Remember me
                                                <input type="checkbox">
                                                <span class="control__indicator"></span>
                                            </label>
                                            <a href="#" class="forget_password">
                                                Forgot Password
                                            </a>
                                        </div>
                                        <div class="login_btn_wrapper">
                                            <a href="#" class="btn btn-primary login_btn"> Login </a>
                                        </div>
                                        <div class="login_message">
                                            <p>Don&rsquo;t have an account ? <a href="#"> Sign up </a> </p>
                                        </div>
                                    </div>
                                    <!-- /.login_wrapper-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Modal log in modal-->
    <div class="modal modal-lg fade" id="signupModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login_form_wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-2">
                                    <!-- login_wrapper -->
                                    <div class="login_wrapper">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                                <a href="#" class="btn btn-primary facebook"> <span>Sign up with
                                                        Facebook</span> <i class="fa fa-facebook"></i> </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                                <a href="#" class="btn btn-primary google-plus"> Sign up with Google
                                                    <i class="fa fa-google-plus"></i> </a>
                                            </div>
                                        </div>
                                        <h2>or</h2>
                                        <div class="formsix-pos">
                                            <div class="form-group i-email">
                                                <input type="" class="form-control" required="" name="username"
                                                    id="username" placeholder="username *">
                                            </div>
                                        </div>
                                        <div class="formsix-pos">
                                            <div class="form-group i-email">
                                                <input type="email" class="form-control" required="" id="email2"
                                                    placeholder="Email Address *">
                                            </div>
                                        </div>
                                        <div class="formsix-pos">
                                            <div class="form-group i-email">
                                                <input type="password" class="form-control" required="" id="password1"
                                                    placeholder="Password *">
                                            </div>
                                        </div>
                                        <div class="formsix-pos">
                                            <div class="form-group i-email">
                                                <input type="email" class="form-control" required="" id="password2"
                                                    placeholder="Password Confirm *">
                                            </div>
                                        </div>



                                        <div class="login_message">
                                            <p>Have have an account ? <a href="#"> Log in </a> </p>
                                        </div>
                                    </div>
                                    <!-- /.login_wrapper-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>





</body>

</html>