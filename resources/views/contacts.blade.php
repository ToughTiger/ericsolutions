
<x-page_layout>

    <div class="section">
        <div class="innerwrap">
            <section class="section1 clearfix">
                <div class="textcenter">

                    <span class="seperator"></span>
                    <h1>Drop Us a Mail</h1>
                </div>
            </section>

            <section class="section2 clearfix">
                <div class="col2 column1 first">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
                <div class="col2 column2 last">
                    <div class="sec2innercont">
                        <div class="sec2addr">
                            <p>621 E Tropical Way Plantation FL 33317</p>
                            <p><span class="collig">Phone :</span> +1-786-636-5556</p>
                            <p><span class="collig">Email :</span> Info@ericsolutions.com</p>
                        </div>
                    </div>
                    <div class="sec2contactform">
                        <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
                        <form action="/visitor" method="POST">
                            @csrf
                            <div class="clearfix">
                                <input class="col2 first" type="text" name="first_name" placeholder="FirstName">
                                <input class="col2 last" type="text" name="last_name" placeholder="LastName">
                            </div>
                            <div class="clearfix">
                                <input  class="col2 first" type="Email" name="email" placeholder="Email">
                                <input class="col2 last" type="text" name="phone" placeholder="Contact Number">
                            </div>
                            <div class="clearfix">
                                <textarea name="message" id="" cols="30" rows="7" placeholder="Your message"></textarea>
                            </div>
                            <div class="clearfix"><input type="submit" value="Send"></div>
                        </form>
                    </div>

                </div>
            </section>

        </div>
        {!! Toastr::message() !!}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif
    </script>

</x-page_layout>
