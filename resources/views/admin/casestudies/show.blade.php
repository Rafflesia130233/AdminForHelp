@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
casestudy
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Casestudies</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>casestudies</li>
        <li class="active">casestudies</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    casestudy {{ $casestudy->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $casestudy->id }}</td></tr>
                     <tr><td>title</td><td>{{ $casestudy['title'] }}</td></tr>
					<tr><td>description</td><td>{{ $casestudy['description'] }}</td></tr>
					<tr><td>overall</td><td>{{ $casestudy['overall'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop