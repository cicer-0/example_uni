<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Requests\UniversityRequest;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('per_page', 25);

        if ($perPage === 'all')
            $universities = University::all();
        else
            $universities = University::paginate($perPage, ['*'], 'page', $page);

        return response()->json($universities);
    }

    public function store(UniversityRequest $request)
    {
        $university = University::create($request->validated());
        return response()->json($university, 201);
    }

    public function show($id)
    {
        $university = University::findOrFail($id);
        return response()->json($university);
    }

    public function update(UniversityRequest $request, $id)
    {
        $university = University::findOrFail($id);
        $university->update($request->validated());
        return response()->json($university, 200);
    }

    public function destroy($id)
    {
        $university = University::findOrFail($id);
        $university->delete();
        return response()->json(null, 204);
    }
}
