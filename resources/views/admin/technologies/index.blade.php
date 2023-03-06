@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>ELENCO TECNOLOGIE</h2>
                    </div>
                    <div>
                        {{-- <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-primary">Aggiungi post</a> --}}
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Slug</th>
                    </thead>
                    <tbody>
                        @foreach ($technologies as $technology)
                            <tr>
                                <td>{{ $technology->id}}</td>
                                <td>{{ $technology->name}}</td>
                                <td>{{ $technology->slug}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection