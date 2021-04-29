@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a donorandpartner
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Donorandpartners</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>donorandpartners</li>
        <li class="active">Create New donorandpartner</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit donorandpartner
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

                    {!! Form::model($donorandpartner, ['method' => 'PATCH', 'action' => ['DonorandpartnersController@update', $donorandpartner->id],'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title: ') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('donationfor', 'Donationfor: ') !!}
                        {!! Form::text('donationfor', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('organizationname', 'Organizationname: ') !!}
                        {!! Form::text('organizationname', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('description', 'Description: ') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
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
                        {!! Form::label('image', 'Image: ') !!}
                        <div>
                       
                        <img src="{{URL::to('uploads/crudfiles/'.$donorandpartner['image'])}}" style="height: 100px;width: 100px;" alt="Image">
                        </div>
                        &nbsp; {!! Form::file('image_image', ['class' => 'form-control']) !!}

                    </div>

					<div class="form-group">
                        {!! Form::label('overall', 'Overall: ') !!}
                        {!! Form::text('overall', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('donationammount', 'Donationammount: ') !!}
                        {!! Form::text('donationammount', null, ['class' => 'form-control']) !!}
                    </div>

                         <div class="form-group">
                             {!! Form::label('donorandorpartner', 'Donorand or Partner: ') !!}
                             {!! Form::text('donorandorpartner', null, ['class' => 'form-control']) !!}
                         </div>
                         <div class="form-group">
                             {!! Form::label('fieldofdonation', 'Field of Donation: ') !!}
                             {!! Form::text('fieldofdonation', null, ['class' => 'form-control']) !!}
                         </div>
                         <div class="form-group">
                             {!! Form::label('fieldofpartnership', 'Field of Partnership: ') !!}
                             {!! Form::text('fieldofpartnership', null, ['class' => 'form-control']) !!}
                         </div>
                         <div class="form-group">
                             {!! Form::label('weblink', 'Weblink: ') !!}
                             {!! Form::text('weblink', null, ['class' => 'form-control']) !!}
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