
@props(['active' => false])
<a href="/" class="{{ $active ? 'block rounded-md bg-blue-900 px-3 py-2 text-base font-medium text-white' : 'block rounded-md bg-blue-800 px-3 py-2 text-base font-medium text-white' }}" aria-current="{{$active ? 'page' : 'false'}}" {{ $attributes}}">{{ $slot }}</a>
