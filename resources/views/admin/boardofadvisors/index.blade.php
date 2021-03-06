@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
boardofadvisors List
@parent
@stop

{{-- Page content --}}
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
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Boardofadvisors List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.boardofadvisors.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body table-responsive">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Name</th>
							<th>Filepath</th>
							<th>Role</th>
							<th>Address</th>
							<th>Contact</th>
							<th>Degree</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($boardofadvisors as $boardofadvisor)
                        <tr>
                            <td>{!! $boardofadvisor->id !!}</td>
                            <td>{!! $boardofadvisor->name !!}</td>
							<td><img src="{{URL::to('uploads/crudfiles/'.$boardofadvisor['filePath'])}}" style="width: 30px; height: 30px;" alt="Image"></td>
							<td>{!! $boardofadvisor->role !!}</td>
							<td>{!! $boardofadvisor->address !!}</td>
							<td>{!! $boardofadvisor->contact !!}</td>
							<td>{!! $boardofadvisor->degree !!}</td>
                            <td>
                                <a href="{{ route('admin.boardofadvisors.show', $boardofadvisor->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view boardofadvisor"></i>
                                </a>
                                <a href="{{ route('admin.boardofadvisors.edit', $boardofadvisor->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit boardofadvisor"></i>
                                </a>
                                <a href="{{ route('admin.boardofadvisors.confirm-delete', $boardofadvisor->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                    <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete boardofadvisor"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
