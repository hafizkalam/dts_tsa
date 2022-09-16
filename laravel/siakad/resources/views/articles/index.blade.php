@extends('layouts.app')
@section('content')
    <div class="row">
        <div style="margin:0px 0px 0px 70px;">
            <a class="btn btn-success" href="{{ route('cetak_pdf') }}">Cetak PDF</a>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Input Articles</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Konten</th>
            <th>Foto</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($article as $articles)
                <tr>
                    <td>{{ $articles->title }}</td>
                    <td>{{ $articles->content }}</td>
                    <td class="list-group-item"><img width="100px" src="{{asset('storage/'.$articles->feature_image)}}"></td>
                    <td>
                        <form action="{{ route('articles.destroy',$articles->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('articles.edit',$articles->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection
