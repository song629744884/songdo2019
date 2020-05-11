<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShopCategoryModel;
use App\Models\ShopModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $name = $request->input('name');
        $lists = ShopModel::name($name)->paginate(15);
        return view('shop.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorys = ShopCategoryModel::all();
        $userArr = UserModel::where('role_id',2)->get();
        return view('shop.create',['categorys'=>$categorys,'userArr'=>$userArr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'theme'=>'required',
            'intro'=>'required',
            'userId'=>'required',
            'shop_category_id'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect('shop/create')
                ->withErrors($validator)
                ->withInput();
        }
        $model = new ShopModel();
        $requests = $request->all();
        $file = isset($requests['file'])?$requests['file']:null;
        $file && $model->photo = ShopModel::upload_img($file,'uploads/shop');
        $model->createTime = date('Y-m-d H:i:s');
        $model->name = $request->input('name');
        $model->theme = $request->input('theme');
        $model->intro = $request->input('intro');
        $model->userId = $request->input('userId');
        $model->shop_category_id = $request->input('shop_category_id');
        $model->save();
        return redirect('shop')->with('success', 'shop updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = ShopModel::findOrfail($id);
        $categorys = ShopCategoryModel::all();
        $userArr = UserModel::where('role_id',2)->get();
        return view('shop.show',['data'=>$data,'categorys'=>$categorys,'userArr'=>$userArr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'theme'=>'required',
            'intro'=>'required',
            'userId'=>'required',
            'shop_category_id'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect('shop/show')
                ->withErrors($validator)
                ->withInput();
        }

        $model = ShopModel::findOrFail($id);
        $requests = $request->all();
        $file = isset($requests['file'])?$requests['file']:null;
        $file && $model->photo = ShopModel::upload_img($file,'uploads/shop');
        $model->updateTime = date('Y-m-d H:i:s');
        $model->name = $request->input('name');
        $model->theme = $request->input('theme');
        $model->intro = $request->input('intro');
        $model->userId = $request->input('userId');
        $model->shop_category_id = $request->input('shop_category_id');
        $model->save();
        return redirect('shop')->with('success', 'shop updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = ShopModel::findOrFail($id);
        $model->delete();
        return redirect('shop')->with('success','shop deleted');
    }
}
