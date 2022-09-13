<head>
  <style>
    .list_body {
        width: 866px;
        height: 1150px;
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
        padding: 30px 50px;
      }

    .list_title {
      font-weight:700;
    }
  </style>
</head>

@extends('layouts.heater')

@section('content')
<div class="list_body">
    @foreach($images as $image)
    
    <div style="width: 403px; height:430px; float:left; margin:15px;">
      <div class="list_title">{{ $image->title }}</div>
      <a href="{{ route('listing.show', ['id' => $image->id] ) }}"><img src="/storage/{{ $image->listing_data }}" width="403px" height="340px"></a>
    </div>
    @endforeach
</div>
@component('components.footer')
@endcomponent
@endsection