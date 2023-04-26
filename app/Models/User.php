<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property $id
 * @property $name
 * @property $last_name
 * @property $email
 * @property $role
 *
 * Class User
 * @author Enrique García <enramgarcia@gmail.com>
 * @since 1.0
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return HasMany
     */
    public function studentCourses(): HasMany
    {
        return $this->hasMany(StudentCourse::class, 'student_id');
    }

    public function professorCourses(): HasMany
    {
        return $this->hasMany(CourseProfessor::class, 'professor_id');
    }

    /**
     * @return HasMany
     */
    public function careers(): HasMany
    {
        return $this->hasMany(StudentCareer::class, 'student_id');
    }
}
