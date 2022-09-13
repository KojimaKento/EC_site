<head>
    <link href="css/home.css" rel="stylesheet" type="text/css">
</head>

@extends('layouts.heater')

@section('content')
<div class="home_body">
    <div class="home_username">
        @if (Route::has('login'))
            @auth
                <div class="login_username_text">{{ Auth::user()->username }}</div>
            @endauth
        @endif
    </div>
    <div class="home_creator">
        <div class="creator_name">クリエイター名:</div>
        <div class="creator_type">{{ Auth::user()->creator_type }}</div>
    </div>
    @if (Route::has('login'))
            @auth
                <a href="profile" class ="LoginUser_btn">編集</a>
            @endauth
     @endif
    <div class="home_profile">
        {!! nl2br(e(Auth::user()->profile)) !!}
    </div>
    <div class="home_to_transition">
        <p class="link_text"><a href="listing">作品を出品する</a></P>
    </div>
    <div class="home_to_transition">
        <p class="link_text"><a href="listing_list">出品一覧へ</a></P>
    </div>
    <div class="home_to_transition">
    <p class="link_text"><a href="purchase_list">購入一覧へ</a></P>
    </div>
</div>
@component('components.footer')
@endcomponent
@endsection


