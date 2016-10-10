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

        <link rel="stylesheet" href="{{ asset('Shop/css/common.css') }}"/>

        <style>
            #help_container h3,
            #help_container h4{font-weight: normal;font-size:.875em;line-height: 1.5em}
            #kxb {margin-top:6px;}
            #kxb li{line-height:1.6;}
        </style>

        <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
        <!--[if lt IE 9]>
        <script src="{{ asset('Shop/js/respond.js') }}"></script>
        <script>
            var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video, dh-dialog, dh-checkbox".split(', ');
             var i= e.length;while (i--){document.createElement(e[i])}
        </script>
        <![endif]-->
        <title>帮助中心</title>
    </head>
    <body class="day " ng-controller="bodyCtrl"  day-or-night>
        <section class="common-back" id="wrapBackground">

                <header id="header">
                    <div class="common-width clearfix">
                        <h1 class="fl">
                            <a class="logo base-logo" href="index.html">外卖超人</a>
                        </h1>

                            <ul class="member" login-box>
                                <li><a href="index.html" class="index">首页</a></li>
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
                    <img src="{{ asset('Shop/images/wx.png') }}" alt="扫描二维码" />
                    <em ng-click="qrCodeStatus=true">X</em>
                </div>

                <div ng-controller="colorAction">
                    <div class="dayColor_two"></div>
                    <div class="dayColor_one"></div>
                    <div class="dayColor_three" ng-class="{dayColor_threeActive:threeActive}"></div>
                </div>


        <div class="footer-location-page common-width">
            <div id="help_container" class="mainwidget">
                <div class="content" style="width:90%;">
                    <div class="titleContainer">
                        <h1>使用帮助</h1>
                    </div>
                    <hr/>
                    <div class="helpDescription">
                        <h2>服务使用步骤：</h2>
                        <ol>
                            <li>1. 请输入您的地址</li>
                            <li>2. 选择您喜爱的餐厅</li>
                            <li>3. 选择您喜爱的菜式下单，并输入确认姓名、联系电话、送餐地址以及备注等，完成订餐。</li>
                        </ol>
                        <br/>
                        <h2>常见问题：</h2>
                        <div>
                            <h3>问：外卖超人的费用是多少？收取快递费吗？</h3>
                            <h4>答：我们的服务是完全免费的。您的快递费是支付给快递公司的，外卖超人不会从中获益。</h4>
                            <br>
                            <h3>问：快递公司费用是固定的吗？</h3>
                            <h4>答：根据您的菜品数量以及送餐距离，快递公司将会负责统计快递费用，如有变更，我们会及时通知您。</h4>
                            <br>
                            <h3>问：我需要注册才能享受送餐服务吗？</h3>
                            <h4>答：无需注册，三步完成点餐。您只需输入送餐地址，浏览网站选择您喜欢的餐厅和菜式，并下单即可。当然，如果您成为会员，我们会定期发送优惠信息至您的邮箱。</h4>
                            <br>
                            <h3>问：外卖超人接受电话订餐吗？</h3>
                            <h4>答：由于需要网络测距，暂时不接受电话订餐服务。</h4>
                            <br>
                            <h3>问：我可以同时在几家餐馆订餐吗？</h3>
                            <h4>答：如果您想在几家餐馆订餐，须分开下单,订单暂时不能合并。如有快递费，将分别结算。</h4>
                            <br>
                            <h3>问：我怎样才可以确定送单时间？</h3>
                            <h4>答：确认订单页面选择您想要送达的时间，为了保证及时送达11:30~13:30用餐高峰期，外卖超人建议您提前1小时订餐。</h4>
                            <br>
                            <h3>问：在下单后，我还可以修改订单吗？</h3>
                            <h4>答：下单成功后，订单信息将不可修改，如果您要取消订单请在【个人中心】-【我的订单】获取餐厅电话沟通，避免不必要纠纷给您造成麻烦。</h4>
                            <br>
                            <h3>问：我的外卖多久可以送到呢？</h3>
                            <h4>答：通常在45~60分钟内可以送达。如遇用餐高峰与恶劣天气送餐时间将会延长，客服会再次为您确认。由第三方快递配送的餐厅通常需要90分钟左右的配单时间。外卖超人拥有贴心预约功能，建议提前一至两个小时预订您的外卖，以便快递尽早为您送达。</h4>
                            <br>
                        </div>
                        <p>
                            当您提交订单成功后，您会收到一条确认短信，正常情况餐品会准时送达，另外短信内包含了餐厅电话，您也可以直接致电餐厅了解情况，如果对餐厅不满意您可以致电4001-517-577投诉。
                        </p>
                        <h2 id="kxbHelp">氪星币规则：</h2>
                        <div>
                            <h3>外卖超人氪星币是一项会员专属回馈计划：</h3>
                            <br>
                            <h4>超人注册会员在外卖超人所获得的氪星币，可用于兑换各式各样的礼品，未来还有更好玩的活动和奖励！每个小超人都有一个信念：积少成多、聚沙可成塔，跟同伴在一起发挥自己最大的价值！</h4>
                            <ol id="kxb">
                                <li>1.只有已登录用户才能获取氪星币，未登录用户视作自动放弃此权利。</li>
                                <li>2.每次订餐您都将获得订餐金额X10的氪星币，将在订单完成后可供使用。</li>
                                <li>3.每次评论订单您都将获得30个氪星币。</li>
                                <li>4.每位用户每天最多可以获得3000个氪星币。</li>
                                <li>5.订单状态如果最终为失败时，获取的氪星币将自动收回。</li>
                            </ol>
                            <br>
                            <h3>违规处理：</h3>
                            <h4>如果会员利用系统漏洞作弊等违规方式获得积分，经查证后，将查封会员账号，并追缴相关积分，并保留追究相应法律责任的权利。</h4>
                            <br>
                            <h3>修改及终止：</h3>
                            <h4>外卖超人保留对本活动细则中条款的解释的权利，并有权根据需要取消本细则或增删、修订细则的权利（包括但不限于参加资格、氪星币计算及兑换标准）。</h4>
                        </div>
                        <p><a href="index.html" class="link">开始订餐</a></p>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </section>

            <footer id="footer">
            <div class="footer-first gray">
                <div class="company-info clearfix fs14 gray">
                    <a href="about.html" target="_blank"  rel="nofollow">关于我们</a>
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
                咨询加QQ群：337212031
            </div>
        </dh-dialog>

         <ul class="site-fixed">
            <li class="scroll-top"><img src="{{ asset('Shop/images/scroll_top1.png') }}" alt=""/> </li>
            <li class="scorll-feekback" ng-click="userFeedback=true">
                <img src="{{ asset('Shop/images/scorll_feekback.png') }}" alt=""/>
                <div>意见反馈</div>
            </li>
            <li class="scroll-wx">
                <img src="{{ asset('Shop/images/scroll_wx.png') }}" alt=""/>
                 <div><img src="{{ asset('Shop/images/wx.png') }}" alt=""/></div>
            </li>
        </ul>

        <script type="text/javascript" src="{{ asset('Shop/js/angular.min.js') }}"></script>
        <script src="{{ asset('Shop/js/common.js') }}"></script>


        <script src="{{ asset('Shop/js/service.js') }}"></script>

        <script>var feedbackUrl = '/ajax/feedback/';var app = angular.module("app", ["dh.dialog", "dh.form", 'dh.service', 'dh.other']);</script>
        <!--[if lt IE 9]><script src="{{ asset('Shop/js/fix.js') }}"></script><![endif]-->


        <script>app.controller('bodyCtrl',function(){})</script>


        <script>angular.bootstrap(document, ["app"]);</script>

        <!-- Baidu Analytics -->


    </body>
</html>
