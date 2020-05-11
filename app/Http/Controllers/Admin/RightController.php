<?php

namespace App\Http\Controllers\Admin;

use App\Models\RightModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RightController extends Controller
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
        $data = RightModel::where(function($query) use ($name){
            if($name) {
                $query->where('name', 'like', '%'.$name.'%');
            }
        })->orderBy('idx','desc')->get();
        $data = $this->handleData($data);
        return view('right/index',['data'=>$data]);
    }

    private function handleData($data){
        $filtered = $data->filter(function ($value, $key) {
            return $value->type == 1;
        });
        $list = collect();
        foreach($filtered as $item){
            $list->push($item);
            foreach($data as $datum){
                if($item->id == $datum->parentId){
                    $list->push($datum);
                }
            }
        }
        return $list;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $topMenus = RightModel::where([['state','=',1],['parentId','=',0]])->get();
        return view('right.create',['topMenus'=>$topMenus]);
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
            'type' => 'required',
            'parentId' => 'required',
            'url' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('right/create')
                ->withErrors($validator)
                ->withInput();
        }
        $model = new RightModel();
        $model->createTime = date('Y-m-d H:i:s');
        $model->type = $request->input('type');
        $model->parentId = $request->input('parentId');
        $model->name = $request->input('name');
        $model->url = $request->input('url');
        $model->state = $request->input('state');
        $model->idx = $request->input('idx');
        $model->save();
        return redirect()->route('right.index')->with('success', 'Right updated!');
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
        $topMenus = RightModel::where([['state','=',1],['parentId','=',0]])->get();
        return view('right.show',['data'=>RightModel::findOrFail($id),'topMenus'=>$topMenus]);
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
            'type' => 'required',
            'parentId' => 'required',
            'url' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('right.show',['id'=>$id])
                ->withErrors($validator)
                ->withInput();
        }
        $model =  RightModel::findOrFail($id);
        $model->type = $request->input('type');
        $model->parentId = $request->input('parentId');
        $model->name = $request->input('name');
        $model->url = $request->input('url');
        $model->state = $request->input('state');
        $model->idx = $request->input('idx');
        $model->save();
        return redirect()->route('right.index')->with('success', 'Right updated!');
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
        $model = RightModel::findOrFail($id);
        $model->delete();
        return redirect('right')->with('success', 'Contact deleted!');
    }

    public function search(Request $request){
        dd(123);
        $name = $request->input('name');
        $data = RightModel::where('name','like',$name)->get();
        return view('right/index',['data'=>$data]);
    }

    public function share(){
       $menus =  RightModel::where('type',1)->orderBy('idx','desc')->get();
        foreach($menus as &$menu){
            $menu->items = RightModel::where('parentId',$menu->id)->where('type',2)->orderBy('idx','desc')->get();
        }
        //dd($menus->toArray());
        return $menus;
    }

    public function getMenus(){
        $menus =  RightModel::where('type',1)->orderBy('idx','desc')->get();
        foreach($menus as &$menu){
            $menu->list = RightModel::where('parentId',$menu->id)->where('type',2)->orderBy('idx','desc')->get();
        }
        return response()->json(['code'=>1,'menus'=>$menus]);
    }
}
