@extends('common')
@section('body')
id="body_bg"
@stop
@section('style')
<link rel="stylesheet" href="{{ URL::asset('assets/home/css/swiper.css') }}">
<script src="{{ URL::asset('assets/home/js/jquery-1.8.3.js') }}"></script>
<script src="{{ URL::asset('assets/home/js/swiper.js') }}"></script>
<style>
.nav{ background:#fff}
.nav li{ height:100px; border-bottom:1px #dfdfdf solid; cursor:pointer}
#dowebok { background-color: #fff; display:none}
.block{ display:block !important;}
#dowebok .nav {list-style-type: none; }
#dowebok .nav button{ width:80%; height:80px; background:#FD4C5B; border:none; border-radius:50px; color:#fff; font-size:35px; outline:none}
#dowebok .nav a { display: block; line-height:100px; padding: 0 20px; text-align:center; color: #333333; font-size:40px; text-decoration: none;}
/************消息*****************/
.news{}
.news ul{}
.news ul li{ height:100px; border-bottom:1px #dfdfdf solid; padding:0px 20px;}
.news ul li .lf{ float:left; position:relative;}
.news ul li .lf img{ display:block;width:60px; height:60px; border-radius:100%; border:4px #fff solid; margin-top:12px; float:left}
.news ul li .lf h1{ float:left; line-height:100px; font-size:30px; padding-left:30px}
.news ul li .lf span{ position:absolute; left:47px; top:12px; background:#FD4C5B; color:#fff; width:25px; height:25px; text-align:center; line-height:25px; border-radius:100%;}
.news ul li .rt{ float:right; padding-top:40px}
.news ul li .rt span{ font-size:25px;}


/************好友*****************/
.group{}
.group ul{ display:none}
.group .group_tit{ height:100px;  padding:0px 20px; line-height:100px; background:url(img/70%20Basic%20Icons-all-59.svg) 25px 29px no-repeat }
.group .group_tit{border-bottom:1px #dfdfdf solid;}
.group .group_tit h1{font-size:30px; padding-left:60px}
.cheg ul{ display:block !important}
.cheg .group_tit{background:url(img/70%20Basic%20Icons-all-60.svg) 25px 29px no-repeat !important}


/************空间*****************/
.space{}
.space ul{}
.space li{ background:#fff; border-bottom:none !important; height:auto !important; padding-bottom:50px !important; margin-bottom:30px !important


}
.space .lf{}
.space .rt{}
.space .say{ padding:0px 10px; color:#2D2D2D; font-size:32px; line-height:38px; text-indent:63px}
.space .carry{ height:80px; line-height:80px; margin-top:30px; border-bottom:1px #dfdfdf solid;}
.space .carry .carry_lf{ font-size:30px; color:#8A8A8A; float:left}
.space .carry .carry_rt{ float:right}
.space .carry .carry_rt span{ display:inline-block; width:42px; height:40px; margin-right:60px; margin-top:20px}
.comment{ padding:20px 0px}
.comment .zan{}
.comment .zan h1{ color:#3773A7; font-size:30px; background:url(img/a7.jpg) 0px 0px no-repeat; padding-left:60px; line-height:38px; font-weight:normal}
.comment .zan h1 span{}
.comment h2{ color:#2D2D2D;line-height:50px; font-weight:normal;font-size:30px;}
.comment h2 span{color:#3773A7;font-weight:normal;font-size:30px;}
.inpt{ text-align:center}
.inpt input{ width:80%; padding:0px 5%; height:60px; line-height:50px; font-size:30px; border-radius:10px; border:1px #dfdfdf solid; outline:none;}

/************写说说*****************/
.say_say{ padding:40px}
.say_say h3{ height:120px; line-height:120px; font-size:35px}
.say_say textarea{ width:90%; padding:5%; border:1px #dfdfdf solid; font-size:30px; border:1px #dfdfdf solid; border-radius:10px; outline:none}

.btn{ text-align:center;}
.btn button{ width:300px; height:100px; background:#FD4C5B; border:none; border-radius:10px; color:#fff; font-size:25px; margin:10px;outline:none; }


</style>
@stop

@section('content')
<div class="homepage">
    	        <div class="set" id="toggle-sidebar" style="width: 136.364px; float:left">
					<img src="img/a1.png" />
				</div>
		<div class="swiper-container  ws0701_tab_top" id="swiper-container2" style="background:#FD4C5B; position:fixed;top:0px; right:0px; width:100%; z-index:10;">
        	<!--------------功能列表-------------->
                <div class="swiper-wrapper" style="float:right; width:80%;">
                    <div class="swiper-slide active-nav" style="width: 136.364px;">
                        <span>消息</span>
                    </div>
                    <div class="swiper-slide" style="width: 136.364px;">
                        <span>好友</span>
                    </div>
                    <div class="swiper-slide" style="width: 136.364px;">
                        <span>空间</span>
                    </div>
                    <div class="swiper-slide" style="width: 136.364px;">
                        <span>写说说</span>
                    </div>
                </div>
		</div>
		<div class="ws0701_container" style="margin-top:120px;">
			<div class="swiper-container" id="swiper-container3" style="width:100%;">
				<div class="swiper-wrapper" style="height: 488px; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                	<!--------------消息-------------->
					<div class="swiper-slide news" style="width:750px;height:900px; overflow:auto">
						<ul>
                        	<li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                     <span>15</span>
                                </div>
                                <div class="rt">
                                	<span>上午10:58</span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                     <span>15</span>
                                </div>
                                <div class="rt">
                                	<span>上午10:58</span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                     <span>15</span>
                                </div>
                                <div class="rt">
                                	<span>上午10:58</span>
                                </div>
                            </li>
                        </ul>
					</div>
                    <!--------------好友-------------->
					<div class="swiper-slide" style="width: 750px;height:900px;overflow:auto">
                    	<div class="group news">
                        	<div class="group_tit">
                            	<h1>同学</h1>
                            </div>
                            <ul>
                        	<li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <div class="group news">
                        	<div class="group_tit">
                            	<h1>同学</h1>
                            </div>
                            <ul>
                        	<li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <div class="group news">
                        	<div class="group_tit">
                            	<h1>同学</h1>
                            </div>
                            <ul>
                        	<li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <div class="group news">
                        	<div class="group_tit">
                            	<h1>同学</h1>
                            </div>
                            <ul>
                        	<li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                            <li>
                            	<div class="lf">
                                	<img src="img/a1.png" />
                                     <h1>幽谷草</h1>
                                </div>
                                <div class="rt">
                                	<span></span>
                                </div>
                            </li>
                        </ul>
                        </div>
					</div>
                     <!--------------空间-------------->
					<div class="swiper-slide" style="width: 750px;height:900px;overflow:auto; background:#ECECEC">
                    	<div class="space news">
                        	<ul>
                            	<li>
                                    <div class="lf">
                                        <img src="img/a1.png" />
                                         <h1>幽谷草</h1>
                                    </div>
                                    <div class="rt">
                                        <span>上午10:58</span>
                                    </div>
                                    <div style="clear:both"></div>
                                    <p class="say">
                                    东风夜放花千树，更吹落、星如雨。宝马雕车香满路。凤箫声动，玉壶光转，一夜鱼龙舞。
　　蛾儿雪柳黄金缕，笑语盈盈暗香去。众里寻他千百度。蓦然回首，那人却在，灯火阑珊处。
                                    </p>
                                    <div class="carry">
                                    	<div class="carry_lf">
                                        	共浏览11次
                                        </div>
                                        <div class="carry_rt">
                                        	<span style="background:url(img/a5.jpg)"></span>
                                            <span style="background:url(img/a6.jpg)"></span>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div class="comment">
                                    	<div class="zan">
                                        	<h1>
                                            	<span>吃瓜</span>、
                                                <span>群众</span>
                                            </h1>
                                        </div>
                                        <h2>
                                        	<span>吃瓜：</span>
                                            此地无银三百两
                                        </h2>
                                        <h2>
                                        	<span>群众：</span>
                                            隔壁王二不曾偷
                                        </h2>
                                    </div>
                                    <div class="inpt">
                                    	<input type="text" />
                                    </div>
                                </li>
                                <li>
                                    <div class="lf">
                                        <img src="img/a1.png" />
                                         <h1>幽谷草</h1>
                                    </div>
                                    <div class="rt">
                                        <span>上午10:58</span>
                                    </div>
                                    <div style="clear:both"></div>
                                    <p class="say">
                                    东风夜放花千树，更吹落、星如雨。宝马雕车香满路。凤箫声动，玉壶光转，一夜鱼龙舞。
　　蛾儿雪柳黄金缕，笑语盈盈暗香去。众里寻他千百度。蓦然回首，那人却在，灯火阑珊处。
                                    </p>
                                    <div class="carry">
                                    	<div class="carry_lf">
                                        	共浏览11次
                                        </div>
                                        <div class="carry_rt">
                                        	<span style="background:url(img/a5.jpg)"></span>
                                            <span style="background:url(img/a6.jpg)"></span>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div class="comment">
                                    	<div class="zan">
                                        	<h1>
                                            	<span>吃瓜</span>、
                                                <span>群众</span>
                                            </h1>
                                        </div>
                                        <h2>
                                        	<span>吃瓜：</span>
                                            此地无银三百两
                                        </h2>
                                        <h2>
                                        	<span>群众：</span>
                                            隔壁王二不曾偷
                                        </h2>
                                    </div>
                                    <div class="inpt">
                                    	<input type="text" />
                                    </div>
                                </li>
                            </ul>
                        </div>
					</div>
                     <!--------------写说说-------------->
					<div class="swiper-slide" style="width: 750px;height:900px;overflow:auto">
                    	<div class="say_say">
                        	<h3>有什么新鲜事想要告诉大家?</h3>
                            <textarea
                            value="说点什么吧..."
                            onfocus="if(this.value=='说点什么吧...'){this.value=''}"
                            onblur="if(this.value==''){this.value='说点什么吧...';}"
                            >说点什么吧...</textarea>
                        </div>
                        <div class="btn">
                        	<button style="background:#F90">上传图片</button>
                            <button>发表</button>
                        </div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<!------------侧边栏导航------------------------>
<div id="dowebok">
		<ul class="nav">
			<li class="nav_li" >
            	<img src="img/a1.png" style=" display:block;margin:auto" />
                <p class="nickname">幽谷草</p>
                <p class="mood">今天天气不错，挺风和日丽的。我们下午没有课。。。</p>
            </li>
			<li><a href="/profile" style="background:url(img/70%20Basic%20Icons-all-05.svg) 75px 30px no-repeat;">个人资料</a></li>
            <li><a href="/feedback" style="background:url(img/70%20Basic%20Icons-all-63.svg) 75px 30px no-repeat">意见反馈</a></li>
			<li><a href="/about" style="background:url(img/70%20Basic%20Icons-all-16.svg) 75px 30px no-repeat">关于我们</a></li>
			<li style=" padding-top:10px; height:90px; text-align:center"><button onclick="location.href='logoin.html';">退出登陆</button></li>
		</ul>
</div>
@stop
@section('js')
<script src="{{ URL::asset('assets/home/js/simpler-sidebar.min.js') }}"></script>
<script>
$(".group_tit").click(function(){
	$(this).parent().toggleClass("cheg");
	})
$(document).ready()
$("#toggle-sidebar").click(function(){
	$("#dowebok").addClass("block");
	})
$(function() {
	$('#dowebok').simplerSidebar({
		opener: '#toggle-sidebar',
		sidebar: {
			align: 'left',
			width: 500,
		}
	});
});
</script>
<script>
	var mySwiper1 = new Swiper('.swiper1',{
		pagination : '.swiper-pagination',
		paginationType : 'fraction',
	})

	var mySwiper2 = new Swiper('#swiper-container2',{
	watchSlidesProgress : true,
	watchSlidesVisibility : true,
	slidesPerView : 5.5,
	onTap: function(){
			mySwiper3.slideTo( mySwiper2.clickedIndex)
		}
	})

	var mySwiper3 = new Swiper('#swiper-container3',{
		autoHeight: true,
		onSlideChangeStart: function(){
			updateNavPosition()
		}
	})

	function updateNavPosition(){
		$('#swiper-container2 .active-nav').removeClass('active-nav')
		var activeNav = $('#swiper-container2 .swiper-slide').eq(mySwiper3.activeIndex).addClass('active-nav');
		if (!activeNav.hasClass('swiper-slide-visible')) {
			if (activeNav.index()>mySwiper2.activeIndex) {
				var thumbsPerNav = Math.floor(mySwiper2.width/activeNav.width())-1
				mySwiper2.slideTo(activeNav.index()-thumbsPerNav)
			}
			else {
				mySwiper2.slideTo(activeNav.index())
			}
		}
	}
</script>
@stop