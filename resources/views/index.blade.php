<x-layout :meta="$meta">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" data-bs-interval="3000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">One Stop Solution</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Eric Offers both Services and Proprietary Technologies. Less Vendor Management means Less Risk of Operations.</p>
                </div>
            </div>
<?php
//dd(auth()->user()->is_admin);
?>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Cost Optimization</h2>
                    <p class="animate__animated animate__fadeInUp">As Eric offers proprietary technologies, Eric Solutions can be highly cost optimized.</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Quality Optimization</h2>
                    <p class="animate__animated animate__fadeInUp">Highly qualified team offers dedicated services to each project. Regulatory Compliant Technologies enhanced by GenAI capabilities.
                        .</p>

                </div>
            </div>
            <!-- Slide 4 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Artificial Intelligence</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Eric Solutions is heavily invested in Artificial Intelligence based Innovations.
                        </p>

                </div>
            </div>

            <!-- Slide 5 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Regulatory Compliance</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Regulatory Compliant Technologies enhanced by GenAI capabilities.
                        </p>

                </div>
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>

    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Who we are</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">

                        <strong>Eric Solutions</strong> offers the advantage of a one stop solution by offering Management systems such as Clinical Trial Management Software. Since services and systems are offered by Eric Solutions, we provide solutions with shorter timelines and better costing.


                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>	Project management of clinical development programs.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>	Quality clinical monitoring - on-site, remote and centralized monitoring. </span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>	Optimized resourcing</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>	Site and patient solutions - recruiting and engaging patients</span></li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>At eRIC Solutions, we are committed to regulatory compliance and we also integrate GenAI technology, providing cutting-edge tools for data analysis and automation. Our dedicated, highly qualified team ensures each project is handled with precision and care, delivering exceptional results tailored to your specific needs. Trust Eric Solutions for innovative, efficient, and compliant healthcare technology solutions.. </p>

                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->
    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>What we do offer</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">

                        <a href="/clinical_operation" class="stretched-link">
                            <h3>CLINICAL OPERATIONS AND PROJECT MANAGEMENT</h3>
                        </a>

                        <p>
                            Eric Solutions offers the advantage of one stop solution by offering Management systems such as Clinical Trial Management Software. Since services and systems are offered by Eric Solutions, we provide solutions with shorter timelines and better costing.
                        </p>


                        <a href="/clinical_operation" class="read-more_gen">Read More</a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">

                        <a href="/biostatistics" class="stretched-link">
                            <h3>BIOSTATISTICS</h3>
                        </a>
                        <p>ERIC is involved in the analysis of data from all clinical stages of clinical development with a variety of designs
                            and statistical hypotheses, including interim analysis,
                            using adaptive, sequential and sample size adjustment designs.</p>
                        <a href="/biostatistics" class="read-more_gen">Read More</a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">

                        <a href="/pharmacovigilance" class="stretched-link">
                            <h3>PHARMACOVIGILANCE</h3>
                        </a>
                        <p>ERIC caters to your changing pharmacovigilance / drug safety needs through our well defined processes originating across sources.We deliver this through the right mix of our proven technology and skilled resources, bringing in efficiency & compliance to meet the stringent regulatory needs.</p>
                        <a href="/pharmacovigilance" class="read-more_gen">Read More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">

                        <a href="/clinical_data" class="stretched-link">
                            <h3>CLINICAL DATA STANDARDS</h3>
                        </a>
                        <p>We believe that the upfront implementation of the data standards in a sponsor’s data management and statistical environment enable
                            sponsors to map data specifications to their clients and agencies in a smooth manner. </p>
                        <a href="/clinical_data" class="read-more_gen">Read More</a>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">

                        <a href="/data_management" class="stretched-link">
                            <h3>DATA MANAGEMENT</h3>
                        </a>
                        <p>At ERIC we have implemented Industry Recognized and accepted data management systems, which enable us to deliver high quality outputs with confidence. </p>
                        <a href="/data_management" class="read-more_gen">Read More</a>
                    </div>

                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">

                        <a href="/medical_writing" class="stretched-link">
                            <h3>MEDICAL WRITING</h3>
                        </a>
                        <p>Clinical study reports are produced by medical writers in collaboration with the medical team and project statisticians,
                            ensuring a complete and accurate representation of all aspects of the study and its results, while respecting tight timelines.</p>
                        <a href="/medical_writing" class="read-more_gen">Read More</a>
                    </div>

                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-item position-relative">

                        <a href="/etmf" class="stretched-link">
                            <h3>eTMF SERVICES</h3>
                        </a>
                        <p>ERIC's eTMF System / Services offer user-friendly, connected and flexible solutions that ensure holistic clinical
                            documentation and compliance with real-time data lineage and audit history.</p>
                        <a href="/etmf" class="read-more_gen">Read More</a>

                    </div>

                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="service-item position-relative">

                        <a href="/edc" class="stretched-link">
                            <h3>TECHNOLOGIES</h3>
                        </a>
                        <p>Eric Solutions offers Regulatory and GDPR compliant Technology with GenAI enhancements. </p>
                        <a href="/edc" class="read-more_gen">Read More</a>
                    </div>

                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                    <div class="service-item position-relative">

                        <a href="/services" class="stretched-link">
                            <h3>ARTIFICIAL INTELLIGENCE</h3>
                        </a>
                        <p>Eric Solutions is heavily invested in Artificial Intelligence based Innovations </p>
                        <a href="/services" class="read-more_gen">Read More</a>
                    </div>

                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->


    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Our Hardworking Team</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/sachin-trans.jpeg"  height="250px" width="100%" alt="sachin_bidani">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sachin Bidani</h4>
                            <span>CEO and President</span>
                            <p>“Eric Solutions inspires to offer Optimized One stop solution for Clinical Development”</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/kenneth_Duchin.png" class="img-fluid" height="250px" width="100%" alt="kenneth_duchin">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Dr. Kenneth Duchin</h4>
                            <span>Chief Scientific Officer</span>
                            <p>"Eric Solution is Science and Technology oriented Company."</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/Deepak_prabhu.png"  height="250px" width="100%" alt="Deepak Prabhu">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Deepak Prabhu</h4>
                            <span>Sr. Director Project Management and Clinical Operations</span>
                            <p>"Excited to work with Bright Minds."</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/Yessenia_Rincon.png" height="250px" width="100%" alt="Yessenia_Rincon">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Yessenia Rincon</h4>
                            <span>Clinical Operations</span>
                            <p>“Working with Eric Solutions has been an excellent experience”</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <x-footer></x-footer>
</x-layout>
