<html>
  <head>
    <title>Hello/Index</title>
    <style>
      body {font-size:16pt; color:#999;}
      h1 {font-size:50pt; text-align:right; color:#f6f6f6;
          margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    </style>
    <!-- <link href="css/register.css" rel="stylesheet" type="text/css"> -->
  </head>
  <body>
    @extends('layouts.helloapp')

    @section('title', 'Index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        @if (Auth::check())
        <p>USER: {{$user->name .'(' . $user->email . ')'}}</P>
        @else
        <p>※ログインしていません。(<a href="/login">ログイン</a>|
          <a href="/register">登録</a>)</p>
        @endif
    @endsection

    @section('footer')
    copyright 2020 tuyano.
    @endsection
  </body>
</html>