<head>
    <link href="css/listing.css" rel="stylesheet" type="text/css">
</head>

@extends('layouts.heater')

@section('content')
<div class="listing_body">
  <h1 class="listing_production">出品する作品</h1>
  <form method="POST" action="{{ route('listing.post') }}" enctype="multipart/form-data">
    @csrf
    <p class="production">作品タイトル</p>
    @error('title')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <input type="text" name="title" placeholder="タイトルを入力してください" value="{{old('title')}}" class="input_title">
    <p class="production">作品</p>
    @error('listing_data')
      <tr><th>ERROR</th>
      <td><?php echo "出品する作品を選んでください。"?></td></tr>
    @enderror
    <input type="file" name="listing_data" value="{{old('listing_data')}}" class="input_data">
    <p class="production">金額</p>
    @error('price')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <div class="sell_quantity">
    <input type="integer" name="price" value="{{old('price')}}" class="input_price">
    <div class="quantity">円</div>
    </div>
    <p class="production">限定販売数</p>
    @error('listing_quantity')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <div class="sell_quantity">
      <input type="text" name="listing_quantity" placeholder="販売数を入力してください" value="{{old('listing_quantity')}}" class="input_quantity">
      <div class="quantity">個</div>
    </div>
    <p class="production">作品説明</p>
    @error('explanation')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <textarea name="explanation" placeholder="この作品にまつわるあなたの想いや背景などを書いてください" value="{{old('explanation')}}" class="input_explanation"></textarea>
    <button type="submit" class="listing_btn">出品確認へ</button>
  </form>
</div>
@component('components.footer')
@endcomponent
@endsection