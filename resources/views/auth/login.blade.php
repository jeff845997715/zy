@extends('common')

@section('body')
class="logoin"
@stop

@section('style')
<style>
    body{background:#FD4C5B; max-width:800px; margin:auto}
    .logo{ padding-top:50px; padding-bottom:40px}
    .logo img{ display:block; margin:auto; width:300px; height:auto;}
    .logoin{ padding:20px }
    .logoin ul{ width:100%}
    .logoin li{ list-style:none; margin-bottom:40px}
    .logoin input{ background:#fff; width:95%; padding-left:5%;  height:100px; line-height:100px; border-radius:10px; font-size:35px}
    .logoin input{ outline:none; border:none}
    .logoin li button{background:#FEB836; width:100%;height:100px; border-radius:10px; font-weight:bolder; font-size:40px; color:#fff; border:none;
    outline:none}
    .logoin .enroll{ text-align:right; padding-top:30px}
    .logoin .enroll a{ color:#fff; font-size:35px}
    .footer_in{ padding-top:120px}
    .footer_in img{ display:block; margin:auto; width:615px; height:auto}
</style>
@stop

@section('content')
<div class="logoin">
	<div class="logo">
    	<img src="img/logo.png" />
    </div>
    <form action="/login" method="post">
        {!! csrf_field() !!}
    	<ul>
        	<li>
            	<input type="text" name="email" placeholder="请输入用户名" />
            </li>
            <li>
            	<input type="password" name="password" placeholder="请输入密码" />
            </li>
            <li>
            	 <button type="submit">登陆</button>
            </li>
            @include('errors.list')
        </ul>
    </form>
    <div class="enroll">
    	<a href="/register">没有账户？马上注册。</a>
    </div>
</div>
<div class="footer_in">
	<img src="img/1.png" />
</div>
@stop