<head>
  <style>
    .buy_list {
        width: 866px;
        height: 1150px;
        background-color: #fff;
        margin-left: auto;
        margin-right: auto;
        padding: 30px 50px;
      }

    .bought_title {
      font-weight:700;
    }
  </style>
</head>

@extends('layouts.heater')

@section('content')
<div class="buy_list">
    @foreach($bought_datas as $bought_data)
      <div class="bought_title">{{ $bought_data->bought_title }}</div>
      <div style="width: 352px; height:240px; float:left; margin-top: 10px;">
        <a href="#"><img src="/storage/{{ $bought_data->bought_data }}" width="350px" height="240px"></a>
      </div>
    @endforeach
</div>
@component('components.footer')
@endcomponent
@endsection