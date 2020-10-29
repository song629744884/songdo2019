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
        $lists = GoodsCategoryModel::getList($name);
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
        if($model->handleInsert($request)){
            return redirect('goodsCategory')->with('success','goodsCategory inserted');
        }
        return redirect()->with('error','faild to inserte goodsCategory');

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
        $data = GoodsCategoryModel::findById($id);
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
        $model = new GoodsCategoryModel();
        if($model->handleUpdate($id,$request)){
            return redirect('goodsCategory')->with('success','goodsCategory updated');
        }
        return redirect()->with('error','faild to update goodsCategory');

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
        if(GoodsCategoryModel::deleteById($id)){
            return redirect('goodsCategory')->with('success','goodsCategory deleted');
        }
        return redirect()->with('error','faild to delete goodsCategory');

    }
}
