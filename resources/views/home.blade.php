@extends('layouts/main-layout')


@section('main-section')

<div id="jumbotron">

</div>

<div id="main-section" class="container">
    <div id="comics-tag">
        <h3>Current Series</h3>
    </div>

    <div class="row">
        @foreach($comics as $singleComic)

        <div class="col-2">
            <div class="image-container">
                <img src="{{$singleComic['thumb'] }}" alt="">
            </div>
            <span>{{$singleComic['series']}}</span>
        </div>
        @endforeach

    </div>

</div>
@endsection