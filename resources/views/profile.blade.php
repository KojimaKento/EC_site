<head>
  <link href="css/profile.css" rel="stylesheet" type="text/css">
</head>

@extends('layouts.heater') 

@section('content')
  <div class="profile_body">
    <div class="profile_header">プロフィール編集</div>
    <div class="profile_contents">
      <form action="{{ route('profile.update') }}" method="post">
        @csrf
        <!-- <p>ID: {{ $users->id }}</p>
        <input type="hidden" name="id" value="{{ $users->id }}" /> -->
        @error('username')
          <tr><th>ERROR</th>
          <td>{{$message}}</td></tr>
        @enderror
        <div class="profile_text">ユーザー名</div>
          <input class="profile_text_input" type="text" name="username" value="{{ $users->username }}" />
        <div class="profile_text">職種</div>
          <input class="profile_text_input" type="text" name="creator_type" value="{{ $users->creator_type }}" >
        <div class="profile_text">プロフィール</div>
          <textarea type="text" name="profile" >{{ $users->profile }}</textarea>
        <button type="submit" class="profile_btn" >更新する</button>
      </form>
    </div>
  </div>
  @component('components.footer')
  @endcomponent
@endsection