<?php

namespace App\Models\booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $connection = 'mysqlBMS';
    protected $table = 'booking';
    protected $fillable = [
        'id',
        'book_name',
        'book_venue',
        'book_phone',
        'book_people',
        'book_date',
        'book_timestart',
        'book_timeend',
        'updated_at',
        'created_at',
    ];
}
