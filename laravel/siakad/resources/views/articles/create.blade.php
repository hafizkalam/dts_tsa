@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control" required="required" name="title"></br>
                <label for="content">Content: </label>
                <textarea type="text" class="form-control" required="required" name="content"></textarea></br>
                <label for="image">Feature Image: </label>
                <input type="file" class="form-control" required="required" name="image"></br>
            </div>
            <div class="col">
                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </div>
        </form>
    </div>
@endsection
