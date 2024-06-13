<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingClass extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_booking_classes';

    protected $fillable = [
        'id_booking',
        'id_class',
        'start_date',
        'end_date',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'id_booking');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'id_class');
    }
}
