@extends('layout.admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card">
                <div class="card-header">{{ __('Movies') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('admin.movie.create') }}" class="btn btn-primary">Create</a>
                    <table id="all-movies">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Title</th>

                                <th>Category</th>
                                <th>Genre</th>
                                <th>Country</th>
                                <th>Publish Year</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movies as $movie)
                                <tr>
                                    <td>{{ $movie->id }}</td>
                                    <td>
                                        <img src="{{ asset("storage/$movie->avatar") }}" alt="" srcset=""
                                            width="50px" height="50px">
                                    </td>
                                    <td>{{ $movie->title }}</td>

                                    <td>
                                        {{ $movie->category->title }}
                                    </td>
                                    <td>
                                        {{ $movie->genre->title }}
                                    </td>
                                    <td>
                                        {{ $movie->country->title }}
                                    </td>
                                    <td>
                                        {{ $movie->publish_year }}
                                    </td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.movie.destroy', $movie->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        {!! Form::open(['method' => 'GET', 'route' => ['admin.movie.edit', $movie->id]]) !!}
                                        {!! Form::submit('Edit', ['class' => 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(function() {
            $("#all-movies").DataTable();
        })
    </script>
@endsection
