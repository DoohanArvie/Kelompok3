<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'tbl_bookings';
    protected $primaryKey = 'id_booking';

    protected $fillable = [
        'user_id',
        'id_program',
        'duration',
        'total_payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'id_program');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'tbl_booking_classes', 'id_booking', 'id_class')->withPivot('start_date', 'end_date')->withTimestamps(); 
    }

}
