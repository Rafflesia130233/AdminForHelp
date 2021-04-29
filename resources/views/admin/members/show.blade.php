@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
member
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
        <li class="active">members</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    member {{ $member->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $member->id }}</td></tr>
                     <tr><td>name</td><td>{{ $member['name'] }}</td></tr>
					<tr><td>description</td><td>{{ $member['description'] }}</td></tr>
					<tr><td>designation</td><td>{{ $member['designation'] }}</td></tr>
					<tr><td>education</td><td>{{ $member['education'] }}</td></tr>
					<tr><td>profession</td><td>{{ $member['profession'] }}</td></tr>
					<tr><td>remarks</td><td>{{ $member['remarks'] }}</td></tr>
					<tr><td>filePath</td><td><img src="{{URL::to('uploads/crudfiles/'.$member['filePath'])}}" class="img-responsive" alt="Image"></td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop