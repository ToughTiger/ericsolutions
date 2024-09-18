<x-page_layout>
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>GDPR Compliance Policy</h1>
                {{--                <p>Our core competency, project management includes comprehensive and consistent processes, which conform to global regulatory requirements. From start-up to completion, performance is monitored and measured against contractual timelines and project costs are tracked to ensure adherence to agreed budgets</p>--}}
                {{--                <nav class="breadcrumbs">--}}
                {{--                    <ol>--}}
                {{--                        <li><a href="index.html">Home</a></li>--}}
                {{--                        <li class="current">Portfolio Details</li>--}}
                {{--                    </ol>--}}
                {{--                </nav>--}}
            </div>
        </div><!-- End Page Title -->


        <div class="accordion" id="gdprAccordion">
            <!-- Introduction -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingIntro">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseIntro" aria-expanded="true" aria-controls="collapseIntro">
                        Introduction
                    </button>
                </h2>
                <div id="collapseIntro" class="accordion-collapse collapse show" aria-labelledby="headingIntro"
                     data-bs-parent="#gdprAccordion">
                    <div class="accordion-body">
                        At <strong>Eric Solutions</strong>, we are committed to ensuring that your personal data is
                        protected and handled in accordance with the General Data Protection Regulation (GDPR).
                    </div>
                </div>
            </div>

            <!-- Lawful Basis -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingLawful">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseLawful" aria-expanded="false" aria-controls="collapseLawful">
                        Lawful Basis for Processing Personal Data
                    </button>
                </h2>
                <div id="collapseLawful" class="accordion-collapse collapse" aria-labelledby="headingLawful"
                     data-bs-parent="#gdprAccordion">
                    <div class="accordion-body">
                        We process personal data based on one or more of the following legal grounds:
                        <ul>
                            <li>Consent</li>
                            <li>Contractual necessity</li>
                            <li>Legitimate interest</li>
                            <li>Legal obligation</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Data We Collect -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingData">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                        Data We Collect
                    </button>
                </h2>
                <div id="collapseData" class="accordion-collapse collapse" aria-labelledby="headingData"
                     data-bs-parent="#gdprAccordion">
                    <div class="accordion-body">
                        We may collect and process the following personal data:
                        <ul>
                            <li>Identification data</li>
                            <li>Clinical data</li>
                            <li>Technical data</li>
                            <li>Consent records</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Your Rights -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRights">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseRights" aria-expanded="false" aria-controls="collapseRights">
                        Your Rights Under GDPR
                    </button>
                </h2>
                <div id="collapseRights" class="accordion-collapse collapse" aria-labelledby="headingRights"
                     data-bs-parent="#gdprAccordion">
                    <div class="accordion-body">
                        As a data subject, you have several rights under the GDPR, including:
                        <ul>
                            <li>Right to Access</li>
                            <li>Right to Rectification</li>
                            <li>Right to Erasure</li>
                            <li>Right to Restriction of Processing</li>
                            <li>Right to Data Portability</li>
                            <li>Right to Object</li>
                            <li>Right to Withdraw Consent</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Data Security -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSecurity">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSecurity" aria-expanded="false" aria-controls="collapseSecurity">
                        Data Security
                    </button>
                </h2>
                <div id="collapseSecurity" class="accordion-collapse collapse" aria-labelledby="headingSecurity"
                     data-bs-parent="#gdprAccordion">
                    <div class="accordion-body">
                        We safeguard your personal data through encryption, access controls, and secure retention
                        policies. Our platforms, including <strong>EDC, CTMS, and eTMF</strong>, are GDPR compliant and
                        use state-of-the-art security measures.
                    </div>
                </div>
            </div>

            <!-- Contact Us -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingContact">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseContact" aria-expanded="false" aria-controls="collapseContact">
                        Contact Us
                    </button>
                </h2>
                <div id="collapseContact" class="accordion-collapse collapse" aria-labelledby="headingContact"
                     data-bs-parent="#gdprAccordion">
                    <div class="accordion-body">
                        If you have any questions about this GDPR compliance policy or our data protection practices,
                        you can contact us at:
                        <ul>
                            <li><strong>Email:</strong> dpo@ericsolutions.com</li>
                            <li><strong>Phone:</strong> +1-786-636-5556</li>
                            <li><strong>Address:</strong> 621 E Tropical Way Plantation FL 33317</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-page_layout>
