<?php

namespace App\Http\Controllers\Admin;

use App\Models\GoodsCategoryModel;
use App\Models\GoodsModel;
use App\Models\ShopModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GoodsController extends Controller
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
        $lists = GoodsModel::getList($name);
        return view('goods.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $goodsCategoryArr = GoodsCategoryModel::all();
        $shopArr = ShopModel::where('userId',Auth::id())->get();
        return view('goods.create',['goodsCategoryArr'=>$goodsCategoryArr,'shopArr'=>$shopArr]);
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
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'number'=>'required',
            'shop_id'=>'required',
            'goods_category_id'=>'required',
        ]);
        $model = new GoodsModel();
        if($model->handleInsert($request)){
            return redirect('goods')->with('success','goods inserted');
        }
        return redirect()->with('error','faild to inserte goods');


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
        $data = GoodsModel::findOrFail($id);
        $goodsCategoryArr = GoodsCategoryModel::all();
        $shopArr = ShopModel::where('userId',Auth::id())->get();
        return view('goods.show',['data'=>$data,'goodsCategoryArr'=>$goodsCategoryArr,'shopArr'=>$shopArr]);
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
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'number'=>'required',
            'shop_id'=>'required',
            'goods_category_id'=>'required',
        ]);
        $model = new GoodsModel();
        if($model->handleUpdate($id,$request)){
            return redirect('goods')->with('success','goods updated');
        }
        return redirect()->with('error','faild to update goods');


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

        if(GoodsModel::deleteById($id)){
            return redirect('goods')->with('success','goods deleted');
        }
        return redirect()->with('error','faild to delete goods');
    }
}
