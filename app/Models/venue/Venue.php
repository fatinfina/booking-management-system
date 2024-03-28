<?php

namespace App\Models\venue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $connection = 'mysqlBMS';
    protected $table = 'venue';
    protected $fillable = [
        'venue_id',
        'venue_name',
        'location',
        'updated_at',
        'created_at',
    ];
}
