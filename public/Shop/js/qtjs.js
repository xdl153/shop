			var countdown=60; 
			function settime(obj) {
				if (countdown == 0) { 
					obj.removeAttribute("disabled");    
					obj.value="获取验证码"; 
					countdown = 60;
					return;
				} else {
					obj.setAttribute("disabled", true); 
					obj.value="重新发送(" + countdown + ")"; 
					countdown--; 
				} 
				setTimeout(function(){
					settime(obj)
				},1000)
			}
                         //发送验证码
			function yzm(){
				var sj = $("#aaa").val();
				$.ajax({
					url:'/code',
					type:'post',
					async:true,
					data:{id:sj},
                                        headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        success:function(data){
						if(data === 'y'){
                                                    //alert('发送成功!');
						}
					},
					error:function(){
						alert('失败');
					}
				})
			}
                        //鼠标失去判断去数据库查询是是否存
                        $('#aaa').mouseleave(function(){
                            var sj = $("#aaa").val();
                            if(sj == ""){
                                $("#button").attr("disabled", true);
                            }
                            if(sj !== "" && !!(/^1[34578]\d{9}$/.test(sj))){
                            $.ajax({
                                url:'/demand',
                                type:'post',
                                async:true,
                                data:{phone:sj},
                                headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success:function(a){
                                        if(a === 'y'){
                                           $("#bbb").css("display","");
                                           $("#button").attr("disabled", true);
                                        }else{
                                           $("#yzmyzm").removeAttr("disabled");
                                           $("#ok").css("display","");
                                           $("#button").attr("disabled", true);
                                        }
                                },
                                error:function(){
                                        alert('ajax失败');
                                }
                             })
                            }
                        });
                        //不给发短信
                        $("#yzmyzm").attr({"disabled":"disabled"});
                        //不给注册
                        $("#button").attr({"disabled":"disabled"});
                        //
                        $('#aaa').focus(function(){
                            $("#bbb").css("display","none");
                        });
                        $('#aaa').focus(function(){
                            $("#ok").css("display","none");
                        });
                       
                        //鼠标光标定位到验证码文本框
                        $('#abc').focus(function(){
                            $('#pd').css("display","none");
                        });
                        //判断验证码
                        $('#abc').mouseleave(function(){
                            $('#pd').css("display","none");
                            var code = $("#abc").val();
                            if(code !== ""){
                                $.ajax({
                                url:'/demandcode',
                                type:'post',
                                async:true,
                                data:{code:code},
                                headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success:function(a){
                                        if(a === 'y'){
                                            
                                        }else{
                                            $('#pd').css({"color":"#FF6343","font-size":"13px","line-height":"15px","display":""});
                                            $("#button").attr("disabled", true);
                                        }
                                },
                                error:function(){
                                        alert('ajax失败');
                                }
                             })
                            }
                        });
                        //鼠标光标定位到密码文本框
                        $('#pwd1').focus(function(){
                            $('#mima').css("display","none");
                        });
                        $('#pwd2').mouseleave(function(){
                            var pwd1 = $("#pwd1").val();
                            var pwd2 = $("#pwd2").val();
                            if(pwd1 === pwd2 && pwd2 !== ''){
                                $('#mima').css("display","none");
                                $("#button").removeAttr("disabled");
                                if($("#bbb").css("display") !== 'none'){
                                    $("#button").attr("disabled", true);
                                }
                            }else{
                                $('#mima').html("请确保密码相同");
                                $('#mima').css({"display":"","color":"#FF6343","font-size":"13px","line-height":"15px"});
                                $("#button").attr("disabled", true);
                            }
                        });
                        //发送注册用户名数据
                        function register(){
                            //user  手机号码
                            //password 密码
                            var user = $("#aaa").val();
                            var pwd = $("#pwd2").val();
                                $.ajax({
                                    url:'/enroll',
                                    type:'post',
                                    async:true,
                                    data:{user:user,pwd :pwd},
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success:function(b){
                                            if( b === 'y'){
                                                alert('注册成功');
                                                location.href = "/";
                                            }else{
                                                alert('注册失败');
                                            }
                                    },
                                    error:function(){
                                            alert('ajax失败');
                                    }
                                });
                        }
                            function login(){
                            var name = $("#lPhone").val();
                            var password = $("#lPass").val();
                                $("#yhdl").html("登录中请稍等");
                                $("#yhdl").attr("disabled", true);
                                    $.ajax({
                                       url:'/dologin',
                                       type:'post',
                                       async:true,
                                       data:{name:name,password:password},
                                       headers: {
                                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                       },
                                       success:function(a){
                                           if( a === 'y'){
                                               window.location.reload();
                                           }else{
                                               $("#yhdl").html("用户名或密码错误");
                                           }
                                       },
                                       error:function(){
                                           alert('ajax失败');
                                       }
                                    });
                          };
                          $("#yhdl").attr("disabled", true);
                          $("#yhdl").html("请输入账号密码");
                          $("#lPhone").focus(function(){
                            var name = $("#lPhone").val();
                            var password = $("#lPass").val();
                              if(name == "" && password == ""){
                                    $("#yhdl").attr("disabled", true);
                                    $("#yhdl").html("请输入账号密码");
                              }
                              if(name !== "" && password !== ""){
                                    $("#yhdl").removeAttr("disabled");
                                    $("#yhdl").html("登录");
                              }
                          });
                          $("#lPhone").mouseleave(function(){
                            var name = $("#lPhone").val();
                            var password = $("#lPass").val();
                              if(name == "" && password == ""){
                                    $("#yhdl").attr("disabled", true);
                                    $("#yhdl").html("请输入账号密码");
                              }
                              if(name !== "" && password !== ""){
                                    $("#yhdl").removeAttr("disabled");
                                    $("#yhdl").html("登录");
                              }
                              if(name !== ""){
                                  $("#yhdl").html("请输入密码");
                              }
                              if(name == ""){
                                  $("#yhdl").html("请输入手机号码");
                              }
                          });
                          $("#lPass").focus(function(){
                            var name = $("#lPhone").val();
                            var password = $("#lPass").val();
                              if(password == "" && name == ""){
                                $("#yhdl").attr("disabled", true);
                                $("#yhdl").html("请输入账号密码");
                              }
                              if(password !== ""){
                                $("#yhdl").removeAttr("disabled");
                                $("#yhdl").html("登录");
                              }
                          });
                          $("#lPass").mouseleave(function(){
                            var name = $("#lPhone").val();
                            var password = $("#lPass").val();
                              if(password == "" && name == ""){
                                $("#yhdl").attr("disabled", true);
                                $("#yhdl").html("请输入账号密码");
                              }
                              if(password !== ""){
                                $("#yhdl").removeAttr("disabled");
                                $("#yhdl").html("登录");
                              }
                          });
                          function exit(){
                              $.ajax({
                                   url:'/logout',
                                   type:'post',
                                   async:true,
                                   headers: {
                                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                   },
                                   success:function(a){
                                       if( a === 'y'){
                                           location.href = "/";
                                       }else{
                                           alert('退出失败');
                                       }
                                   },
                                   error:function(){
                                       alert('ajax失败');
                                   }
                            });
                          };