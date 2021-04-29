@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
donorandpartner
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
        <li class="active">donorandpartners</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    donorandpartner {{ $donorandpartner->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $donorandpartner->id }}</td></tr>
                     <tr><td>title</td><td>{{ $donorandpartner['title'] }}</td></tr>
					<tr><td>donationfor</td><td>{{ $donorandpartner['donationfor'] }}</td></tr>
					<tr><td>organizationname</td><td>{{ $donorandpartner['organizationname'] }}</td></tr>
					<tr><td>description</td><td>{{ $donorandpartner['description'] }}</td></tr>
					<tr><td>user_id</td><td>{{ $donorandpartner['user_id'] }}</td></tr>
					<tr><td>views</td><td>{{ $donorandpartner['views'] }}</td></tr>
					<tr><td>image</td><td><img src="{{URL::to('uploads/crudfiles/'.$donorandpartner['image'])}}" class="img-responsive" alt="Image"></td></tr>
					<tr><td>overall</td><td>{{ $donorandpartner['overall'] }}</td></tr>
					<tr><td>donationammount</td><td>{{ $donorandpartner['donationammount'] }}</td></tr>
                    <tr><td>donationammount</td><td>{{ $donorandpartner['donorandorpartner'] }}</td></tr>
                    <tr><td>donationammount</td><td>{{ $donorandpartner['fieldofdonation'] }}</td></tr>
                    <tr><td>donationammount</td><td>{{ $donorandpartner['fieldofpartnership'] }}</td></tr>
                    <tr><td>donationammount</td><td>{{ $donorandpartner['weblink'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop