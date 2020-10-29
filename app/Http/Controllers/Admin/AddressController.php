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
        $lists = AddressModel::getList($userId);
        return view('address.myAddress',['lists'=>$lists]);
    }

    public function myAddressDetail($id){
        $data = AddressModel::findById($id);
        return view('address.myAddressDetai',['data'=>$data]);
    }

    public function myAddressInsert(Request $request){
        $request->validate([
            'place'=>'required',
            'house_nuber'=>'required',
            'tag'=>'required',
        ]);
        $model = new AddressModel();
        if($model->handleInsert($request)){
            return redirect('address')->with('success','address inserted');
        }
        return redirect()->with('error','faild to inserte address');



    }

    public function myAddressUpdate(Request $request, $id){
        $request->validate([
            'place'=>'required',
            'house_nuber'=>'required',
            'tag'=>'required',
        ]);

        $model = new AddressModel();
        if($model->handleUpdate($id,$request)){
            return redirect('address')->with('success','address updated');
        }
        return redirect()->with('error','faild to update address');

    }

    public function destroy($id)
    {
        //
        if(AddressModel::deleteById($id)){
            return redirect('address')->with('success','address deleted');
        }
        return redirect()->with('error','faild to delete address');
    }
}
