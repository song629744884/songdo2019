<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey  = 'id';
    protected $hidden = ['password'];
    protected $appends = ['role_str','state_str'];
    protected $dict = [
        'state'=>['1'=>'正常','2'=>'禁用'],
    ];
    public function getStateStrAttribute(){
        return $this->dict['state'][$this->state];
    }

    public function scopeName($query, $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }

    public function role()
    {
        return $this->hasOne('App\Models\RoleModel','id','role_id');
    }

    public function generateToken() {
        $this->api_token = str_random(128);
        $this->save();
        return $this->api_token;
    }


}
