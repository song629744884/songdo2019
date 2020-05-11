<?php

namespace App\Http\Controllers\Admin;

use App\Models\GoodsCategoryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsCategoryController extends Controller
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
        $lists = GoodsCategoryModel::name($name)->paginate(15);
        return view('goodsCategory.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('goodsCategory.create');
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
        ]);
        $model = new GoodsCategoryModel();
        $model->name = $request->input('name');
        $model->createTime = date('Y-m-d H:i:s');
        $model->save();
        return redirect('goodsCategory')->with('success','goodsCategory inserted');
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
        $data = GoodsCategoryModel::findOrFail($id);
        return view('goodsCategory.show',['data'=>$data]);
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
        ]);
        $model = GoodsCategoryModel::findOrFail($id);
        $model->name = $request->input('name');
        $model->updateTime = date('Y-m-d H:i:s');
        $model->save();
        return redirect('goodsCategory')->with('success','goodsCategory updated');

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
        $model = GoodsCategoryModel::findOrFail($id);
        $model->delete();
        return redirect('goodsCategory')->with('success','goodsCategory deleted');
    }
}
