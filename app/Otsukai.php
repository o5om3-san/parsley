<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otsukai extends Model
{
    protected $fillable = ['deadline', 'shop_id', 'capacity', 'deliverPlace', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function request()
    {
        return $this->hasMany(OtsukaiGiant::class);
    }    
    
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
