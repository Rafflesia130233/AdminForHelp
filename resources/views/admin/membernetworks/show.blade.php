@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
membernetwork
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Membernetworks</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>membernetworks</li>
        <li class="active">membernetworks</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    membernetwork {{ $membernetwork->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $membernetwork->id }}</td></tr>
                     <tr><td>title</td><td>{{ $membernetwork['title'] }}</td></tr>
					<tr><td>description</td><td>{{ $membernetwork['description'] }}</td></tr>
					<tr><td>user_id</td><td>{{ $membernetwork['user_id'] }}</td></tr>
					<tr><td>slug</td><td>{{ $membernetwork['slug'] }}</td></tr>
					<tr><td>email</td><td>{{ $membernetwork['email'] }}</td></tr>
					<tr><td>views</td><td>{{ $membernetwork['views'] }}</td></tr>
					<tr><td>weblink</td><td>{{ $membernetwork['weblink'] }}</td></tr>
                    <tr><td>positioninorganization</td><td>{{ $membernetwork['positioninorganization'] }}</td></tr>
                    <tr><td>purposeinvolvement</td><td>{{ $membernetwork['purposeinvolvement'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop