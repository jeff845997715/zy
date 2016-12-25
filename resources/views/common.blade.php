<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=750,target-densitydpi=340,user-scalable=no">
    <title>社区</title>

	<link rel="stylesheet" href="{{ URL::asset('assets/home/css/public.css') }}">
	@yield('style')
	
  </head>
  <body @yield('body')>
    
    <!-- content start -->
    @yield('content')
    <!-- content end   -->
    
    @yield('js')
    
  </body>
</html>
