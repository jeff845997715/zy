<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'post';
    
    // 设置可填充字段
    protected $fillable=['title', 'content', 'published_at'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
