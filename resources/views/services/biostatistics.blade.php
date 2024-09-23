<x-page_layout>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Biostatistics Service</h1>
                {{--                <p>Our core competency, project management includes comprehensive and consistent processes, which conform to global regulatory requirements. From start-up to completion, performance is monitored and measured against contractual timelines and project costs are tracked to ensure adherence to agreed budgets</p>--}}
                {{--                <nav class="breadcrumbs">--}}
                {{--                    <ol>--}}
                {{--                        <li><a href="index.html">Home</a></li>--}}
                {{--                        <li class="current">Portfolio Details</li>--}}
                {{--                    </ol>--}}
                {{--                </nav>--}}
            </div>
        </div><!-- End Page Title -->

        <!-- Portfolio Details Section -->
        <section id="service_details" class="service-details section">

            <div class="container" data-aos="fade-up">
                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            {{--                            <h2>Clinical Operation Services</h2>--}}
                            <p>
                                <strong>ERIC</strong> is involved in the analysis of data from all clinical stages of
                                clinical development with variety of designs and statistical hypotheses, including
                                interim analysis, using adaptive, sequential and sample size adjustment designs.
                            </p>
                            <p>
                                We have been involved in Independent Data Monitoring Committees to assist in decision
                                making process or to offer statistical support independent from sponsor.
                            </p>


                        </div>
                        <h3>The Statistical Services offered by ERIC</h3>
                        <ul class="service_offer">
                            <li><i class="bi bi-check-circle "></i> <span>Sample Size Calculation</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Statistical input in the Protocol.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Statistical analysis Plan</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Interim analysis</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Tables, Listings, Figure</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Statistical report</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>CDISC Data Submission for USFDA</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-box">
                            <h4>Our Services</h4>
                            <div class="services-list">
                                <a href="/clinical_operation"><i class="bi bi-arrow-right-circle"></i><span>Clinical Operation & Project Management</span></a>

                                <a href="/biostatistics"><i
                                        class="bi bi-arrow-right-circle"></i><span>Biostatistics</span></a>
                                <a href="/pharmacovigilance"><i class="bi bi-arrow-right-circle"></i><span>Pharmacovigilance</span></a>
                                <a href="/clinical_data"><i class="bi bi-arrow-right-circle"></i><span>Clinical Data Standerd</span></a>
                                <a href="/data_management"><i
                                        class="bi bi-arrow-right-circle"></i><span>Data Management</span></a>
                                <a href="/medical_writing"><i
                                        class="bi bi-arrow-right-circle"></i><span>Medical Writing</span></a>
                                <a href="/etmf"><i class="bi bi-arrow-right-circle"></i><span>eTMF Services</span></a>
                            </div>
                        </div><!-- End Services List -->


                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1-786-636-5556</span>
                            </p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:info@ericsolutions.com">info@ericsolutions.com</a></p>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Portfolio Details Section -->

    </main>

    <script>
        $(document).ready(function () {
            $('a').on('click', function () {
                $("a").removeClass("active");
                $(this).addClass("active");
            })

        })
    </script>

</x-page_layout>
