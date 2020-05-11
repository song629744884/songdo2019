<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    //
    protected $dict = [
        'state'=>['1'=>'正常','2'=>'禁用'],
    ];
    protected $table = 'role';
    protected $primaryKey  = 'id';
    public $timestamps = false;
    protected $appends = ['state_str'];

    public function getStateStrAttribute(){
        return $this->dict['state'][$this->state];
    }

    public function scopeName($query, $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }
}
