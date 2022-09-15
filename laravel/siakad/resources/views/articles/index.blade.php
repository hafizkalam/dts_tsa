@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            
            <!-- Form Search -->
            <div class="float-left my-2">
                <form action="{{ route('articles.index') }}" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->

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
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_HP</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($article as $articles)
                <tr>
                    <td>{{ $articles->nim }}</td>
                    <td>{{ $articles->nama }}</td>
                    <td>{{ $articles->kelas->nama_kelas}}</td>
                    <td>{{ $articles->jurusan }}</td>
                    <td>{{ $articles->no_hp }}</td>
                    <td>
                        <form action="{{ route('articles.destroy',$articles->nim) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('articles.show',$articles->nim) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('articles.edit',$articles->nim) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a class="btn btn-warning" href="{{ route('articles.nilai', $articles->nim) }}">Nilai</a>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>            
@endsection