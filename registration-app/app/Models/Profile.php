<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'profile_image',
        'bio',
        'date_of_birth'
        ];

        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
