@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a member
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Members</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>members</li>
        <li class="active">Create New member</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit member
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

                    {!! Form::model($member, ['method' => 'PATCH', 'action' => ['MembersController@update', $member->id],'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name: ') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('description', 'Description: ') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('designation', 'Designation: ') !!}
                        {!! Form::text('designation', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('education', 'Education: ') !!}
                        {!! Form::text('education', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('profession', 'Profession: ') !!}
                        {!! Form::text('profession', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('remarks', 'Remarks: ') !!}
                        {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('filePath', 'Filepath: ') !!}
                        <div>
                       
                        <img src="{{URL::to('uploads/crudfiles/'.$member['filePath'])}}" style="height: 100px;width: 100px;" alt="Image">
                        </div>
                        &nbsp; {!! Form::file('filePath_image', ['class' => 'form-control']) !!}

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