<x-page_layout>


        <!-- Service Details Section -->
        <section id="service-details" class="service-details section dark-background">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-box">
                            <h4 class="text-uppercase">Services List</h4>
                            <div class="services-list">
                                @foreach( $services as $data)

                                <a href="#" data-value="{{$data->id}}"><i class="bi bi-arrow-right-circle" ></i><span>{{ $data->name }}</span></a>

                                @endforeach
                            </div>
                        </div><!-- End Services List -->

                        <div class="service-box">
                            <h4>Download Catalog</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                            </div>
                        </div><!-- End Services List -->

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
                        </div>

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h3 id="service_heading"></h3>
                        <p id="service_p1">

                        </p>
                        <p id="service_p2">

                        </p>
                        <h3 id="service_offer">Services Offered By ERIC</h3>
                        <ul id="service_list">
                        </ul>

                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->


     <script>
         function clearArray(){
             retrievedPara = []
             service_list.innerHTML = "";
         }
         let service_heading = document.querySelector('#service_heading')
         let service_offer = document.querySelector('#service_offer')
         let service_p1 = document.querySelector('#service_p1')
         let service_p2 = document.querySelector('#service_p2')
         let service_list = document.querySelector('#service_list')
         let li = document.createElement('li')
         let i = document.createElement('i')
         let span = document.createElement('span')
         i.setAttribute('class',"bi bi-check-circle")
         let retrievedPara = []
         function fetchService (id) {
             $.ajax({
                 type:'get',
                 url: '/services/'+id,
                 dataType: 'json',
                 success: function(data) {
                     data.forEach(service => {
                         let serviceDetails = JSON.parse( service.description)
                         service_heading.innerHTML = service.name
                         service_p1.innerHTML = serviceDetails.description.p1
                         service_p2.innerHTML = serviceDetails.description.p2

                         for(let list in serviceDetails.Services_Offered_by_ERIC){

                             retrievedPara.push(serviceDetails.Services_Offered_by_ERIC[list])
                             console.log(retrievedPara)

                         }
                         for(let j = 0; j< retrievedPara.length; j++){
                             let li = document.createElement('li')
                             let i = document.createElement('i')
                             let span = document.createElement('span')
                             i.setAttribute('class',"bi bi-check-circle")
                             service_list.appendChild(li)
                             li.appendChild(i)
                             i.setAttribute('class', 'bi bi-check-circle')
                             li.appendChild(span)
                             span.innerHTML = retrievedPara[j]
                             // retrievedPara.splice(0, retrievedPara.length)

                         }

                     })

                 },
                 error: function(data) {
                     // handle error
                 }
             });

         }
         // Dom Manipulation


        $( document ).ready(function() {
                fetchService(1)
            $('a').on('click', function(){
                clearArray();
                $("a").removeClass("active");
                $(this).addClass("active");
                let id = $(this).data("value")
                fetchService(id)


            })

     })
    </script>
</x-page_layout>
