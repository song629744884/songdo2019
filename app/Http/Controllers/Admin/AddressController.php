<?php

namespace App\Http\Controllers\Admin;

use App\Models\AddressModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    //
    public function myAddressList(){
        $userId = Auth::id();
        $lists = AddressModel::where('user_id',$userId)->get();
        return view('address.myAddress',['lists'=>$lists]);
    }

    public function myAddressDetail($id){
        $data = AddressModel::findOrfail($id);
        return view('address.myAddressDetai',['data'=>$data]);
    }

    public function myAddressInsert(Request $request){
        $request->validate([
            'place'=>'required',
            'house_nuber'=>'required',
            'tag'=>'required',
        ]);
        $model = new AddressModel();
        $model->user_id = Auth::id();
        $model->place = $request->input('place');
        $model->house_nuber = $request->input('house_nuber');
        $model->tag = $request->input('tag');
        $model->createTime = date('Y-m-d H:i:s');
        $model->save();
        return 'ok';
    }

    public function myAddressUpdate(Request $request, $id){
        $request->validate([
            'place'=>'required',
            'house_nuber'=>'required',
            'tag'=>'required',
        ]);
        $model = AddressModel::findOrFail($id);
        $model->user_id = Auth::id();
        $model->place = $request->input('place');
        $model->house_nuber = $request->input('house_nuber');
        $model->tag = $request->input('tag');
        $model->updateTime = date('Y-m-d H:i:s');
        $model->save();
        return 'ok';
    }

    public function destroy($id)
    {
        //
        $model = AddressModel::findOrFail($id);
        $model->delete();
        return 'ok';
    }
}
