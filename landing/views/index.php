<?php require "header.php" ?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);
    @import url(https://fonts.googleapis.com/css2?family=Satisfy&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Display:wght@300&display=swap);

    .text {
        position: absolute;
        width: 550px;
        left: 50%;
        margin-left: -225px;
        height: 40px;
        top: 50%;
        margin-top: -20px;
    }

    .letters p {
        font-family: 'Open Sans', sans-serif;
        font-weight: 900;
        font-size: 40px;
        display: inline-block;
        vertical-align: top;
        margin: 0;
    }

    .word {
        position: absolute;
        width: 420px;
        opacity: 0;
    }

    .letter {
        display: inline-block;
        position: relative;
        float: left;
        transform: translateZ(25px);
        transform-origin: 50% 50% 25px;
    }

    .letter.out {
        transform: rotateX(90deg);
        transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .letter.behind {
        transform: rotateX(-90deg);
    }

    .letter.in {
        transform: rotateX(0deg);
        transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .wisteria {
        color: #8e44ad;
    }

    .belize {
        color: #2980b9;
    }

    .pomegranate {
        color: #c0392b;
    }

    .green {
        color: #16a085;
    }

    .midnight {
        color: #2c3e50;
    }

    .text-vertical {
        font-family: 'Open Sans', sans-serif;
        font-weight: 900;
        font-size: 37px;
        display: inline-block;
        vertical-align: top;
        writing-mode: vertical-lr;
        transform: rotate(180deg);
        color: rgb(155, 4, 4);
    }

    .second-about-1 {
        font-weight: 600;
        font-size: 30px;
        font-family: 'Satisfy', cursive;
        margin-bottom: 20px;
    }

    .second-about-2 {
        font-weight: 900;
        font-size: 10px;
        font-family: 'Caveat', cursive;
    }

    .three-about {
        font-size: 25px;
        font-weight: 300;
        font-family: 'Big Shoulders Inline Display', cursive;
        color: orange;
    }

    #inputemail {
        background-color: black;
    }

    #buttonemail {
        background-color: black;
        width: 90px;
    }
</style>

<body id="body">

    <main class="site-content" role="main">
        <!-- PRINCIPAL - HOME -->
        <div class="headersvg" id="headersvg">
            <div class="principal-overlay">
                <div class="principal-svg">
                    <svg viewBox="0 0 1428 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="#FFFFFF" fill-rule="evenodd">
                            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                                <g class="wave gradient" fill="#ffb545">
                                    <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
                                </g>
                                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                                    <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.4"></path>
                                        <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.4"></path>
                                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.4"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- PRINCIPAL -->
                <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                    <div class="row p-2 ">
                        <div class="flex flex-col  col-sm-6" style=" height: 60vh;">
                            <p class="text-vertical">MINISTRY CONECTED</p>
                        </div>
                        <div class="rigth col-sm-6 letters" style=" height: 30vh; ">
                            <div class="text">
                                <p style="color: orange;">WE ARE </p>
                                <p>
                                    <span class="word wisteria"> FAMILY.</span>
                                    <span class="word belize"> MINISTRY.</span>
                                    <span class="word pomegranate"> MISSIONARIES.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center seemore-home">
                    <a href="#aboutus" id="learn-more" class="animated-header " role="navigation">
                        <h6>LEARN MORE </h6>
                        <i class="fa fa-angle-double-down fa-4x animated"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- SECOND ABOUT -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow animated fadeInLeft">
                        <div class="recent-works">
                            <h3>ABOUT US</h3>
                            <div id="works">
                                <div class="work-item">
                                    <h5>MISION</h5>
                                    <p> Impactar las redes sociales con el mensaje del advenimiento de Jesús, atrayendo jóvenes en el mundo. incluyendo reuniones interactivas donde puedan fortalecerse espiritualmente con el método de Cristo.</p>
                                </div>
                                <div class="work-item">
                                    <h5>VISION</h5>
                                    <p>Llenar nuestras necesidades principales como hijos de Dios en nuestra forma de pensar y actuar. Utilizando el vínculo de la amistad, liderazgo y predicación, para ser el medio evangelístico juvenil número uno en el
                                        mundo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
                        <div class="welcome-block">
                            <h3>Welcome To Our Site</h3>
                            <div class="message-body">
                                <img src="assets/img/logo.png" class="pull-left" alt="member">
                                <p class="second-about-1">" Utilizamos las redes sociales </p>
                                <p class="second-about-1">y distintos ministerios, para impartir el </p>
                                <p class="second-about-1">método de Cristo a muchas personas. "</p>
                                <p class="second-about-2"> JOVENES VALIENTES CONECTADOS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- THREE ABOUT US -->
        <section id="aboutus">
            <div class="container">
                <div class="row">
                    <div class="sec-title text-center">
                        <h2 class="wow animated bounceInLeft">OUR HISTORY</h2>
                        <p class="wow animated bounceInRight">Get to know us a little more, this is our Story</p>
                    </div>
                    <div class=" wow animated fadeInLeft">
                        <div class="recent-works">
                            <div id="works">
                                <div class="work-item">
                                    <p class="three-about">
                                        En una sociedad de jóvenes, de Julio del 2020 titulada “La confusión de cupido” se tuvo la idea de hacer una recepción de sábado juvenil, la cual se realizó y hubieron muchos invitados de chicos de distintos lugares del mundo.
                                        <br>
                                        Lo cual fue muy agradable, y se tomó la iniciativa de crear un ministerio juvenil en tiempo de pandemia.
                                        Al enterarse el ministerio “Valientes para Dios” de tal iniciativa accede a proponer trabajo en equipo teniendo,
                                        debido a que su público en su mayoría recibía un contenido para adultos.
                                        <br>
                                        E inicia una convocatoria, donde se propone el ministerio a 7 jóvenes, para trabajar por las
                                        redes sociales, y aceptan la propuesta, llevando las invitaciones por parte de todos a
                                        nuestros amigos a participar del ministerio, de 7 pasamos a 45 jóvenes y en nuestra
                                        inauguración el 01 de Agosto del 2020 sy éramos 100, hasta el momento aún no se había subido contenido en las cuentas oficiales
                                        de JVC y el número de seguidores era de cero.
                                        <br>
                                        Hoy tenemos un público de: 2.000 jóvenes aproximadamente, sin contar con las
                                        transmisiones que pueden tener un alcance a casi 40k jóvenes en todo el mundo,
                                        incluyendo al idioma, inglés y portugués.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>FEATURED PROJECTS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>


                    <ul class="project-wrapper wow animated fadeInUp">
                        <li class="portfolio-item">
                            <img src="img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fas fa-expand"></i></a></li>
                                <!--li><a href=""><i class="fa fa-link"></i></a></li-->
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street" href="img/slider/banner.jpg" data-fancybox-group="works"><i class="fas fa-expand"></i></a></li>
                                <!--li><a href=""><i class="fa fa-link"></i></a></li-->
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="img/portfolio/item3.jpg"><i class="fas fa-expand"></i></a></li>
                                <!--li><a href=""><i class="fa fa-link"></i></a></li-->
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="img/portfolio/item4.jpg"><i class="fas fa-expand"></i></a></li>
                                <!--li><a href=""><i class="fa fa-link"></i></a></li-->
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="img/portfolio/item5.jpg"><i class="fas fa-expand"></i></a></li>
                                <!--li><a href=""><i class="fa fa-link"></i></a></li-->
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="img/portfolio/item6.jpg"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </section>
        <!-- START FOLLOUS -->
        <section id="social" class="parallax">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center white wow animated fadeInDown">
                            <h2>FOLLOW US</h2>
                            <p>Follow us on our social networks</p>
                        </div>

                        <ul class="social-button">
                            <li class="wow animated zoomIn"><a href="https://www.facebook.com/ja.valientes.7"><i class="fab fa-facebook-f fa-2x"></i></a>Facebook</li>
                            <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/JovenesValient4"><i class="fa fa-twitter fa-2x"></i></a>Twitter</li>
                            <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fab fa-facebook-messenger fa-2x"></i></a>Messenger</li>
                        </ul>
                        <br>
                        <ul class="social-button">
                            <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="https://www.tiktok.com/@jovenesvalientes"><i class="fab fa-tiktok fa-2x"></i></a>Tik Tok</li>
                            <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="https://www.youtube.com/channel/UCXRZ8BAVWYPQSP2q3h-lbmg"><i class="fab fa-youtube fa-2x"></i></a>Youtube</li>
                            <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fab fa-telegram-plane fa-2x"></i></a>Telegram</li>
                        </ul>
                        <br>
                        <ul class="social-button">
                            <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="https://www.instagram.com/ja_valientes/?hl=es-la"><i class="fab fa-instagram fa-2x"></i></a>Instagram</li>
                            <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="https://www.pinterest.com/jovenesconecta2/_created/"><i class="fab fa-pinterest fa-2x"></i></a>Pinterest</li>
                            <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fab fa-whatsapp fa-2x"></i></a>WhatsApp</li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <!-- END FOLLOW US -->
        <!-- START RESOURCES -->
        <section id="resources">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center">
                        <h2 class="wow animated bounceInLeft">Resources</h2>
                        <p class="wow animated bounceInRight">Aquí tienes nuestros recursos</p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-pencil-ruler fa-3x"></i>
                            </div>
                            <h3>Desings</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <hr>
                            <a type="button" href="#">SEE MORE</a>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-file-invoice fa-3x"></i>
                            </div>
                            <h3>Documents</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <hr>
                            <a type="button" href="#">SEE MORE</a>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fas fa-photo-video fa-3x"></i>
                            </div>
                            <h3>Photos</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <hr>
                            <a type="button" href="#">SEE MORE</a>

                        </div>
                    </div>
                </div>
                <br>
                <br><br><br>
            </div>
        </section>

        <section id="more" class="parallax">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center white wow animated fadeInDown">
                            <h2>MORE JVC</h2>
                            <p>Follow us on our social networks</p>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-home fa-3x"></i>
                                </div>
                                <h3>Support</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <hr>
                                <a type="button" href="#">SEE MORE</a>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-tasks fa-3x"></i>
                                </div>
                                <h3>Well Documented</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <hr>
                                <a type="button" href="#">SEE MORE</a>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-clock-o fa-3x"></i>
                                </div>
                                <h3>Calendar</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <hr>
                                <a type="button" href="./calendar.html">SEE MORE</a>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-heart fa-3x"></i>
                                </div>
                                <h3>Web Security</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <hr>
                                <a type="button" id="seemore" class="seemore" href="#">SEE MORE</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="gradient">
        <!-- Change the colour #f8fafc to match the previous section colour -->
        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ff9b03">
            <g stroke="none" stroke-width="1" fill="#ffffff" fill-rule="evenodd">
                <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                    <g class="wave" fill="#ffffff">
                        <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
                    </g>
                    <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                        <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                            <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>

        <section class="container mx-auto text-center py-6 mb-12">

            <div class="footer-content">
                <div class="wow animated fadeInDown" style="color: white;">
                    <h2> <strong> Contact Us </strong></h2>
                    <h3>We can help you with what you need</h3>
                </div>
                <div id="app" class="input-field">
                    <input type="email" class="form-control" v-model="from_email" placeholder="Enter Your Email..." id="inputemail">
                    <button @click="enviar" class="btn btn-success" id="buttonemail">
                        <i class="fa fa-paper-plane fa-lg"></i>
                    </button>
                </div>
                <div class="footer-social">
                    <ul>
                        <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fab fa-telegram-plane fa-3x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="https://www.instagram.com/ja_valientes/?hl=es-la"><i class="fab fa-instagram fa-3x"></i></a></li>
                        <li class="wow animated zoomIn"><a href="https://www.facebook.com/ja.valientes.7"><i class="fab fa-facebook-f fa-3x"></i></a></li>
                    </ul>
                </div>

                <p>Copyright &copy; 2020 Design and Developed </p>
                <p>By <a href="">Jovenes Valientes Conectados</a></p>
            </div>
        </section>
        <br>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript"></script>

    <!-- Main jQuery -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Single Page Nav -->
    <script src="assets/js/jquery.singlePageNav.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="assets/js/jquery.fancybox.pack.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- jquery easing -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Fullscreen slider -->
    <script src="assets/js/jquery.slitslider.js"></script>
    <script src="assets/js/jquery.ba-cond.min.js"></script>
    <!-- onscroll animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="assets/js/main.js"></script>
</body>

</html>