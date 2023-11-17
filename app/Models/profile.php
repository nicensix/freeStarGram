<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];
    use HasFactory;
    
    public function profileImage()
{
    $defaultImage = '/profile/tiIxS3R9saiWJFwnPAUJjiimE7bzVSn7cIDEmxGM.png';
    $imagePath = ($this->image) ? $this->image : $defaultImage;
    return '/storage/' . $imagePath;
}
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function user()
{
    return $this->belongsTo(user::class);
}
}
