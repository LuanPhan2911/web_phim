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

                        <a href="{{route('admin.category.create')}}" class="btn btn-primary">Create</a>
                        <table class="table table-success table-striped">
                           <thead>
                           <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Desciption</th>
                            <th>Active/Inactive</th>
                            <th>Control</th>
                           </tr>
                           </thead>
                           <tbody>
                                @foreach ($categories as $each )
                                    <tr>
                                        <td>{{$each->id}}</td>
                                        <td>{{$each->title}}</td>
                                        <td>{{$each->description}}</td>
                                        <td>
                                            {{$each->status=='1'? "Active": "Inactive"}}
                                        </td>
                                        <td>
                                            {!! Form::open(['method'=>'DELETE', 'route'=>['admin.category.destroy', $each->id]]) !!}
                                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            {!! Form::open(['method'=>'GET', 'route'=>['admin.category.edit', $each->id]]) !!}
                                                {!! Form::submit('Edit', ['class'=>'btn btn-warning']) !!}
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
@endsection
