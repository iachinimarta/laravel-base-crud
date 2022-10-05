@extends('structure.layout')

@section('title', 'New Comic')

@section('content')
    @if (session('status'))
        <h1 class="t_blue t_center">
            {{ session('status') }}
        </h1>
    @endif
    <form class="createNew" action="{{route('comics.store')}}" method="POST">

        @csrf

        <div>
            <label for="comicTitle">Comic Title</label>
            <input type="text" class="form-control" id="comicTitle" name="title" value="{{old('title')}}">
            @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="imageSrc">Image Src</label>
            <input type="text" id="imageSrc" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="comicPrice">Comic Price</label>
            <input type="text" class="form-control" id="comicPrice" name="price" value="{{old('price')}}">
            @error('price')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="comicSeries">Comic Series</label>
            <input type="text" id="comicSeries" name="series" value="{{old('series')}}">
            @error('series')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="saleDate">Sale Date</label>
            <input type="text" id="saleDate" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="comicType">Comic Type</label>
            <input type="text" id="comicType" name="type" value="{{old('type')}}">
            @error('type')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="floatingTextarea">Comic Description</label>
            <textarea id="floatingTextarea" name="description">{{old('description')}}</textarea>
            @error('description')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror        
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection