<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsModel extends Model
{
    //
    protected $table = 'goods';
    protected $primaryKey  = 'id';
    public $timestamps = false;
    public function scopeName($query, $name){
        $query->where('name','like','%'.$name.'%');
    }
    public function shop(){
        return $this->hasOne('App\Models\ShopModel','id','shop_id');
    }
    public function category(){
        return $this->hasOne('App\Models\GoodsCategoryModel','id','goods_category_id');
    }
    public static function upload_img($file,$filepath){
        $file_type = ['jpeg','jpg','gif','gpeg','png'];
        if(isset($file) && is_object($file)){
            $file_ext = $file->extension();  //获取图片后缀
            if(in_array(strtolower($file_ext),$file_type)){
                $new_name = 'img'.time().rand(10000,99999).'.'.$file->getClientOriginalExtension();//取个新名字
                if($file->move($filepath,$new_name)){
                    return $filepath.'/'.$new_name;
                }else{
                    return 3;//移动失败
                }
            }else{
                return 2;//格式不符
            }
        }else{
            return 1; //没有图片
        }
    }

    public static function getList($name)
    {

        return self::name($name)->paginate(15);
    }

    public function handleInsert($request)
    {
        $requests = $request->all();
        $file = isset($requests['file'])?$requests['file']:null;
        $file && $this->photo = self::upload_img($file,'uploads/goods');

        $this->name = $request->input('name');
        $this->intro = $request->input('intro');
        $this->price = $request->input('price');
        $this->cost_price = $request->input('cost_price');
        $this->number = $request->input('number');
        $this->shop_id = $request->input('shop_id');
        $this->goods_category_id = $request->input('goods_category_id');
        $this->createTime = date('Y-m-d H:i:s');
        return $this->save();
    }

    public function handleUpdate($id,$request)
    {
        $model = self::findOrFail($id);
        $requests = $request->all();
        $file = isset($requests['file'])?$requests['file']:null;
        $file && $model->photo = self::upload_img($file,'uploads/goods');

        $model->name = $request->input('name');
        $model->intro = $request->input('intro');
        $model->price = $request->input('price');
        $model->cost_price = $request->input('cost_price');
        $model->number = $request->input('number');
        $model->shop_id = $request->input('shop_id');
        $model->goods_category_id = $request->input('goods_category_id');
        //dd($model->goods_category_id);
        $model->updateTime = date('Y-m-d H:i:s');
        return $model->save();
    }

    public static function deleteById($id)
    {
        $model = self::findOrFail($id);
        return $model->delete();
    }

}
