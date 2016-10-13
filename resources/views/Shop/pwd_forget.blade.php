<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta property="wb:webmaster" content="239d3d1dbdde1b2c" />
        <link rel="stylesheet" type="text/css" href="{{ asset('Shop/css/reset.css') }}" />
        <link rel="stylesheet" href="{{ asset('Shop/css/common.css') }}"/>
        <link rel="stylesheet" href="{{ asset('Shop/css/forget_passwd.css') }}"/>

        <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="{{ asset('Shop/css/frontPage-ie8-fix.css') }}" /><![endif]-->
        <!--[if lte IE 10]><script>document.createElement('footer');document.createElement('header');document.createElement('nav');document.createElement('section');document.createElement('article');</script><![endif]-->
        <!--[if lte IE 7]><script>window.onload=function(){location.href="/ie6warning/"}</script><![endif]-->
        <title>找回密码</title>
        <script type="text/javascript">

            (function(document, screen) {
                if (screen.width < 760) {
                    document.location.href="/mobile/";
                }
            }(document, screen));
        </script>
    </head>
    <body>

        <header id="header" class="">
            <div class="common-width">

                    <section class="clearfix">
                        <h1 class="logo" title="外卖超人">
                            <a href="index.html"></a>
                        </h1>
                        <span class="page-name"> 返回  | 找回密码</span>
                    </section>


            </div>
        </header>

        <section class="main">
            <div class="common-width">

                <div class="main-inner">
                    <div class="passwd-nav-box">
                        <ol class="passwd-nav">
                            <li class="first done">
                                <span><i>1</i><em>身份验证</em></span>
                            </li>
                            <li class="middle ">
                                <span><i>2</i><em>重设登录密码</em></span>
                            </li>
                            <li class="last ">
                                <span><i>3</i><em>完成</em></span>
                            </li>
                        </ol>
                    </div>
                    <form>
                        <!-- 找回密码一 -->
                        <div class="fill-data-box" id="phoneStep">
                            <div class="fill-data">
                                <div class="title">手机号码：</div>
                                <div class="form-group w275">
                                    <input id="phone"type="text" maxlength="11" id="phone" name="phone" class="form-text" placeholder="输入您常用的手机号码"/>
                                </div>
                                <input id="code" style="width:140px;"type="text" />　<button onclick="settime(this);yzm();" style="width:110px;height:34px;background-color:#80BF2F;"><span style="display: inline-block;padding: 4px 12px;color: #ffffff;text-align: center;vertical-align: middle;cursor: pointer;line-height:5px;">获取验证码</span></button><br><br><span></span>
                                <button id="button" class="form-btn" id="phoneNextStep">下一步</button>
                                <ul class="other-way">
                                    <li>其他方式</li>
                                    <li>联系客服，可以拨打<span>4001 517 577</span></li>
                                </ul>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        <div style="height:180px;">
        </div>
        </section>
        <footer id="footer">
            <div class="footer-first gray">
                <div class="company-info clearfix fs14 gray">
                    <a href="/about_us/" target="_blank"  rel="nofollow">关于我们</a>
                    <a href="/help/" target="_blank"  rel="nofollow">帮助中心</a>
                    <a href="/terms-and-conditions/" target="_blank"  rel="nofollow">法律声明</a>
                    <a href="/jobs/" target="_blank"  rel="nofollow">人才招聘</a>
                    <a href="/contact/" class="last" target="_blank"  rel="nofollow">联系我们</a>
                    <a href="/restaurant/list/shanghai/1/" class="last" target="_blank" style="display:none">上海餐厅导航</a>
                </div>
            </div>
            <div class="footer-last">
                <a target="_blank" class="foot-logo-1 base-logo" href="/"></a>
                <div class="tc fs14 light-gray mb10">
                  ©2014 waimaichaoren.com All Rights Reserved - 沪ICP备11019908号
                </div>
            </div>
        </footer>


        <script type="text/javascript" src="{{ asset('Shop/js/jquery-1.7.2.min.js') }}"></script>

        <script>
            var mobile_validate_url = '/ajax/common_validate_sms_code/',
                email_validate_url = '',
                finish_send_mail_url = '',
                password_reset_url = '/account/password/reset_page/',

                password_timeout_url = '/account/password/request_timeout/',
                reset_password_url = '/ajax/password_reset_via_mobile_reset/',
                password_reset_done = '/account/password/reset_done/',

                captcha_url = '/captcha/',

                ajax_password_reset_via_mobile_start = '/ajax/password_reset_via_mobile_start/',
                common_sms_code = '/ajax/common_sms_code/'
        </script>
        <script src="{{ asset('Shop/js/forget_passwd.js') }}"></script>
        <script>
            $("#button").click(function(){
                alert('ok');
            });
        </script>
        <!-- Baidu Analytics -->


    </body>
</html>