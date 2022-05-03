<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKarma extends Model
{
    use HasFactory;
    protected $fillable= ['user_name','karma_score', 'image_id'];
    
    public function image()
    {
       
        return $this->hasOne(Image::class, 'foreign_key');
    }
}
