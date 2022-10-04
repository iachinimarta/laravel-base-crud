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
            <input type="text" class="form-control" id="comicTitle" name="title" value="{{$comic->title}}">
        </div>
        <div>
            <label for="imageSrc">Image Src</label>
            <input type="text" id="imageSrc" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div>
            <label for="comicPrice">Comic Price</label>
            <input type="text" class="form-control" id="comicPrice" name="price" value="{{$comic->price}}">
        </div>
        <div>
            <label for="comicSeries">Comic Series</label>
            <input type="text" id="comicSeries" name="series" value="{{$comic->series}}">
        </div>
        <div>
            <label for="saleDate">Sale Date</label>
            <input type="text" id="saleDate" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div>
            <label for="comicType">Comic Type</label>
            <input type="text" id="comicType" name="type" value="{{$comic->type}}">
        </div>
        <div>
            <label for="floatingTextarea">Comic Description</label>
            <textarea id="floatingTextarea" name="description">{{$comic->description}}</textarea>        
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection