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
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    添加用户
                </header>
                <div class="panel-body">
                    <div class="form">
                        {!! Form::open(['url'=>'admin/users', 'id'=>'commentForm', 'class'=>'cmxform form-horizontal adminex-form']) !!}
                    		<div class="form-group">
                    		    {!! Form::label('name', '姓名', ['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-5">
                                    {!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                    		    {!! Form::label('phone', '电话', ['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-5">
                                    {!! Form::text('phone',null,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                    		    {!! Form::label('email', '邮箱', ['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-5">
                                    {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                    		    {!! Form::label('sex', '性别', ['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-5">
                                    <label class="checkbox-inline">
                                        {!! Form::radio('sex', 'M') !!}男
                                    </label>
                                    <label class="checkbox-inline">
                                        {!! Form::radio('sex', 'F') !!}女
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                    		    {!! Form::label('per_sign', '个性签名', ['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-5">
                                    {!! Form::text('per_sign',null,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                    		    {!! Form::label('password', '密码', ['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-5">
                                    {!! Form::password('password',null,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                    		    {!! Form::label('password_confirmation', '确认密码', ['class'=>'control-label col-lg-2']) !!}
                                <div class="col-lg-5">
                                    {!! Form::password('password_confirmation',null,['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>
                    	{!! Form::close() !!}
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
@section('js')
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/validation-init.js') }}"></script>
@stop