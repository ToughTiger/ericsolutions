<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected  $fillable =[
        'first_name',
        'last_name',
        'email',
        'phone',
    ];

    public function comments(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
    public function messages(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(Message::class);
    }


}
