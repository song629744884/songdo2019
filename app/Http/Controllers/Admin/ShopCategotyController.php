<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShopCategoryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShopCategotyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lists = ShopCategoryModel::paginate(15);
        return view('shopCategory/index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shopCategory.create');
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('shopCategory/create')
                ->withErrors($validator)
                ->withInput();
        }
        $model = new ShopCategoryModel();
        $model->createTime = date('Y-m-d H:i:s');
        $model->name = $request->input('name');
        $model->save();
        return redirect('shopCategory')->with('success', 'shopCategory updated!');

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
        return view('shopCategory.show',['data'=>ShopCategoryModel::findOrFail($id)]);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('shopCategory/create')
                ->withErrors($validator)
                ->withInput();
        }
        $model = ShopCategoryModel::findOrFail($id);
        $model->updateTime = date('Y-m-d H:i:s');
        $model->name = $request->input('name');
        $model->save();
        return redirect('shopCategory')->with('success', 'shopCategory updated!');

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
        $model = ShopCategoryModel::findOrFail($id);
        $model->delete();
        return redirect('shopCategory')->with('success', 'ShopCategory deleted!');
    }



    public function getShopCategoryList(){
        $lists = ShopCategoryModel::all();
        return response()->json(['code'=>1,'data'=>$lists]);
    }

    public function shopCategorySave(Request $request){
        $id = $request->input('id');
        if(isset($id)){
            ShopCategoryModel::where('id',$id)->update($request->all());
            return response()->json(['code'=>1,'msg'=>'update ok']);
        }else{
            ShopCategoryModel::create($request->all());
            return response()->json(['code'=>1,'msg'=>'insert ok']);
        }
    }

    public function shopCategoryDel(Request $request){
        $id = $request->input('id');
        $model = ShopCategoryModel::findOrFail($id);
        if($model->delete()){
            return response()->json(['code'=>1,'msg'=>'delete ok']);
        }
        return response()->json(['code'=>0,'msg'=>'delete fail']);
    }
}
