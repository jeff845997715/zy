@extends('common')

@section('style')
<style>
body{ background:#F7F7F7 !important}
.nav_data{ height:100px;line-height:100px; color:#fff; font-size:35px; position:fixed; width:95%; padding-right:5%; left:0px; top:0px;}
.nav_data{ background:#FD4C5B url(img/70%20Basic%20Icons-all-24.svg) 26px 30px no-repeat}
.nav_data .left{ float:left; padding-left:85px; cursor:pointer}
.nav_data .right{ float:right; cursor:pointer}

.data_box{ padding-top:100px; width:90%; margin:auto}
.data_box ul{ margin-top:20px}
.data_box li{ height:100px; border-bottom:1px #dfdfdf solid; line-height:100px; font-size:35px;}
.data_box h1{ line-height:100px; padding-left:5%; font-size:35px;}
.data_box li input{ width:95%; padding-left:5%; height:100px; line-height:100px; border:none; border-radius:20px; font-size:30px; outline:none}
.data_box li textarea{ width:94%; height:94%; font-size:30px; text-align:left; border-radius:20px; outline:none; border:none; padding:3%;}
</style>
@stop

@section('body')
id="body_bg"
@stop

@section('content')
<div class="nav_data">
    <div class="left" onclick="window.history.go(-1)">意见反馈</div>
    <div class="right" onclick="alert('提交成功')">发送</div>
</div>
<div class="data_box">
	<h1>我要提议</h1>
	<ul>
    	<li>
        	<input type="text" value="我是标题党" onfocus="if(this.value=='我是标题党'){this.value=''}" onblur="if(this.value==''){this.value='我是标题党';}"/>
        </li>
    </ul>
    <ul>
    	<li style="height:250px;">
        	<textarea value="请详细描述您的问题" onfocus="if(this.value=='请详细描述您的问题'){this.value=''}" onblur="if(this.value==''){this.value='请详细描述您的问题';}">请详细描述您的问题</textarea>
        </li>
    </ul>
</div>
@stop