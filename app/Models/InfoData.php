<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $start_day
 * @property $end_day
 * @property $start_time
 * @property $end_time
 * @property $phone
 * @property $email
 * @property $address
 *
 * Class InfoData
 * @author Enrique García <enramgarcia@gmail.com>
 * @since 1.0
 * @package App\Models
 */
class InfoData extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_day',
        'end_day',
        'start_time',
        'end_time',
        'phone',
        'email',
        'address'
    ];
}
