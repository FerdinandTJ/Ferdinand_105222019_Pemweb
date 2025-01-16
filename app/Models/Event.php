<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'event_name', 'start_time', 'end_time',
    ];

    public function user () {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
