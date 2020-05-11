<?php

namespace App\Http\Controllers\Admin;

use App\Models\RoleModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
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
        $roles = RoleModel::name($name)->orderBy('idx','desc')->paginate(15);
        return view('role/index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('role.create');
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
            'state' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('role/create')
                ->withErrors($validator)
                ->withInput();
        }
        $model = new RoleModel();
        $model->createTime = date('Y-m-d H:i:s');
        $model->name = $request->input('name');
        $model->memo = $request->input('memo');
        $model->state = $request->input('state');
        $model->idx = $request->input('idx');
        $model->save();
       return redirect()->route('role.index')->with('success', 'Role updated!');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'state' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('role/create')
                ->withErrors($validator)
                ->withInput();
        }
        $model = new RoleModel();
        $model->createTime = date('Y-m-d H:i:s');
        $model->name = $request->input('name');
        $model->memo = $request->input('memo');
        $model->state = $request->input('state');
        $model->idx = $request->input('idx');
        $model->save();
        return redirect()->route('role.index')->with('success', 'Role updated!');

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
        return view('role.show',['data'=>RoleModel::findOrFail($id)]);
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
            'state' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('role/show',['id'=>$id])
                ->withErrors($validator)
                ->withInput();
        }
        $model = RoleModel::findOrFail($id);
        $model->name = $request->input('name');
        $model->memo = $request->input('memo');
        $model->state = $request->input('state');
        $model->idx = $request->input('idx');
        $model->save();
        return redirect()->route('role.index')->with('success', 'Role updated!');

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
        $model = RoleModel::findOrFail($id);
        $model->delete();
        return redirect('role')->with('success', 'Role deleted!');
    }
}
