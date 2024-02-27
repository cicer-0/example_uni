<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyCourse extends Model
{
    use HasFactory;

    protected $table = 'faculty_course';

    protected $primaryKey = 'faculty_course_id';

    protected $fillable = [
        'faculty_id',
        'course_id',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'faculty_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }
}
