@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
publications List
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Publications</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>publications</li>
        <li class="active">publications</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Publications List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.publications.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body table-responsive">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Type</th>
							<th>Title</th>
							<th>Description</th>
							<th>Source</th>
							<th>Overview</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($publications as $publication)
                        <tr>
                            <td>{!! $publication->id !!}</td>
                            <td>{!! $publication->type !!}</td>
							<td>{!! $publication->title !!}</td>
							<td>{!! $publication->description !!}</td>
							<td>{!! $publication->source !!}</td>
							<td>{!! $publication->overview !!}</td>
                            <td>
                                <a href="{{ route('admin.publications.show', $publication->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view publication"></i>
                                </a>
                                <a href="{{ route('admin.publications.edit', $publication->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit publication"></i>
                                </a>
                                <a href="{{ route('admin.publications.confirm-delete', $publication->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                    <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete publication"></i>
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
