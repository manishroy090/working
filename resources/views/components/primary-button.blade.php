@props(['id'=>"",
'type'=>""])

<button type='{{$type}}' {{$attributes->merge(['class'=>'bg-blue-600 h-9 mt-4 text-white px-3'])}}id="{{$id}}">{{$slot}}</button>