<head>
    <link href="css/top.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</head>


@extends('layouts.heater')

@section('content')
<div class="top_body">
    @foreach($list_images as $list_image)
    <div style="width: 403px; height:455px; float:left; margin: 15px;">
        @guest
        @else
            <?php if (Auth::user()->admin == 1){ ?>
                <form action="{{route('delete')}}" method="post">
                    @csrf
                    <input type="hidden" name="listing_id" value="{{$list_image['id']}}">
                    <input class="listing_delete" type="submit" value="削除">
                </form>
            <?php } ?>
        @endguest
        <a href="{{ route('listing.show', ['id' => $list_image->id] ) }}"><img src="/storage/{{ $list_image->listing_data }}" width="403px" height="340px"></a>
        <div class="list_quantity">
            <div class="stock_text">残り</div>
            <div class="stock_numbers">{{ $list_image->listing_quantity }}</div>
            <div class="quantity_text">個</div>
        </div>
        <div class="list_title">{{ $list_image->title }}</div>
        <div class="price_contents">
            <div class="list_price">{{ $list_image->price }}</div>
            <div class="list_yen">円</div>
        </div>
    </div>
    @endforeach
</div>
    {{ $list_images -> links() }}
@component('components.footer')
@endcomponent
@endsection