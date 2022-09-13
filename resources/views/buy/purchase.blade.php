<head>
  <link href="../../css/buy.css" rel="stylesheet" type="text/css">
  <style>
  </style>
</head>



@extends('layouts.heater')

@section('content')

<div class="purchase_body">
    <p>{{ $purchase->title }}</p>
    <div class="purchase_production"><img src="/storage/{{ $purchase->listing_data }}" width="866px" height="500px"></div>
    <select name='purchase_quantity' class="purchase_quantity">
      <option value="" hidden>個数を選択してください</option>
      <?php
        for ($i = $purchase->listing_quantity; $i > 0; $i = $i - 1) {
          echo '<option value="' . $i. '">' . $i . '</option>';
        }
      ?>
    </select>
    <div class="price_and_yen">
      <div class="show_price">{{ $purchase->price }}</div>
      <div class="show_price_yen">円</div>
    </div>
    <a href="{{ route('buy.confirm', ['id' => $purchase->id] ) }}"><button type="submit" class="purchase_btn">購入確認画面へ</button></a>
</div>
@component('components.footer')
@endcomponent
@endsection