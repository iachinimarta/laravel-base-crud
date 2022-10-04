@extends('structure.layout')
@section('page_title', 'Details')

@section('content')
        <div class="singleComic-container">
            <div class="blue-section">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="singleComic-thumb">
            </div>
            <div class="singleComic-description">
                <div class="up">
                    <h1>{{$comic['title']}}</h1>
                    <div class="singleComic-price">U.S. Price: {{$comic['price']}}</div>
                    <div class="singleComic-text">{{$comic['description']}}</div>
                </div>
                <div class="down">
                    <div class="singleComic-specs">
                        <h3>Specs</h3>
                        <div class="by">
                            <div>Series:</div>
                            <div class="right-section">{{strtoupper($comic['series'])}}</div>
                        </div>
                        <div class="by">
                            <div>U.S. Price:</div>
                            <div class="right-section">{{$comic['price']}}</div>
                        </div>
                        <div class="by">
                            <div>On Sale Date:</div>
                            <div class="right-section">{{date("d-m-Y", strtotime($comic['sale_date']))}}</div>
                        </div>
                    </div>
                    
                </div>          
            </div>      
        </div>
@endsection