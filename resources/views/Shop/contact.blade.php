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

        <style text="type/css">
            .titleContainer h1{color:#666;font-weight: normal;font-size: 24px;}
            .titleContainer span{color:#c4c4c4;margin-left:10px;font-size:20px;}
            .contactItem{padding-top:10px;color:#666;}
            .contactItem .th{color:#333333;font-size: 15px;}
            .contactItem table{border-left:1px solid #dfdfdf;border-top:1px solid #dfdfdf;width:430px;}
            .contactItem td{width: 168px;height:30px;line-height:30px;text-align:center;font-size:14px;border-bottom:1px solid #dfdfdf;border-right:1px solid #dfdfdf;}
            .footer-location-page p{margin:7px 0;}
        </style>

        <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
        <!--[if lt IE 9]>
        <script src="{{ asset('Shop/js/respond.js') }}"></script>
        <script>
            var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video, dh-dialog, dh-checkbox".split(', ');
             var i= e.length;while (i--){document.createElement(e[i])}
        </script>
        <![endif]-->
        <title>联系我们</title>
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
        <div id="contact_container" class="mainwidget">
            <div class="content">
                <div class="titleContainer">
                    <h1>联系我们<span>Contact us</span></h1>
                </div>
                <div class="contactDescription">
                    <div class="contactItem">
                        <p class="th">客户服务</p>
                        <p>4001-517-577 （早上10点 - 午夜24点）</p>   
                    </div>
                    <div class="contactItem">
                        <p class="th">建议与想法</p>
                        <p>有问题？有意见或很棒的想法？为超人服务鼓掌？请联系我们：</p>
                        <p><a class="link" href="mailto:support@waimaichaoren.com">support@waimaichaoren.com</a></p>
                    </div>
                    <div class="contactItem">
                        <p class="th">餐厅入驻</p>
                        <p>您是餐厅老板？希望通过外卖超人平台带来更多的外卖生意？</p>
                        <p>请联系我们的销售(早上9点 - 下午6点)：</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td>南京：18921421603</td>
                                    <td>杭州：18521713802</td>
                                </tr>
                                <tr>
                                    <td>苏州：13205194833</td>
                                    <td>宁波：18521713804</td>
                                </tr>
                                <tr>
                                    <td>福州：18521713805</td>
                                    <td>厦门：18521713806</td>
                                </tr>
                                <tr>
                                    <td>重庆：18521713807</td>
                                    <td>成都：15850059690</td>
                                </tr>
                                <tr>
                                    <td>青岛：18521713809</td>
                                    <td>广州：18521713810</td>
                                </tr>
                                <tr>
                                    <td>天津：13951074700</td>
                                    <td>郑州：18638163623</td>
                                </tr>
                                <tr>
                                    <td>武汉：18301980298</td>
                                    <td>北京：18016025989</td>
                                </tr>
                                <tr>
                                    <td>深圳：13851586704</td>
                                    <td>济南：18560057551</td>
                                </tr>
                                <tr>
                                    <td>长沙：18815270671</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>或者发邮件至：<a class="link" href="mailto:kaidian@waimaichaoren.com">kaidian@waimaichaoren.com</a></p>
                    </div>
                    <div class="contactItem">
                        <p class="th">商务合作</p>
                        <p>求商务合作？请记得不要与我们客服或销售联系哦，请通过以下邮件方式与我们市场部门联系：</p>
                         <p><a class="link" href="mailto:marketing@waimaichaoren.com">marketing@waimaichaoren.com</a></p>
                    </div>
                    <div class="contactItem">
                        <p class="th">工作机会</p>
                        <p>求工作？欢迎加入我们快速成长的团队，共同创建网络订餐外卖的未来！请将您的简历发送至以下电子邮箱：</p>
                        <p><a class="link" href="mailto:jobs@waimaichaoren.com">jobs@waimaichaoren.com</a></p>
                    </div><div class="contactItem">
                        <p class="th">超人地址</p>
                        <p>为了能有更多的美食供您选择，超人永远都会在这座城市飞来飞去从不觉得累，只是。。。超人偶尔也会偷懒。偷懒的时候，超人在：</p>
                        <p>上海市静安区武定西路1189号6楼 606室 邮政编码 200042</p>
                    </div>
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
