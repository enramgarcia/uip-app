<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $name
 * @property $code
 * @property $is_active
 *
 * Class Course
 * @author Enrique García <enramgarcia@gmail.com>
 * @since 1.0
 * @package App\Models
 */
class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'code',
        'is_active'
    ];
}
