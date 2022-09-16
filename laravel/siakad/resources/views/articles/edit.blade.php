@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/articles/{{$article->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image" value="{{$article->feature_image}}"></br>
            <img width="150px" src="{{asset('storage/'.$article->feature_image)}}">
        </div>
        <div class="col">
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
        </form>
    </div>
@endsection
