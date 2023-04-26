<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property $id
 * @property $course_id
 * @property $professor_id
 * @property $is_active
 *
 * Class CourseProfessor
 * @author Enrique García <enramgarcia@gmail.com>
 * @since 1.0
 * @package App\Models
 */
class CourseProfessor extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'professor_id',
        'is_active'
    ];

    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * @return BelongsTo
     */
    public function professor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'professor_id');
    }
}
