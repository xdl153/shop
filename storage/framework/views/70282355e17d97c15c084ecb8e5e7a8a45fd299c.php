<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<meta name="description" content="" />
		<meta name="viewport" content="user-scalable=no">
		
		<meta name="google-site-verification" content="BstJA3X9z6f9HcvoN9AZTwaKo_9Abj_j7dVBPfy640s" />
		<meta name="baidu-site-verification" content="IYCrtVH0i1" />
		<meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
		<link rel="icon" type="image/png" href="images/favicon.ico"/>
		
		<script type="text/javascript">
			
			(function(document, screen) {if (screen.width < 760) {document.location.href="/mobile/";}}(document, screen));
		</script>
		
		<link rel="stylesheet" href="<?php echo e(asset('Shop/css/common.css')); ?>"/>
		
		<!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
		<!--[if lt IE 9]>
		<script src="<?php echo e(asset('Shop/js/respond.js')); ?>"></script>
		<script>
			var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video, dh-dialog, dh-checkbox".split(', ');
			 var i= e.length;while (i--){document.createElement(e[i])}
		</script>
		<![endif]-->
		<title>关于我们 </title>
	</head>
	<body class="day " ng-controller="bodyCtrl"  day-or-night>
		<section class="common-back" id="wrapBackground">
			
				<header id="header">
					<div class="common-width clearfix">
						<h1 class="fl">
							<a class="logo base-logo" href="/">外卖超人</a>
						</h1>
						
							<ul class="member" login-box>
								<li><a href="/" class="index">首页</a></li>
								<li class="login-register"><a href="login.html" referer-url  class="login"  rel="nofollow">登录</a><span class="cg">/</span><a href="register.html" referer-url  rel="nofollow" class="register">注册</a></li>
								<li><a href="member_order.html" class="order-center"  rel="nofollow">查看订单</a></li>
								<li class=""><a href="#"  rel="nofollow">氪星礼品站</a></li>
								<li class="phone-client "><a href="#"  rel="nofollow" target="_blank"><span>手机客户端</span></a></li>
							</ul>
						
					</div>
				</header>
			
			<div id="main-box">
				 <!--二维码-->
				<div class="qrCode-frame" ng-hide="qrCodeStatus">
					<img src="<?php echo e(asset('Shop/images/wx.png')); ?>" alt="扫描二维码" />
					<em ng-click="qrCodeStatus=true">X</em>
				</div>
			
				<div ng-controller="colorAction">
					<div class="dayColor_two"></div>
					<div class="dayColor_one"></div>
					<div class="dayColor_three" ng-class="{dayColor_threeActive:threeActive}"></div>
				</div>
			
				
		<style>
			.about-list label,.about-list span,p{font-family: "宋体"}
			#about_us_container{padding:0px;}
			.about-aside{padding: 0 27px;}
			.about-aside li {width: 136px;height:50px;line-height:50px;font-size:12px;border-bottom:1px solid #EAEAEA}
			.about-body{width:713px;border-left: 1px solid #EAEAEA;padding: 28px;  }
			.about-body h1{font-size: 28px;margin-bottom: 23px;color: #999999;font-weight: 400}
			.about-body h1 span{color: #D2D2D2;padding-left: 12px;font-size:26px}
			.about-list li{margin-bottom: 16px;}
			.about-list label{color: #7E7D7D;font-size: 14px;font-weight: bold}
			.about-list span{color: #7E7D7D;font-size: 12px}
			.about-list{margin-bottom: 8px;}
			.hr{margin-bottom: 22px;height:1px;background: #E9E9E9}
			#about_us_container h2{font-size: 14px;}
			h2,h3{color:#7D7D7D}
			p{margin-bottom: 28px; text-indent: 26px;color:#7D7D7D}
			h3{text-align: center;font-size: .75em;margin-top: 10px;margin-bottom: 50px;}
			.ceo-info{text-align: center}
			.userName p{margin-bottom: 0;text-indent: 0px;}
		</style>
	<div class="footer-location-page common-width">
		<div id="about_us_container" class="mainwidget clearfix">
			<aside class="fl about-aside">
			<ul>
				<li class="link">关于我们</li>
				<li><a href="">发展历程</a></li>
			</ul>
			</aside>
			<section class="fl about-body">
				<h1>关于我们 <span>About us</span></h1>
				<ul class="about-list">
					<li><label>愿景：</label><span>互联网让人们生活更简单</span></li>
					<li><label>使命：</label><span>中国最全的外卖网站</span></li>
					<li><label>企业文化：</label><span>激情主动 简单有效 诚实守诺 客观量化 </span></li>
					<li><label>核心价值：</label><span>品质、服务、速度</span></li>
					<li><label>市场定位：</label><span>为中国1.4亿白领服务</span></li>
					<li><label>宣传口号：</label><span>“嗖”一下的美食</span></li>
				</ul>
				<div class="hr"></div>
				<h2>外卖超人简介</h2>
				<p>
					外卖超人（waimaichaoren.com）是上海爱餐商务咨询有限公司研发运营的专注中国白领市场O2O外卖订餐平台，由刘凯（Lucas Englehardt）[美]先生于2012年8月创立，研发和管理总部位于上海。
				</p>
				<p>
					经过2013年在上海一年试运营，2014年外卖超人进入快速市场扩张阶段，先后进驻南京、宁波、福州、重庆、苏州、广州、杭州、青岛等城市，截至14年底覆盖全国17个城市一线城市，全职员工230人，在线活跃餐馆15000家，秉承品质、服务、速度的企业文化，经过2年的发展外卖超人已经成为全国1.4亿白领首选的外卖订餐平台。
				</p>
				<p>
					外卖超人与国际O2O外卖订餐巨头Delivery Hero有深厚关系，并获得Delivery Hero投资，目前外卖超人作为其在中国的品牌独立运营。
				</p>
				<div class="ceo-info">
					<img src="<?php echo e(asset('Shop/images/lucas_03.jpg')); ?>" alt="外卖超人创始人 CEO ：刘凯（Lucas Englehardt）"/>
					<h3>外卖超人创始人 CEO：刘凯（Lucas Englehardt）</h3>
				</div>
			</section>
		</div>
	</div>

			</div>
		</section>
		
			<footer id="footer">
			<div class="footer-first gray">
				<div class="company-info clearfix fs14 gray">
					<a href="<?php echo e(URL('Shop\about')); ?>" target="_blank"  rel="nofollow">关于我们</a>
					<a href="help.html" target="_blank"  rel="nofollow">帮助中心</a>
					<a href="javascript:;" target="_blank"  rel="nofollow">法律声明</a>
					<a href="jobs.html" target="_blank"  rel="nofollow">人才招聘</a>
					<a href="contact.html" target="_blank"  rel="nofollow">联系我们</a>
					<a href="javascript:;" user-feedback ng-click="userFeedback=true" class="last" rel="nofollow">意见反馈</a>
					<a href="javascript:;" class="last" target="_blank" style="display:none">上海餐厅导航</a>
				</div>
			</div>
			<div class="footer-last">
				<a target="_blank" class="foot-logo-1 base-logo" href="index.html"></a>
				<div class="tc fs14 light-gray mb10">
				  ©2014 waimaichaoren.com All Rights Reserved - 沪ICP备11019908号
				</div>
			</div>
		</footer>
		
		
		<dh-dialog class="disnone" height="500" feeedbackclass="userFeedback" type="user-feedback" header="意见反馈" show="userFeedback">
			<div ng-controller="feedbackCtrl">
				<form novalidate="true" name="feedbackForm" class="inline">
					<div class="form-group row mb10">
						<label class="col-3">联系方式：</label>
						<div class="col-8">
							<input type="text" maxlength="20" name="userContact" required ng-focus="userContactFocus()" ng-class="{error:feedback.phoneMessage}" placeholder="请输入您的手机号码" ng-model="feedback.userContact"/>
						</div>
					</div>
					<div class="row mb10">
						<div class="clo-8 col-offset-3" ng-if="feedback.phoneMessage">
							<span class="vaildate-error">联系方式不能为空</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 vt">反馈信息：</label>
						<div class="col-8">
							<textarea name="feedbackMessage"  placeholder="可以说说您对外卖超人的意见" ng-focus="feedbacFocus()" required ng-class="{error:feedback.feedbackMessageTip}" ng-model="feedback.feedbackMessage" maxlength="300" cols="25" rows="7"></textarea>
						</div>
					</div>
					<div class="row mb10">
						<div class="clo-8 col-offset-3" ng-if="feedback.feedbackMessageTip">
							<span class="vaildate-error">反馈信息不能为空</span>
						</div>
					</div>
					<div class="tc">
						<button class="btn normal-btn btn-success" ng-click="feedbackSubmit()">确认</button>
						<button class="btn normal-btn btn-cancel" ng-click="feedbackCancel()">取消</button>
					</div>
				</form>
			</div>
			<div class="common-dialog-footer">
				咨询加QQ群：666666
			</div>
		</dh-dialog>
		
		 <ul class="site-fixed">
			<li class="scroll-top"><img src="<?php echo e(asset('Shop/images/scroll_top1.png')); ?>" alt=""/> </li>
			<li class="scorll-feekback" ng-click="userFeedback=true">
				<img src="<?php echo e(asset('Shop/images/scorll_feekback.png')); ?>" alt=""/>
				<div>意见反馈</div>
			</li>
			<li class="scroll-wx">
				<img src="<?php echo e(asset('Shop/images/scroll_wx.png')); ?>" alt=""/>
				 <div><img src="<?php echo e(asset('Shop/images/wx.png')); ?>" alt=""/></div>
			</li>
		</ul>
		
		<script type="text/javascript" src="<?php echo e(asset('Shop/js/angular.min.js')); ?>"></script>
		<script src="<?php echo e(asset('Shop/js/common.js')); ?>"></script>
		
		 
		<script src="<?php echo e(asset('Shop/js/service.js')); ?>"></script>
		
		<script>var feedbackUrl = '/ajax/feedback/';var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
		<!--[if lt IE 9]><script src="<?php echo e(asset('Shop/js/fix.js')); ?>"></script><![endif]-->
		
		
		<script>app.controller('bodyCtrl',function(){})</script>

		
		<script>angular.bootstrap(document, ["app"]);</script>

		<!-- Baidu Analytics -->

	<!-- End Baidu Tracking Code -->




	</body>
</html>
