<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RightModel extends Model
{
    //
    protected $dict = [
      'type'=>['1'=>'目录','2'=>'页面'],
      'state'=>['1'=>'正常','2'=>'禁用'],
    ];
    protected $table = 'right';
    protected $primaryKey  = 'id';
    public $timestamps = false;
    protected $appends = ['type_str','parent_name','state_str'];

    public function getTypeStrAttribute(){
        return $this->dict['type'][$this->type];
    }
    public function getStateStrAttribute(){
        return $this->dict['state'][$this->state];
    }
    public function getParentNameAttribute(){
        if($this->parentId == 0){
            return '顶级菜单';
        }
        $res = $this->find($this->parentId);
        return $res?$res['name']:'';
    }
}
