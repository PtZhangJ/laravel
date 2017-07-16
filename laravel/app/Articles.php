<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model
{
    protected $fillable = ['title','author','content','published_at'];
    //设置时间属性
    public function setPublishedAttribute($date){
        $this->attributes['publish_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    //设置显示数据类型为截止到当前时间
    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());

    }
}
