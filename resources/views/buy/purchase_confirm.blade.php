<head>
  <link href="../../css/buy.css" rel="stylesheet" type="text/css">
  <style>
  </style>
</head>



@extends('layouts.heater')

@section('content')

<div class="purchase_confirm_body">
  <form method="POST" action="{{ route('buy.send', ['id' => $purchase_confirm->id]) }}" enctype="multipart/form-data">
    @csrf
    <p>{{ $purchase_confirm->title }}</p>
    <div class="purchase_production"><img src="/storage/{{ $purchase_confirm->listing_data }}" width="866px" height="500px"></div>
    <div class="price_and_yen">
      <div class="show_price">{{ $purchase_confirm->price }}</div>
      <div class="show_price_yen">円</div>
    </div>
    <button type="submit" class="purchase_btn">購入する</button>
  </form>
</div>
@component('components.footer')
@endcomponent
@endsection