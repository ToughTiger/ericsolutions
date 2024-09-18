
<x-layout>


<div class="min-h-full">
    <nav class="relative px-2 py-4 bg-blue-800 z-50">

        <div class="container mx-auto flex justify-between items-center">
            <img class="h-12" src="{{asset('images/logo-light.png')}}" alt="Eric Solutions">

            <ul class="hidden md:flex space-x-6">
                <li class="flex relative group">
                    <x-navlink>{{'Company'}}</x-navlink>
                    <ul class="absolute bg-blue-700 p-3 w-52 top-6 text-white font-bold mt-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg">
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">About</a>
                        </li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">Our
                                Team</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a
                                href="#">Locations</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a
                                href="#">Carrier</a></li>

                    </ul>
                </li>
                <li class="flex relative group">
                    <x-navlink>{{'Services'}}</x-navlink>
                    <ul class="absolute bg-blue-700 p-3 w-52 top-6 text-white font-bold mt-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg">
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">CLINICAL
                                OPERATIONS
                                AND PROJECT
                                MANAGEMENT</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">DATA
                                MANAGEMENT</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">STATISTICAL
                                ANALYSIS</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">CLINICAL
                                DATA
                                STANDARD</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">MEDICAL
                                WRITING</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">eTMF
                                SERVICES</a></li>
                    </ul>
                </li>
                <li class="flex relative group">
                    <x-navlink class="mr-1">{{'Technologies'}}</x-navlink>

                    <!-- Submenu starts -->
                    <ul class="absolute bg-blue-700 text-white font-bold p-3 w-52 top-6 mt-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg">
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">ELECTRONIC
                                DATA CAPTURE (EDC)</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">CLINICAL
                                TRIAL MANAGEMENT

                                SOFTWARE (CTMS)</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">ELECTRONIC
                                TRIAL MASTER FILE (eTMF)</a></li>
                        <li class="text-sm hover:bg-slate-100 hover:text-blue-700 px-2 leading-8"><a href="#">INTERACTIVE
                                RESPONSE TECHNOLOGY
                                (IRT)</a></li>

                    </ul>
                    <!-- Submenu ends -->
                </li>

                <li class="flex relative group">
                    <x-navlink>{{'Contacts'}}</x-navlink>
                </li>
                <li class="flex relative group">
                    <a href="#"
                       class="bg-orange-500 font-bold px-5 mr-5 py-1.5 rounded-3xl hover:bg-orange-600 text-white hidden md:flex"
                       role="button">Sign In</a>

                </li>
            </ul>

            <button data-collapse-toggle="mobile-menu" type="button" id="mobile_btn"
                    class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile menu -->

        <div class="md:hidden flex justify-center mt-3 w-full">

            <div id="mobile-menu" class="mobile-menu absolute top-23 w-full"> <!-- add hidden here later -->
                <ul class="bg-gray-100 shadow-lg leading-9 font-bold h-screen">
                    <li class="border-b-2 bg-blue-600 border-white hover:bg-blue-800 hover:text-white pl-4">
                        <x-navlink>{{'COMPANY'}}</x-navlink>
                        <!-- Submenu starts -->
                        <ul class="bg-blue-700 text-white w-full">
                            <li class="text-sm  leading-8 font-bold hover:text-orange-500 "><a class="block pl-16"
                                                                                               href="#">ABOUT</a>
                            </li>
                            <li class="text-sm  leading-8 font-bold hover:text-orange-500 "><a class="block pl-16"
                                                                                               href="#">OUR TEAM</a></li>
                            <li class="text-sm  leading-8 font-bold hover:text-orange-500 "><a class="block pl-16"
                                                                                               href="#">OUR TEAM</a></li>
                            <li class="text-sm  leading-8 font-bold hover:text-orange-500 "><a class="block pl-16"
                                                                                               href="#">CAREERS</a>
                            </li>

                        </ul>
                        <!-- Submenu ends -->
                    </li>
                    <li class="border-b-2 bg-blue-600 border-white hover:bg-blue-700 hover:text-white pl-4">
                        <x-navlink>{{'SERVICES'}}</x-navlink>
                        <!-- Submenu starts -->
                        <ul class="bg-blue-700 text-white w-full">
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">CLINICAL OPERATIONS
                                    AND PROJECT
                                    MANAGEMENT</a></li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">DATA MANAGEMENT</a></li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">STATISTICAL ANALYSIS</a></li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">CLINICAL DATA
                                    STANDARD</a>
                            </li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">MEDICAL WRITING</a></li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">eTMF SERVICES</a></li>
                        </ul>
                        <!-- Submenu ends -->
                    </li>

                    <li class="border-b-2 bg-blue-600 border-white hover:bg-blue-700 hover:text-white pl-4">
                        <x-navlink>{{'TECHNOLOGIES'}}</x-navlink>
                        <!-- Submenu starts -->
                        <ul class="bg-blue-700 text-white w-full">
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">ELECTRONIC DATA CAPTURE (EDC)</a></li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">CLINICAL TRIAL MANAGEMENT

                                    SOFTWARE (CTMS)</a></li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">ELECTRONIC TRIAL MASTER FILE (eTMF)</a></li>
                            <li class="text-sm leading-8 font-bold hover:text-orange-500"><a class="block pl-16"
                                                                                             href="#">INTERACTIVE RESPONSE TECHNOLOGY
                                    (IRT)</a>
                            </li>

                        </ul>
                        <!-- Submenu ends -->
                    </li>
                    <li class="border-b-2 bg-blue-600 border-white hover:bg-blue-700 hover:text-white pl-4">
                        <x-navlink>{{'CONTACT'}}</x-navlink>
                    </li>
                </ul>
            </div>
        </div>

    </nav>




</div>
<x-footer></x-footer>
</x-layout>
{{--</body>--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>--}}
{{--</html>--}}


{{--card--}}
<div class="card_table">
    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Secondary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Warning card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Info card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

</div>
