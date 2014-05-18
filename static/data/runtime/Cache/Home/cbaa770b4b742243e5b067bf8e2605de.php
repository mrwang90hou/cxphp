<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8" />
		<title>CXPHP 让工作更简单 - CXPHP</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="maximum-scale=1.0,width=device-width,initial-scale=1.0" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="author" content="anyon" />
		<link rel="stylesheet" type="text/css" href="/Cxphp.cn/static/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/Cxphp.cn/static/css/base_outer.css" />
		<!--[if lt IE 9]>
			<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
			<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="ng-cloak" data-ng-cloak>
		<header id="header">
			<!--[if lte IE 9]>
			<div id="warning_info" class="text-warning fade in mb_0">
				<button data-dismiss="alert" class="close" type="button">×</button>
				<strong>您正在使用低版本浏览器，</strong> 在本页面的显示效果可能有差异。
				建议您升级到
				<a href="http://www.google.cn/intl/zh-CN/chrome/" target="_blank">Chrome</a>
				或以下浏览器：
				<a href="www.mozilla.org/en-US/firefox/‎" target="_blank">Firefox</a> /
				<a href="http://www.apple.com.cn/safari/" target="_blank">Safari</a> /
				<a href="http://www.opera.com/" target="_blank">Opera</a> /
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">Internet Explorer 10</a>
			</div>
			<![endif]-->
			<nav id="header_outer" class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-header-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="header_logo" class="navbar-brand" href="/" title="CXPHP">CXPHP</a>
				</div>
				<div class="collapse navbar-collapse navbar-header-collapse">
					<ul id="header_menu" class="nav navbar-nav">
						<li class="active"><a href="#">首页</a></li>
						<li><a href="./tour">功能特性</a></li>
						<li><a href="./plan">付费方案</a></li>
						<li><a href="./mobile">移动版</a></li>
						<li><a href="./blog">官方博客</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right" ng-controller="user_ctrl" id="header_me">
						<li class="divider-vertical hidden-xs"></li>
						<li><a class="mr_15" href="/signin">登录</a></li>
						<li><a href="/signup">注册</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<div id="wrap-all">
			<div id="main" class="inner">
				<div id="index-wrap">
					<div class="index-banner">
						<div class="index-banner-wrap">
							<div class="index-banner-inner">
								<h1>让工作更简单</h1>
								<p>
									一款免费、好用的团队协同工具，让你<br>
									的团队随时随地一起工作
								</p>
								<div class="index-banner-action">
									<a class="btn btn-success btn-lg" href="/signup">
										免费注册
									</a>
								</div>
								<div class="index-banner-carousel">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
											<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
											<li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active">
												<img alt="First slide" src="/Cxphp.cn/static/img/banner0.png" />
											</div>
											<div class="item">
												<img alt="First slide" src="/Cxphp.cn/static/img/banner1.png" />
											</div>
											<div class="item">
												<img alt="First slide" src="/Cxphp.cn/static/img/banner2.png" />
											</div>
											<div class="item">
												<img alt="First slide" src="/Cxphp.cn/static/img/banner3.png" />
											</div>
										</div>
										<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="index-body">
						<h3 class="index-feature-title">
							<span>提升团队生产力</span>
						</h3>
						<ul class="index-feature">
							<li>
								<img src="/Cxphp.cn/static/img/index/i1.png?ver=3.1.7" alt="提高效率"/>
								<br/>
								<h4>提高效率</h4>
								灵活的任务和日程，让团队成员的<br>
								效率迅速提升，工作就是这么简单
							</li>
							<li>
								<img src="/Cxphp.cn/static/img/index/i2.png?ver=3.1.7" alt="无缝沟通"/>
								<br/>
								<h4>无缝沟通</h4>
								简单好用的在线讨论，无处不在的<br>
								关注和评论，与团队成员之间无缝沟通
							</li>
							<li>
								<img src="/Cxphp.cn/static/img/index/i3.png?ver=3.1.7" alt="资源共享"/>
								<br/>
								<h4>资源共享</h4>
								无共享，不协同，完善的文件共享<br>
								让你的团队达到真正意义上的协同
							</li>
							<li>
								<img src="/Cxphp.cn/static/img/index/i4.png?ver=3.1.7" alt="帮助记录"/>
								<br/>
								<h4>帮助记录</h4>
								强大的在线文档编辑，帮助团队<br>
								记录，积累沉淀形成团队知识库
							</li>
						</ul>

						<div class="index-say">
							<div class="index-say-inner">
								<h3 class="index-say-title">他们怎么说</h3>
								<div ng-controller="index_say_ctrl" class="index-say-carousel">
								</div>
								<h3 class="index-say-team-title">
									<a href="/customers">
										<span><strong>20,000+</strong>个团队的共同选择</span>
									</a>
								</h3>
								<ul class="index-say-team-list">
									<li>
										<a rel="nofollow" target="_blank" href="http://www.36kr.com/" title="36氪">
											<img src="/Cxphp.cn/static/img/index/36kr.png?ver=3.1.7" alt="36氪"/>
										</a>
									</li>
									<li>
										<a rel="nofollow" target="_blank" href="http://www.enactuschina.cn/" title="创行">
											<img src="/Cxphp.cn/static/img/index/enactuschina.png?ver=3.1.7" alt="创行"/>
										</a>
									</li>
									<li>
										<a rel="nofollow" target="_blank" href="http://www.pactera.com/" title="文思海辉">
											<img src="/Cxphp.cn/static/img/index/pactera.png?ver=3.1.7" alt="文思海辉"/>
										</a>
									</li>
									<li>
										<a rel="nofollow" target="_blank" href="http://www.chekucafe.com/" title="车库咖啡">
											<img src="/Cxphp.cn/static/img/index/cheku.png?ver=3.1.7" alt="车库咖啡"/>
										</a>
									</li>
									<li>
										<a rel="nofollow" target="_blank" href="http://global.igt.com/" title="igt">
											<img src="/Cxphp.cn/static/img/index/igt.png?ver=3.1.7" alt="igt"/>
										</a>
									</li>

									<li>
										<a rel="nofollow" target="_blank" href="http://www.csdn.net/" title="CSDN">
											<img src="/Cxphp.cn/static/img/index/csdn.png?ver=3.1.7" alt="CSDN"/>
										</a>
									</li>

									<li>
										<a rel="nofollow" target="_blank" href="http://www.pinguo.us/" title="Camera360">
											<img src="/Cxphp.cn/static/img/index/Camera360.jpg?ver=3.1.7" alt="Camera360"/>
										</a>
									</li>
									<li>
										<a rel="nofollow" target="_blank" href="http://www.yinker.com" title="银客网">
											<img src="/Cxphp.cn/static/img/index/yinker.png?ver=3.1.7" alt="银客网"/>
										</a>
									</li>

								</ul>
							</div>
						</div>

						<div class="index-who">
							<div class="index-who-inner">
								<h3 class="index-who-title">谁可以用</h3>
								<ul class="index-who-grid">
									<li><i class="icon icon-code"></i>开发者</li>
									<li><i class="icon icon-dribbble"></i>设计师</li>
									<li><i class="icon icon-leaf"></i>创业团队</li>
									<li><i class="icon icon-bug"></i>测试团队</li>
									<li><i class="icon icon-lightbulb"></i>顾问咨询</li>
									<li><i class="icon icon-bullseye"></i>市场人员</li>
									<li><i class="icon icon-suitcase"></i>律师</li>
									<li><i class="icon icon-book"></i>媒体出版</li>
									<li><i class="icon icon-sitemap"></i>分布式团队</li>
									<li><i class="icon icon-building"></i>学生社团</li>
									<li><i class="icon icon-ambulance"></i>公益组织</li>
									<li><i class="icon icon-github-alt"></i>开源团队</li>
								</ul>
								<div class="index-who-footer">不论你身处哪个行业，从事哪个工作，只要您有团队协作的需求，就是CXPHP的用户</div>
							</div>
						</div>
						<h3 class="index-other-title">用心做好产品</h3>
						<ul class="index-other-list">
							<li>
								<a href="/plan">
									<img src="/Cxphp.cn/static/img/index/index-other-plan.png?ver=3.1.7" alt="付费方案"/>
									<h4>付费方案</h4>
									免费版、商业版任您选择
								</a>
							</li>
							<li>
								<a href="/mobile">
									<img src="/Cxphp.cn/static/img/index/index-other-mobile.png?ver=3.1.7" alt="移动版"/>
									<h4>移动版</h4>
									iPhone、Android全平台支持
								</a>
							</li>
							<li>
								<a href="/security">
									<img src="/Cxphp.cn/static/img/index/index-other-security.png?ver=3.1.7" alt="数据安全"/>
									<h4>数据安全</h4>
									保护数据安全，是我们的立身之本
								</a>
							</li>
							<li>
								<a href="/feedback">
									<img src="/Cxphp.cn/static/img/index/index-other-feedback.png?ver=3.1.7" alt="用户反馈"/>
									<h4>您的声音</h4>
									用心倾听您的声音，做好产品
								</a>
							</li>
						</ul>
					</div>
					<footer id="footer-outer" class="hidden-xs">
						<div class="columns">
							<ul class="column mr_210">
								<li><h2>产品</h2></li>
								<li><a href="/tour">功能特性</a></li>
								<li><a href="/security">数据安全</a></li>
								<li><a href="/plan">付费方案</a></li>
								<li><a href="/mobile">移动版本</a></li>
								<li><a href="/nonprofit">公益计划</a></li>
							</ul>
							<ul class="column mr_210">
								<li><h2>媒体</h2></li>
								<li><a href="/uservoice">用户怎么说</a></li>
								<li><a href="/customers">他们也在用</a></li>
								<li><a href="/press">媒体报道</a></li>
							</ul>
							<ul class="column mr_210">
								<li><h2>支持</h2></li>
								<li><a href="/guide">用户指南</a></li>
								<li><a href="/videos">帮助视频</a></li>
								<li><a href="/blog">官方博客</a></li>
								<!--<li><a href="javascript:;">用户社区</a></li>-->
								<li><a href="/feedback">在线反馈</a></li>
							</ul>
							<ul class="column">
								<li><h2>更多</h2></li>
								<li><a href="/about">关于我们</a></li>
								<li><a href="/contact">联系我们</a></li>
								<li><a href="/">工作机会</a></li>
								<li><a href="/privacy">隐私声明</a></li>
								<li><a href="/terms">服务条款</a></li>
							</ul>
						</div>
						<div class="text-center">
							© 2014 worktile.com &nbsp; 京ICP备13017353号-3 &nbsp; 京公网安备11010802012357号
						</div>
					</footer>
				</div>
			</div>
		</div>
		<script src="/Cxphp.cn/static/js/jquery.min.js"></script>
		<script src="/Cxphp.cn/static/js/bootstrap.min.js"></script>
	</body>
</html>