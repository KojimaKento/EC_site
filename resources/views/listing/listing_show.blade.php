<head>
  <link href="../../css/listing.css" rel="stylesheet" type="text/css">
  <style>
    .show_body {
        width: 866px;
        height: 1500px;
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
        padding: 30px 50px;
      }
  </style>
</head>



@extends('layouts.heater')

@section('content')
<div class="show_body">
  <p>{{ $show->title }}</p>
  <div class="stock_contents">
    <div class="stock_text">残り</div>
    <div class="stock_text">{{ $show->listing_quantity }}</div>
    <div class="stock_text">個</div>
  </div>
  <div class="show_production"><img src="/storage/{{ $show->listing_data }}" width="866px" height="500px"></div>
  <div class="explanation_title">商品説明</div>
  <div class="show_explanation">
    <div class="explanation_texts">{!! nl2br(e($show->explanation)) !!}</div>
  </div>
  <div class="show_price_contents">
    <div class="price_text">作品価格</div>
    <div class="price_and_yen">
      <div class="show_price">{{ $show->price }}</div>
      <div class="show_price_yen">円</div>
    </div>
  </div>
  <div class="support_price">
    <?php 
      $result = $show->price  - ( $show->price  * 0.1);
      echo $result;
    ?>
    円が作品の出品者に支払われます
  </div>
  @guest
  @else
    <a href="{{ route('buy.purchase', ['id' => $show->id] ) }}"><button class="listing_show_btn">購入画面へ</button></a>
  @endguest
</div>
@component('components.footer')
@endcomponent
@endsection
