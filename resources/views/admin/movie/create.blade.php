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
                        {!! Form::open(['route' => 'admin.movie.store', 'enctype' => 'multipart/form-data']) !!}
                        <div class="mb-3 row">
                            {!! Form::label('title', 'Title', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('english_title', 'English Title', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('english_title', null, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Director', 'Director', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('director', null, ['class' => 'form-control']) !!}
                            </div>

                        </div>

                        <div class="mb-3 row">
                            {!! Form::label('publish_year', 'Publish Year', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::number('publish_year', null, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('duration', 'Duration', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('duration', null, ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('descirption', 'Description', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('HashTag', 'HashTag', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('hashtags', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('status', 'Status', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('status', ['1' => 'active', '2' => 'inactive'], '1', ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Genre', 'Genre', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('genre_id', $genres, null, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Resolution', 'Resolution', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('resolution', $resolution, null, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('subtitle', 'Subtitle', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('subtitle', $subtitle, null, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Category', 'Catrgory', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('category_id', $categories, null, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Country', 'Country', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('country_id', $countries, null, ['class' => 'form-select']) !!}
                            </div>

                        </div>
                        <div class="mb-3 row">
                            {!! Form::label('Avatar', 'Avatar', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('avatar', ['class' => 'form-control']) !!}
                            </div>

                        </div>

                        <div class="mb-3 d-flex justify-content-center p-3">
                            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
