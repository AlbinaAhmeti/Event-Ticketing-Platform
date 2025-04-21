<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    public function venue() {
        return $this->belongsTo(Venue::class);
    }

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
