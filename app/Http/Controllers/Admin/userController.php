<?php

namespace App\Http\Controllers\Admin;

use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function usersList(Request $request){
        $name = $request->input('name');
        $users = UserModel::name($name)->paginate(15);
        return view('user/index',['users'=>$users]);
    }

    public function usersShow($id){
        $user = UserModel::findOrFail($id);
        $roles = RoleModel::where('state',1)->get();
        return view('user/show',['data'=>$user,'roles'=>$roles]);
    }

    public function usersUpdate(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'state'=>'required',
        ]);
        $arr = $request->except(['_token']);
        //$id = $request->input('id');
        $user = UserModel::findOrFail($id);
        $user->name =  $arr['name'];
        $user->phone = $arr['phone'];
        $user->email = $arr['email'];
        $user->address = $arr['address'];
        $user->state = $arr['state'];
        $user->role_id = $arr['role_id'];
        $user->save();
        return redirect('user/index')->with('success', 'User updated!');
    }

    public function usersDelete($id){
        $user = UserModel::findOrFail($id);
        $user->delete();
        return redirect('user/index')->with('success', 'User delete success!');
    }
    //
    public function person(){
        //$userModel = new userModel();
        $id =  Auth::id();
        $data = UserModel::find($id);
        return view('user/person',['data'=>$data]);
    }

    public function personSave(Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);
        $arr = $request->except(['_token']);
        $id = $request->input('id');
        $user = UserModel::findOrFail($id);
        $user->name =  $arr['name'];
        $user->phone = $arr['phone'];
        $user->email = $arr['email'];
        $user->address = $arr['address'];

        $user->save();

        return redirect('admin/index')->with('success', 'User updated!');

    }

    public function reset(){
        return view('user/reset');
    }

    public function resetPassword(Request $request){
        $this->validate($request, [
            'oldPassword'=>['required'//不为空
            ],
            'password'=>['required',"digits_between:6,18"//不为空
            ],
            'rePassword'=>['required',"same:password"//不为空,两次密码是否相同
            ],
        ],[
            'oldPassword.required'=>"旧密码不能为空",
            'password.required'=>"密码不能为空",
            'rePassword.required'=>"确认密码不能为空",
            'rePassword.same'=>'密码与确认密码不匹配',
        ]);

        $id = Auth::id();
        $oldPassword = $request->input('oldPassword');
        $password = $request->input('password');
        //$rePassword = $request->input('rePassword');
        $user = UserModel::find($id);
        if(!Hash::check($oldPassword,$user->password)){
            return view('user/reset')->with("errors","用户不存在");

        }
        $user->password = Hash::make($password);
        $user->save();
        return redirect('admin/index')->with('success', 'User updated!');

    }

    function login(Request $request){
        if ($request->isMethod('post')) {
            $validator = $this->validateLogin($request->input());
            if ($validator->fails()) {
                return response()->json(['code'=>0,'msg'=>'验证失败']);
            }
            //if (Auth::guard('users')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            if($user = UserModel::where('email',$request->email)->first()){
                if(!Hash::check($request->password,$user->password)){
                    return response()->json(['code'=>0,'msg'=>'密码错误']);
                }
                $token = $user->generateToken();
                return response()->json(['code'=>1,'msg'=>'登录成功','token'=>$token]);     //login success, redirect to admin
            } else {
                return response()->json(['code'=>0,'msg'=>'账号不存在']);
            }
        }
    }

    //登录页面验证
    protected function validateLogin(array $data)
    {
        return Validator::make($data, [
            'email' => 'required',
            'password' => 'required',
        ], [
            'required' => ':attribute 为必填项',
            'min' => ':attribute 长度不符合要求'
        ], [
            'email' => '账号',
            'password' => '密码'
        ]);
    }

    public function logout()
    {
        $user = Auth::guard('users')->user();
        if ($user) {
            $user->api_token = null;
            $user->save();
        }

        return response()->json(['code'=>1,'msg'=>'退出成功']);
    }

}
