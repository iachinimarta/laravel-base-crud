@extends('structure.layout')

@section('title', 'Edit Comic')

@section('content')
    @if (session('status'))
        <h1 class="t_blue t_center">
            {{ session('status') }}
        </h1>
    @endif
    <form class="createNew" action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="comicTitle">Comic Title</label>
            <input type="text" class="form-control" id="comicTitle" name="title" value="{{old('title', $comic->title)}}">
            @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="imageSrc">Image Src</label>
            <input type="text" id="imageSrc" name="thumb" value="{{old('title', $comic->thumb)}}">
            @error('thumb')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="comicPrice">Comic Price</label>
            <input type="text" class="form-control" id="comicPrice" name="price" value="{{$comic->price}}">
            @error('price')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="comicSeries">Comic Series</label>
            <input type="text" id="comicSeries" name="series" value="{{$comic->series}}">
            @error('series')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="saleDate">Sale Date</label>
            <input type="text" id="saleDate" name="sale_date" value="{{old('title', $comic->sale_date)}}">
            @error('sale_date')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="comicType">Comic Type</label>
            <input type="text" id="comicType" name="type" value="{{old('title', $comic->type)}}">
            @error('type')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="floatingTextarea">Comic Description</label>
            <textarea id="floatingTextarea" name="description">{{old('title', $comic->title)}}</textarea>        
            @error('description')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
            @enderror 
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection