<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property $id
 * @property $name
 * @property $code
 * @property $is_active
 *
 * Class Career
 * @author Enrique García <enramgarcia@gmail.com>
 * @since 1.0
 * @package App\Models
 */
class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'code',
        'is_active'
    ];

    /**
     * @return HasMany
     */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
