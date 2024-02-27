<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'university';

    protected $primaryKey = 'university_id';

    protected $fillable = [
        'name',
        'location',
        'founding_year',
        'motto',
        'website',
        'contact_email',
    ];

    public function faculty()
    {
        return $this->hasMany(Faculty::class, 'university_id', 'university_id');
    }
}
