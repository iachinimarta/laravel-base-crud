@extends('structure.layout')

@section('title', 'Comics')

@section('content')
    <form>
        <div>
            <label for="imageSrc">Image Src</label>
            <input type="text" id="imageSrc">
        </div>
        <div>
            <label for="comicTitle">Comic Title</label>
            <input type="text" class="form-control" id="comicTitle">
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection