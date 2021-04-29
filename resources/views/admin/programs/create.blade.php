@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New program
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Programs</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>programs</li>
        <li class="active">Create New program</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new program
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

                    {!! Form::open(['url' => 'admin/programs','files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title: ') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('description', 'Description: ') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('objective', 'Objective: ') !!}
                        {!! Form::textarea('objective', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('approach', 'Approach: ') !!}
                        {!! Form::textarea('approach', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('outcomes', 'Outcomes: ') !!}
                        {!! Form::textarea('outcomes', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('user_id', 'User Id: ') !!}
                        {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('views', 'Views: ') !!}
                        {!! Form::text('views', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('file', 'File: ') !!}
                        &nbsp; {!! Form::file('file_image', ['class' => 'form-control']) !!}

                    </div>

					<div class="form-group">
                        {!! Form::label('overall', 'Overall: ') !!}
                        {!! Form::textarea('overall', null, ['class' => 'form-control']) !!}
                    </div>

					

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href="{{ route('admin.programs.index') }}">
                                @lang('button.cancel')
                            </a>
                            <button type="submit" class="btn btn-success">
                                @lang('button.save')
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>

@stop