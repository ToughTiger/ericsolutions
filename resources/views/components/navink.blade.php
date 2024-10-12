@props(['active' => false])
<a class="{{ $active ? 'rounded-md px-3 py-2 text-sm font-medium bg-gray-900 text-white' :'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white'}}"
   area-current="{{$active ? 'page' : 'false'}}" {{ $attributes}}>{{ $slot}}</a>