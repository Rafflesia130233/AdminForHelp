@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
ongoingproject
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Ongoingprojects</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>ongoingprojects</li>
        <li class="active">ongoingprojects</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    ongoingproject {{ $ongoingproject->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $ongoingproject->id }}</td></tr>
                     <tr><td>title</td><td>{{ $ongoingproject['title'] }}</td></tr>
					<tr><td>description</td><td>{{ $ongoingproject['description'] }}</td></tr>
					<tr><td>user_id</td><td>{{ $ongoingproject['user_id'] }}</td></tr>
					<tr><td>views</td><td>{{ $ongoingproject['views'] }}</td></tr>
					<tr><td>image</td><td><img src="{{URL::to('uploads/crudfiles/'.$ongoingproject['image'])}}" class="img-responsive" alt="Image"></td></tr>
					<tr><td>overall</td><td>{{ $ongoingproject['overall'] }}</td></tr>
                    <tr><td>location</td><td>{{ $ongoingproject['location'] }}</td></tr>
                    <tr><td>fundingsource</td><td>{{ $ongoingproject['fundingsource'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop