@extends('layout.admin.master')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="card">
                <div class="card-header">{{ __('Movie') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container col-lg-6">
                        {!! Form::open([
                            'route' => ['admin.movie.update', $movie->id],
                            'enctype' => 'multipart/form-data',
                            'method' => 'PUT',
                        ]) !!}
                        <div class="mb-3 row">
                            {!! Form::label('title', 'Title', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title', $movie->title, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('english_title', 'English Title', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('english_title', $movie->english_title, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Director', 'Director', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('director', $movie->director, ['class' => 'form-control']) !!}
                            </div>

                        </div>

                        <div class="mb-3 row">
                            {!! Form::label('publish_year', 'Publish Year', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::number('publish_year', $movie->publish_year, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('duration', 'Duration', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('duration', $movie->duration, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('descirption', 'Description', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('description', $movie->description, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('HashTag', 'HashTag', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('hashtags', $movie->getRawOriginal('hashtags'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('status', 'Status', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('status', ['1' => 'active', '0' => 'inactive'], $movie->active, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Genre', 'Genre', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('genre_id', $genres, $movie->genre_id, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Resolution', 'Resolution', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('resolution', $resolution, $movie->getRawOriginal('resolution'), ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('subtitle', 'Subtitle', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('subtitle', $subtitle, $movie->getRawOriginal('subtitle'), ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('TopView', 'Top View', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('top_view', $top_views, $movie->getRawOriginal('top_view'), ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Category', 'Catrgory', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('category_id', $categories, $movie->category_id, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Country', 'Country', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('country_id', $countries, $movie->country_id, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Hot movie', 'Hot Movie', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('is_hot', ['1' => 'Hot', '0' => 'None'], $movie->is_hot, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Avatar', 'Avatar', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('avatar', ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        @if ($movie->avatar)
                            <img src="{{ asset("storage/$movie->avatar") }}" alt="" srcset="" width="100px"
                                height="100px">
                        @endif

                        <div class="mb-3 d-flex justify-content-center p-3">
                            {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
