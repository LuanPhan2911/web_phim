@extends('layout.admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container col-lg-6">
                            {!! Form::open(['route'=>['admin.category.update', $category->id], 'method'=>'PUT'], ) !!}
                            <div class="mb-3 row">
                                {!! Form::label('title', 'Title', ['class'=>'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('title', $category->title, ['class'=>'form-control']) !!}
                                </div>
                                
                            </div>
                            <div class="mb-3 row">
                                {!! Form::label('descirption', 'Description', ['class'=>'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('description', $category->description, ['class'=>'form-control']) !!}
                                </div>
                                
                            </div>
                            <div class="mb-3 row">
                                {!! Form::label('status', 'Status', ['class'=>'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                   {!! Form::select('status', ['1'=>'active', '2'=>'inactive'], $category->status, ['class'=>'form-select']) !!}
                                </div>
                               <div class="mb-3 d-flex justify-content-center p-3">
                                {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                               </div>
                                
                            </div>
                       {!! Form::close() !!}
                        </div>
                  
                </div>
            </div>
        </div>
   
</div>
@endsection
