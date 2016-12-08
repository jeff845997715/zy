<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Admin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin';
    
    public static function guest(){
        $id = Session::get('id', 0);
        $res = Admin::where(['id'=>$id])->first();
        
        if ($res['id']) {
            return true;
        }else{
            return false;
        }
    }
    
}
