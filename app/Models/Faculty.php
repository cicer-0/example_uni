<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculty';

    protected $primaryKey = 'faculty_id';

    protected $fillable = [
        'university_id',
        'name',
        'dean_name',
        'contact_email',
    ];

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id', 'university_id');
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'faculty_id', 'faculty_id');
    }

    public function facultyCourses()
    {
        return $this->hasMany(FacultyCourse::class, 'faculty_id', 'faculty_id');
    }
}
