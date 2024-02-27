<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';

    protected $primaryKey = 'department_id';

    protected $fillable = [
        'faculty_id',
        'name',
        'head',
        'contact_email',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'faculty_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'department_id', 'department_id');
    }
}
