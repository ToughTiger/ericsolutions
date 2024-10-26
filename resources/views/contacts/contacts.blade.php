
<x-page_layout :meta="$meta">
<div class="main">
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
                    <img src="{{URL::asset('assets/img/Logo_animation.gif')}}" alt="eric_logo" style="object-fit: cover; width: 100%" height="100%">
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
                        @foreach($errors->all() as $error)
                            <ul><li class="text-danger">{{$error}}</li></ul>
                        @endforeach
                </div>
            </section>

        </div>
        {!! Toastr::message() !!}
    </div>
</div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
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
