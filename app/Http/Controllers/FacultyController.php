<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Requests\FacultyRequest;

class FacultyController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('per_page', 25);

        if ($perPage === 'all')
            $faculties = Faculty::all();
        else
            $faculties = Faculty::paginate($perPage, ['*'], 'page', $page);

        return response()->json($faculties);
    }

    public function store(FacultyRequest $request)
    {
        $faculty = Faculty::create($request->validated());
        return response()->json($faculty, 201);
    }

    public function show($id)
    {
        $faculty = Faculty::findOrFail($id);
        return response()->json($faculty);
    }

    public function update(FacultyRequest $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->update($request->validated());
        return response()->json($faculty, 200);
    }

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
        return response()->json(null, 204);
    }
}
