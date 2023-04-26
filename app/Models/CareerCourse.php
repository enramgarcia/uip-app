<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property $id
 * @property $career_id
 * @property $course_id
 * @property $is_active
 *
 * Class CareerCourse
 * @author Enrique García <enramgarcia@gmail.com>
 * @since 1.0
 * @package App\Models
 */
class CareerCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'career_id',
        'course_id',
        'is_active'
    ];

    /**
     * @return BelongsTo
     */
    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class);
    }

    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
