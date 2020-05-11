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
        $lists = GoodsModel::name($name)->paginate(15);
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
        $requests = $request->all();
        $file = isset($requests['file'])?$requests['file']:null;
        $file && $model->photo = GoodsModel::upload_img($file,'uploads/goods');

        $model->name = $request->input('name');
        $model->intro = $request->input('intro');
        $model->price = $request->input('price');
        $model->cost_price = $request->input('cost_price');
        $model->number = $request->input('number');
        $model->shop_id = $request->input('shop_id');
        $model->goods_category_id = $request->input('goods_category_id');
        $model->createTime = date('Y-m-d H:i:s');
        $model->save();
        return redirect('goods')->with('success','goods inserted');
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
        $model = GoodsModel::findOrFail($id);
        $requests = $request->all();
        $file = isset($requests['file'])?$requests['file']:null;
        $file && $model->photo = GoodsModel::upload_img($file,'uploads/goods');

        $model->name = $request->input('name');
        $model->intro = $request->input('intro');
        $model->price = $request->input('price');
        $model->cost_price = $request->input('cost_price');
        $model->number = $request->input('number');
        $model->shop_id = $request->input('shop_id');
        $model->goods_category_id = $request->input('goods_category_id');
        //dd($model->goods_category_id);
        $model->updateTime = date('Y-m-d H:i:s');
        $model->save();
        return redirect('goods')->with('success','goods updated');
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
        $model = GoodsModel::findOrFail($id);
        $model->delete();
        return redirect('goods')->with('success','goods deleted');
    }
}
