@extends('structure.layout')

@section('title', 'Comics')

@section('content')
    <div class="comics-container">
        <div class="current-series btn">CURRENT SERIES</div>
        <div class="card-container">
            @foreach ($comics as $item)
                <div class="card">
                    <a href="{{route('comics.show', ['comic' => $item])}}">
                        <img src="{{$item->thumb}}" alt="{{$item->title}}">
                        <div>{{$item->series}}</div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="d-flex">
            <div class="btn">
                <a href="#">
                    LOAD MORE
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="bonus">
        <ul>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="digital-comics">
                </div>
                <h3>
                    DIGITAL COMICS
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="merchandise">
                </div>
                <h3>
                    DC MERCHANDISE
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="subscription">
                </div>
                <h3>
                    SUBSCRIPTION
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="shop-locator">
                </div>
                <h3>
                    COMIC SHOP LOCATOR
                </h3>
            </li>
            <li>
                <div class="img-container">
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="power-visa">
                </div>
                <h3>
                    DC POWER VISA
                </h3>
            </li>
        </ul>
    </div> --}}
@endsection