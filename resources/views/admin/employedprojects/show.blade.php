@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
employedproject
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Employedprojects</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>employedprojects</li>
        <li class="active">employedprojects</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    employedproject {{ $employedproject->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $employedproject->id }}</td></tr>
                     <tr><td>title</td><td>{{ $employedproject['title'] }}</td></tr>
					<tr><td>description</td><td>{{ $employedproject['description'] }}</td></tr>
					<tr><td>user_id</td><td>{{ $employedproject['user_id'] }}</td></tr>
					<tr><td>views</td><td>{{ $employedproject['views'] }}</td></tr>
					<tr><td>image</td><td><img src="{{URL::to('uploads/crudfiles/'.$employedproject['image'])}}" class="img-responsive" alt="Image"></td></tr>
					<tr><td>overall</td><td>{{ $employedproject['overall'] }}</td></tr>
                    <tr><td>location</td><td>{{ $employedproject['location'] }}</td></tr>
                    <tr><td>fundingsource</td><td>{{ $employedproject['fundingsource'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop