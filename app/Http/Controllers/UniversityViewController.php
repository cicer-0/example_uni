<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityViewController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('universities/index', compact('universities'));
    }

    public function create()
    {
        return view('universities/create');
    }

    public function show($id)
    {
        $university = University::findOrFail($id);
        return view('universities/show', compact('university'));
    }

    public function edit($id)
    {
        $university = University::findOrFail($id);
        return view('universities/edit', compact('university'));
    }
}
