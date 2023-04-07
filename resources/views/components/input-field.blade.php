@props(['type'=>'',
        'placeholder'=>'',
        'id'=>'',
        'name'=>''
])
    <input {{$attributes->merge([ 'class'=>'border-2 border-black-600'])}} type="{{$type}}" placeholder="{{$placeholder}}" id="{{$id}}" name={{$name}}>
