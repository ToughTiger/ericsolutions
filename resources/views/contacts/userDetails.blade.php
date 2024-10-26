<x-layout>
<main class="main">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                    <h3>User Profile</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ URL::asset('storage/'.$user->image_url) }}" alt="Profile Picture" class="rounded-circle" width="150" height="150">
                    </div>

                    <h5 class="card-title text-center">{{ $user->name }}</h5>
{{--                    <p class="card-text text-center">{{ $user->email }}</p>--}}

                    <hr>

                    <h6>About Me</h6>
                    <p>{{ $user->bio }}</p>

                    <hr>

                    <h6>Contact Information</h6>
                    <ul class="list-unstyled">
                        <li><strong>Phone:</strong> {{ $user->phone }}</li>
                        <li><strong>Email:</strong> {{ $user->email }}</li>
                    </ul>

                    <hr>

                    <h6>Social Media</h6>
                    <ul class="list-inline text-center">
{{--                        @if($user->facebook)--}}
                            <li class="list-inline-item">
                                <a href="{{ $user->facebook }}" class="btn btn-primary btn-sm" target="_blank">Facebook</a>
                            </li>
{{--                        @endif--}}
{{--                        @if($user->twitter)--}}
                            <li class="list-inline-item">
                                <a href="{{ $user->twitter }}" class="btn btn-info btn-sm" target="_blank">Twitter</a>
                            </li>
{{--                        @endif--}}
{{--                        @if($user->linkedin)--}}
                            <li class="list-inline-item">
                                <a href="{{ $user->linkedin }}" class="btn btn-success btn-sm" target="_blank">LinkedIn</a>
                            </li>
{{--                        @endif--}}
                    </ul>

                    <hr>


                </div>
            </div>
        </div>
    </div>
</div>
</main>
    <x-footer></x-footer>
</x-layout>
