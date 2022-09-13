<head>
  <link href="../css/listing.css" rel="stylesheet" type="text/css">
  <style>
    .complete_body {
      width: 866px;
      height: 433px;
      background-color: #fff;
      margin-left: auto;
      margin-right: auto;
      padding: 30px 50px;
    }

    .complete_text {
      text-align:center;
      margin-top:150px;
    }
  </style>
</head>

@extends('layouts.heater')

@section('content')
<div class="complete_body">
  <div class="complete_text">
    <p>購入しました！</p>
    <p><a href="/">トップページへ</a></p>
  </div>
</div>
@component('components.footer')
@endcomponent
@endsection