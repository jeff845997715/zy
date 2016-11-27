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
                <div class="clearfix">
                    <div class="btn-group">
                        <a href="{{url('admin/product/create')}}" id="editable-sample_new" class="btn btn-primary">
                                 添加 <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>产品名</th>
                    <th>价格</th>
                    <th>积分</th>
                    <th>简介</th>
                    <th>编辑</th>
                    <th>删除</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $v)
                	<tr class="">
                        <td>{{$v->id}}</td>
                        <td>{{$v->name}}</td>
                        <td>{{$v->phone}}</td>
                        <td>{{$v->sex}}</td>
                        <td>{{$v->status}}</td>
                        <td><a class="edit" href="{{url('admin/product/edit', $v->id)}}">Edit</a></td>
                        <td><a class="delete" href="javascript:;">Delete</a></td>
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
