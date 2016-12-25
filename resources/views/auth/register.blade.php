@extends('common')

@section('style')
<style>
    body{background:#FD4C5B; max-width:800px; margin:auto}
    .logo{ padding-top:50px; padding-bottom:40px}
    .logo img{ display:block; margin:auto}
    .logoin{ padding:20px }
    .logoin ul{}
    .logoin li{ list-style:none; margin-bottom:40px}
    .logoin input{ background:#fff; width:95%; padding-left:5%;  height:100px; border-radius:10px; font-size:35px;outline:none; border:none}
    .logoin li button{background:#FEB836; width:100%;height:100px; border-radius:10px; font-weight:bolder; font-size:40px; color:#fff; border:none;
    outline:none}
    .logoin .enroll{ text-align:right;}
    .logoin .enroll a{ color:#fff; font-size:30px}
    .footer_in{ padding-top:120px}
    .footer_in img{ display:block;margin:auto}
</style>
@stop

@section('content')
<div class="logoin">
	<div class="logo">
    	<img src="img/logo.png" />
    </div>
    {!! Form::open(['url'=>'/register']) !!}
    	<ul>
        	<li>
            	<input type="text" name="name" placeholder="请输入用户名" />
            </li>
            <li>
            	<input type="text" name="email" placeholder="请输入邮箱" />
            </li>
            <li>
            	<input type="text" name="phone" placeholder="请输入手机" />
            </li>
            <li>
            	<input type="password" name="password" placeholder="请输入密码" />
            </li>
            <li>
            	<input type="password" name="password_confirmation" placeholder="请确认密码" />
            </li>
            <li>
            	 <button type="submit">注册</button>
            </li>
            @include('errors.list')
        </ul>
    {!! Form::close() !!}
    <div class="enroll">
    	<a href="/login">已有账户？直接登陆。</a>
    </div>
</div>
<div class="footer_in">
	<img src="img/1.png" />
</div>
@stop