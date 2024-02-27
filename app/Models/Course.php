<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';

    protected $primaryKey = 'course_id';

    protected $fillable = [
        'name',
        'description',
        'credit_hours',
        'level',
        'department_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    public function facultyCourses()
    {
        return $this->hasMany(FacultyCourse::class, 'course_id', 'course_id');
    }
}
