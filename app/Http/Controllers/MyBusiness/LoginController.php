<?php

namespace App\Http\Controllers\MyBusiness;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;//使用自定义的model类
use Gregwar\Captcha\CaptchaBuilder;//使用验证码的类
use Session;
class LoginController extends Controller
{
    //1 登录表单
    public function login()
    {
    	return view("Admin.login");

    } 
	//2 执行登录 
    public function dologin(Request $request)
    {
    	//3 获得表单提交的用户和密码
    		$name = $request->input('name');
    		$password = $request->input('password');
    		$ob = \DB::table('user')->where("name",$name)->first();
    		if($ob){
    			//4 判断密码是否正确
    			if($ob->password==$password){
  			//5 判断验证码是否正确
    		$mycode = session()->get("code");
    		if($mycode!=$request->input('code')){
    			return back()->with("msg","验证码错误");
    			//6 exit;//后退
    			//7 session()->flash("msg","验证码错误");//写入错误信息
    			//8 return redirect("admin/login");//重定向
    		}
    				//9 写入session
    				session()->set("adminuser",$ob);
    				//10 跳转到后台首页
    				return view("Business/index");
    			}

    			return back()->with("msg","用户或密码错误");
    		}else{
    			    	return back()->with("msg","用户或密码错误");
    		}
    }

	//11 获取验证码
	function captcha(){
	    $builder = new CaptchaBuilder;
	    $builder->build(130,32);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session()->flash('code',$phrase);
	    return response($builder->output())->header('Content-type','image/jpeg');
	}
	//12 执行退出
	public function logout()
	{
		//忘记session
		session()->forget("adminuser");
		//重定向
		return redirect("Business/login");
	}
}
