<?php

namespace App\Http\Controllers;

use App\Models\FacultyCourse;
use Illuminate\Http\Request;
use App\Http\Requests\FacultyCourseRequest;

class FacultyCourseController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('per_page', 25);

        if ($perPage === 'all')
            $facultyCourses = FacultyCourse::all();
        else
            $facultyCourses = FacultyCourse::paginate($perPage, ['*'], 'page', $page);


        return response()->json($facultyCourses);
    }

    public function store(FacultyCourseRequest $request)
    {
        $facultyCourse = FacultyCourse::create($request->validated());
        return response()->json($facultyCourse, 201);
    }

    public function show($id)
    {
        $facultyCourse = FacultyCourse::findOrFail($id);
        return response()->json($facultyCourse);
    }

    public function update(FacultyCourseRequest $request, $id)
    {
        $facultyCourse = FacultyCourse::findOrFail($id);
        $facultyCourse->update($request->validated());
        return response()->json($facultyCourse, 200);
    }

    public function destroy($id)
    {
        $facultyCourse = FacultyCourse::findOrFail($id);
        $facultyCourse->delete();
        return response()->json(null, 204);
    }
}
