<head>
    <link href="css/listing.css" rel="stylesheet" type="text/css">
    <style>
      .confirm_body {
        width: 866px;
        height: 1150px;
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
        padding: 30px 50px;
      }

      .production {
        margin-top: 50px;
        font-size: 20px;
        font-weight: 700;
        width: 120px;
      }

      textarea {
        border: solid 1px #3300FF;
        background-color: #BAD3FF;
        border-radius: 6px;
      }

      .input_title {
        height: 40px;
        width: 866px;
      }
      input {
        border: solid 1px #3300FF;
        background-color: #BAD3FF;
        border-radius: 6px;
        display: block;
      }

      .confirm_title {
        height: 40px;
        width: 866px;
        border: solid 1px #3300FF;
        background-color: #BAD3FF;
        border-radius: 6px;
        padding-left: 10px;
        padding-top: 10px;
      }

      .confirm_data {
        height: 70px;
        width: 866px;
        border: solid 1px #3300FF;
        background-color: #BAD3FF;
        border-radius: 6px;
      }

      .confirm_price {
        height: 40px;
        width: 100px;
        border: solid 1px #3300FF;
        background-color: #BAD3FF;
        border-radius: 6px;
        text-align: center;
        padding-top: 10px;
      }

      .confirm_quantity {
        height: 40px;
        width: 100px;
        border: solid 1px #3300FF;
        background-color: #BAD3FF;
        border-radius: 6px;
        padding-top: 10px;
        text-align: center;
      }

      .sell_quantity {
        display: flex;
      }

      .quantity {
        font-size: 20px;
        font-weight: 700;
        margin-left: 10px;
        margin-top: 25px;
      }

      .confirm_explanation {
        height: 110px;
        width: 866px;
        padding: 10px;
      }

      button {
        border: solid 1px #3300FF;
        background-color: #005FFF;
      }

      .listing_btn {
        margin-top: 50px;
        height: 50px;
        width: 866px;
        text-align: center;
        color: #fff;
        font-weight: 700;
        border-radius: 6px;
      }
    </style>
</head>

@extends('layouts.heater')

@section('content')
<div class="confirm_body">
  <h1 class="listing_production">?????????????????????</h1>
  <form method="POST" action="{{ route('listing.send') }}" enctype="multipart/form-data">
    @csrf
    <p class="production">??????????????????</p>
    <div class="confirm_title" name="title">{{ $data["title"] }}</div>
    <p class="production">??????</p>
    <img src="/storage/{{ $data['upload_path'] }}" width="300px" height="200px">
    <p class="production">??????</p>
    <div class="sell_quantity">
      <div type="integer" name="price" class="confirm_price">{{ $data["price"] }}</div>
      <div class="quantity">???</div>
    </div>
    <p class="production">???????????????</p>
    <div class="sell_quantity">
      <div type="text" name="listing_quantity" class="confirm_quantity">{{ $data["listing_quantity"] }}</div>
      <div class="quantity">???</div>
    </div>
    <p class="production">????????????</p>
    <textarea name="explanation" class="confirm_explanation">{!! nl2br(e($data["explanation"])) !!}</textarea>
    <button type="submit" class="listing_btn">????????????</button>
  </form>
</div>
@component('components.footer')
@endcomponent
@endsection