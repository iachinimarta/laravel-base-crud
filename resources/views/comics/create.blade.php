@extends('structure.layout')

@section('title', 'Comics')

@section('content')
    @if (session('status'))
        <h1 class="t_white t_center">
            {{ session('status') }}
        </h1>
    @endif
    <form class="createNew" action="{{route('comics.store')}}" method="POST">

        @csrf

        <div>
            <label for="comicTitle">Comic Title</label>
            <input type="text" class="form-control" id="comicTitle" name="title">
        </div>
        <div>
            <label for="imageSrc">Image Src</label>
            <input type="text" id="imageSrc" name="thumb">
        </div>
        <div>
            <label for="comicPrice">Comic Price</label>
            <input type="text" class="form-control" id="comicPrice" name="price">
        </div>
        <div>
            <label for="comicSeries">Comic Series</label>
            <input type="text" id="comicSeries" name="series">
        </div>
        <div>
            <label for="saleDate">Sale Date</label>
            <input type="text" id="saleDate" name="sale_date">
        </div>
        <div>
            <label for="comicType">Comic Type</label>
            <input type="text" id="comicType" name="type">
        </div>
        <div>
            <label for="floatingTextarea">Comic Description</label>
            <textarea id="floatingTextarea" name="description"></textarea>        
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection