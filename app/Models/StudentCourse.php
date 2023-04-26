<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property $id
 * @property $student_id
 * @property $course_id
 * @property $start_date
 * @property $end_date
 * @property $grade
 * @property $is_active
 *
 * Class StudentCourse
 * @author Enrique García <enramgarcia.com>
 * @since 1.0
 * @package App\Models
 */
class StudentCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'start_date',
        'end_date',
        'grade',
        'is_active'
    ];

    /**
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
