@extends('admin.common')

@section('banner')
    <div class="page-heading">
        <h3>
            Dashboard
        </h3>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li class="active"> My Dashboard </li>
        </ul>
    </div>
@stop

@section('content')
	<div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Editable Table
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>发帖人</th>
                    <th>内容</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $v)
                	<tr class="">
                        <td>{{$v->id}}</td>
                        <td>{{$v->username}}</td>
                        <td>{{$v->content}}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                </div>
                </div>
            </section>
        </div>
    </div>
@stop
