@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
boardofadvisor
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Boardofadvisors</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>boardofadvisors</li>
        <li class="active">boardofadvisors</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    boardofadvisor {{ $boardofadvisor->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $boardofadvisor->id }}</td></tr>
                     <tr><td>name</td><td>{{ $boardofadvisor['name'] }}</td></tr>
					<tr><td>filePath</td><td><img src="{{URL::to('uploads/crudfiles/'.$boardofadvisor['filePath'])}}" class="img-responsive" alt="Image"></td></tr>
					<tr><td>role</td><td>{{ $boardofadvisor['role'] }}</td></tr>
					<tr><td>address</td><td>{{ $boardofadvisor['address'] }}</td></tr>
					<tr><td>contact</td><td>{{ $boardofadvisor['contact'] }}</td></tr>
					<tr><td>degree</td><td>{{ $boardofadvisor['degree'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop