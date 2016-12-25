@extends('common')

@section('style')
<style>
body{ background:#F7F7F7 !important}
.nav_data{ height:100px;line-height:100px; color:#fff; font-size:35px; position:fixed; width:95%; padding-right:5%; left:0px; top:0px;}
.nav_data{ background:#FD4C5B url(img/70%20Basic%20Icons-all-24.svg) 26px 30px no-repeat}
.nav_data .left{ float:left; padding-left:85px; cursor:pointer}
.nav_data .right{ float:right; cursor:pointer}

.about_us{ padding:5%;padding-top:140px;}
.about_us p{ font-size:30px; color:#888888; text-indent:60px; line-height:40px}
</style>
@stop

@section('body')
id="body_bg"
@stop

@section('content')
<div class="nav_data">
    <div class="left" onclick="window.history.go(-1)">关于我们</div>
</div>
<div class="about_us">
	<p>我也不知道为什么，突然想做个网站。</p>
</div>
@stop