<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{

    protected $guarded = [];
    protected $fillable = [
        'id','name','parent_id'
    ];


    public function category()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }
}
