@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
program
@parent
@stop

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
        <li class="active">programs</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    program {{ $program->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $program->id }}</td></tr>
                     <tr><td>title</td><td>{{ $program['title'] }}</td></tr>
					<tr><td>description</td><td>{{ $program['description'] }}</td></tr>
					<tr><td>objective</td><td>{{ $program['objective'] }}</td></tr>
					<tr><td>approach</td><td>{{ $program['approach'] }}</td></tr>
					<tr><td>outcomes</td><td>{{ $program['outcomes'] }}</td></tr>
					<tr><td>user_id</td><td>{{ $program['user_id'] }}</td></tr>
					<tr><td>views</td><td>{{ $program['views'] }}</td></tr>
					<tr><td>file</td><td><img src="{{URL::to('uploads/crudfiles/'.$program['file'])}}" class="img-responsive" alt="Image"></td></tr>
					<tr><td>overall</td><td>{{ $program['overall'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop