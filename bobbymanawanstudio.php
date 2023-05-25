<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== logo ===============-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-16x16.png">
    <link rel="manifest" href="assets/img/site.webmanifest">
    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/img/browserconfig.xml">
    <meta name="theme-color" content="#a789d4">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/bmp.css">

    <title> Studio 7 BMP </title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="https://instagram.com/studio7.bmp?igshid=NTc4MTIwNjQ2YQ" class="nav__logo" style="font-family:metal;">Studio7BMP</a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item ">
                        <a href="#home" class="nav__link">
                            <i class='bx bx-home'></i>
                        </a>
                    </li>

                    <li class="nav__item ">
                        <a href="#about" class="nav__link">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>
                      <li class="nav__item ">
                        <a href="#qr" class="nav__link">
                            <i class='bx bx-qr-scan'></i>
                        </a>
                    </li>


                    <li class="nav__item">
                        <a href="#work" class="nav__link">
                            <i class='bx bx-images'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-info-circle'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!--=============== theme change button ===============-->
            <i class='bx bx-moon change-theme change-theme-button' id="theme-button"></i>

        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__greeting">matudowolo</span>
                    <h1 class="home__name">Selamat Datang </h1>
                    <h1 class="home__name" style="font-family: Square Peg;">Galery Wedding Dilan & Milea</h1>

                   <marquee width="500" height="40">
                       <h4>Galery Foto acara, Foto bersama, Foto Tamu, Foto Pengantin</h4>
                   </marquee>
                  

                    <div class="home__button">
                        <a download="" href="assets/pdf/hailee-Cv.pdf" class="button button--ghost">
                            Download Undangan
                        </a>

                        <a href="#about" class="button">Scan</a>
                    </div>
                </div>

                <div class="home__handle">
                    <img src="assets/clien/bg.png" alt="" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://instagram.com/studio7.bmp?igshid=NTc4MTIwNjQ2YQ" target="_blank" class="home__social-link">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=+085381997605&text=Hey there!" target="_blank" class="home__social-link">
                        <i class='bx bxl-whatsapp'></i>
                    </a>
                    <a href="https://goo.gl/maps/8R8xoZU6bod9BKMHA" target="_blank" class="home__social-link">
                        <i class='bx bx-map-pin'></i>
                    </a>
                </div>

                <a href="#about" class="home__scroll">
                    <i class='bx bx-mouse home__scroll-icon'></i>
                    <span class="home__scroll-name">Scroll Down</span>
                </a>
            </div>
        </section>

        <!--=============== ABOUT ===============-->
        <section class="about section" id="about">
            <h2 class="section__title">Wedding</h2>

            <div class="about__container container grid">
                <img src="assets/clien/1.png" alt="" class="about__img">

                <div class="about__data">
                    <div class="about__info">
                        <div class="about__box">
                            <i class='bx bx-time about__icon'></i>
                            <h3 class="about__title">Waktu</h3>
                            <span class="about__subtitle"  style="font-size: 1em;">19.00 Wita</span>
                        </div>
                        <div class="about__box">
                            <i class='bx bx-calendar-check  about__icon'></i>
                            <h3 class="about__title">tanggal</h3>
                            <span class="about__subtitle" style="font-size: 1em;" >30 Mei 2023</span>
                        </div>
                        <div class="about__box"  style="font-size: 1em;">
                            <i class='bx bx-map-pin about__icon'></i>
                            <h3 class="about__title">lokasi</h3>
                            <span class="about__subtitle"  style="font-size: 1em;"">Graha azizah</span>
                        </div>
                    </div>

                    <p class="about__description">
                       Wedding dilan & milea lorem ,ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <!-- <a href="#contact" class="button about__button-contact">Contact Me</a> -->
                </div>
            </div>
        </section>


        <!--=============== SERVICES ===============-->
        <section class="services section" id="qr">
            <span class="section__subtitle">Qr Code</span>
            <h2 class="section__title" style="font-family:metal;">Scan Untuk Melihat Foto Anda</h2>

            <div class="services__container container grid">
                <div class="services__card">
                    <div class="serv">
                        <h3 class="services__title">Foto <br> Pengantin</h3>

                        <span class="services__button">
                            Lihat <i class='bx bx-right-arrow services__icon'></i>
                        </span>
                    </div>


                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close'></i>

                            <h3 class="services__modal-title"> Foto Pengantin</h3>

                            <p class="services__modal-description">
                                <img src="assets/clien/qr.png" style="border-radius: 20px;">
                            </p>

                            <ul class="services__modal-list">
                               
                                <a href="#" class="button button--ghost">
                                        Link
                                </a>

                            </ul>
                        </div>
                    </div>
                </div> 

                <div class="services__card">
                    <h3 class="services__title">Foto <br> Tamu</h3>

                    <span class="services__button">
                        Lihat <i class='bx bx-right-arrow services__icon'></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close'></i>

                            <h3 class="services__modal-title">Foto Tamu</h3>

                            <p class="services__modal-description">
                               <img src="assets/clien/qr.png" style="border-radius: 20px;">
                            </p>

                            <ul class="services__modal-list">
                               <a href="#" class="button button--ghost">
                                        Link
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>

               <!--  <div class="services__card">
                    <h3 class="services__title">Visual <br> Designing</h3>

                    <span class="services__button">
                        See More <i class='bx bx-right-arrow services__icon'></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close'></i>

                            <h3 class="services__modal-title">Visual Designing</h3>

                            <p class="services__modal-description">
                                I design and develop the consumer products with creative ability and
                                hands-on approach which stisfies the customers' and markets' needs and trends.
                            </p>

                            <ul class="services__modal-list">
                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I develop the user interfaces.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        Web Page design and development.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I create the UX element interactions.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I position your company brand.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        Create modern 3-D experiences.
                                    </p>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!--=============== WORK ===============-->
        <section class="work section" id="work">
    
            <h2 class="section__title">Dilan & Milea</h2>

           

            <div class="work__container container grid">
                <div class="work__card mix web">
                    <img src="assets/clien/1.png" alt="" class="work__img">
                </div>

                <div class="work__card mix movil">
                    <img src="assets/clien/2.png" alt="" class="work__img">

                   
                </div>

                <div class="work__card mix design">
                    <img src="assets/clien/3.png" alt="" class="work__img">

                   
                </div>

                <div class="work__card mix web">
                    <img src="assets/clien/4.png" alt="" class="work__img">
                </div>

                <div class="work__card mix movil">
                    <img src="assets/clien/5.png" alt="" class="work__img">

                   
                </div>

                 <div class="work__card mix movil">
                    <img src="assets/clien/6.png" alt="" class="work__img">

                   
                </div>

            </div>
        </section>


        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <sapn class="section__subtitle">Photograph</sapn>
            <h3 class="section__title">Contact Me</h3>

            <div class="contact__container container grid">
                <div class="contact__content">
                    <h3 class="contact__title contact__title-info">Hubungi Kami</h3>

                    <div class="contact__info">
                        <div class="contact__card">
                            <i class='bx bx-mail-send contact__card-icon'></i>
                            <h3 class="contact__card-title">Email</h3>
                            <span class="contact__card-data">user@gmail.com</span>

                            <a href="mailto:example@domain.com" target="_blank" class="contact__button">
                                Contact Me <i class='bx bx-right-arrow contact__button-icon'></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class='bx bxl-whatsapp contact__card-icon'></i>
                            <h3 class="contact__card-title">Whatsapp</h3>
                            <span class="contact__card-data">0853-8199-7605</span>

                            <a href="https://api.whatsapp.com/send?phone=+085381997605&text=Hey there!" target="_blank"
                                class="contact__button">
                                Contact Me <i class='bx bx-right-arrow contact__button-icon'></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class='bx bxl-instagram contact__card-icon'></i>
                            <h3 class="contact__card-title">Instagram</h3>
                            <span class="contact__card-data">studio7.bmp</span>

                            <a href="https://instagram.com/studio7.bmp?igshid=NTc4MTIwNjQ2YQ " target="_blank" class="contact__button">
                                 Contact ME <i class='bx bx-right-arrow contact__button-icon'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact__content">
                    <br>
                    <br>

                     <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d563.9831318689603!2d123.04433755683104!3d0.5656019908321445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3279292034158ebf%3A0x917fad4c8ef0233!2sBobby%20Manawan%20Foto%20Studio!5e0!3m2!1sid!2sid!4v1685037107566!5m2!1sid!2sid" width="100%" height="550px" frameborder="0" style=" border-radius:20px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); " allowfullscreen></iframe>
                </div>


                </div>

        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title">Studio7BMP</h1>



            <span class="footer__copy">
                &#169; 2023 Ahmad ditya. All rights reserved.
            </span>
        </div>
    </footer>

    <!--=============== SCROLLREVEAL ===============-->

    <!-- <script src="assets/js/scrollreveal.min.js"></script> -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>