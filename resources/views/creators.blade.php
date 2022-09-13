<head>
    <link href="css/creators.css" rel="stylesheet" type="text/css">
</head>

@extends('layouts.heater')

@section('content')
  <div class="creators_body">
    @if (isset($creators))
      @foreach ($creators as $creator)
        <div class="creators_contents">
          <div class="creator_name">{{$creator->username}}</div>
        </div>
      @endforeach
    @endif
  </div>
@component('components.footer')
@endcomponent
@endsection