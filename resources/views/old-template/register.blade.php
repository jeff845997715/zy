@extends('common')

@section('content')
<div class="container-fluid">
<!--     <div class="col-sm-10  zy-form-title"> -->
<!--         <h1>登陆</h1> -->
<!-- 	</div> -->

    <form role="form" class="zy-form">
      <div class="form-group col-sm-10">
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group col-sm-10">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="checkbox col-sm-10">
          <input type="checkbox"> Check me out
      </div>
      <div class="form-group col-sm-10">
          <button type="submit" class="btn btn-default zy-login-submit">登陆</button>
      </div>
      
    </form>

	<div class="btn-group btn-group-justified navbar-fixed-bottom zy-bottom">
		<a href="#" class="btn btn-default active" role="button"><span class="glyphicon glyphicon-refresh"></span>首页</a>
		<a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-facetime-video"></span>消息</a>
		<a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-user"></span>我的</a>
    </div>
</div>
@stop