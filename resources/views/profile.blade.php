@extends('common')

@section('style')
<style>
body{ background:#F7F7F7 !important}
.nav_data{ height:100px;line-height:100px; color:#fff; font-size:35px; position:fixed; width:95%; padding-right:5%; left:0px; top:0px;}
.nav_data{ background:#FD4C5B url(img/70%20Basic%20Icons-all-24.svg) 26px 30px no-repeat}
.nav_data .left{ float:left; padding-left:85px; cursor:pointer}
.nav_data .right{ float:right; cursor:pointer}

.data_box{ padding-top:100px}
.data_box ul{ background:#fff;}
.data_box li{ height:100px; border-bottom:1px #dfdfdf solid; line-height:100px; padding:0px 5%; font-size:35px}
.data_box h1{ line-height:100px; padding-left:5%; font-size:35px;}
</style>
@stop

@section('body')
id="body_bg"
@stop

@section('content')
    <div class="nav_data">
        <div class="left" onclick="window.history.go(-1)">个人资料</div>
        <div class="right">保存</div>
    </div>
    <div class="data_box">
    	<h1>基本信息</h1>
    	<ul>
        	<li contentEditable="true">昵称</li>
            <li contentEditable="true">性别</li>
            <li contentEditable="true">电话</li>
            <li contentEditable="true">用户名</li>
            <li contentEditable="true">密码</li>
        </ul>
        <h1>个性签名</h1>
        <ul>
        	<li contentEditable="true" style="height:250px; line-height:40px !important; overflow:auto; padding:20px 20px">
            	是不是我不懂温柔。
            </li>
        </ul>
    </div>
@stop