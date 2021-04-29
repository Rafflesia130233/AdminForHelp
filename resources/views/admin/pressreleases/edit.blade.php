@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a pressrelease
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Pressreleases</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>pressreleases</li>
        <li class="active">Create New pressrelease</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit pressrelease
                    </h4>
                </div>
                <div class="panel-body">
                     @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($pressrelease, ['method' => 'PATCH', 'action' => ['PressreleasesController@update', $pressrelease->id],'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title: ') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('description', 'Description: ') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('filePath', 'Filepath: ') !!}
                        <div>
                       
                        <img src="{{URL::to('uploads/crudfiles/'.$pressrelease['filePath'])}}" style="height: 100px;width: 100px;" alt="Image">
                        </div>
                        &nbsp; {!! Form::file('filePath_image', ['class' => 'form-control']) !!}

                    </div>

					<div class="form-group">
                        {!! Form::label('source', 'Source: ') !!}
                        {!! Form::text('source', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('destination', 'Destination: ') !!}
                        {!! Form::text('destination', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('overall', 'Overall: ') !!}
                        {!! Form::text('overall', null, ['class' => 'form-control']) !!}
                    </div>

					

                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@stop