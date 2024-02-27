<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('per_page', 25);

        if ($perPage === 'all')
            $departments = Department::all();
        else
            $departments = Department::paginate($perPage, ['*'], 'page', $page);

        return response()->json($departments);
    }

    public function store(DepartmentRequest $request)
    {
        $department = Department::create($request->validated());
        return response()->json($department, 201);
    }

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return response()->json($department);
    }

    public function update(DepartmentRequest $request, $id)
    {
        $department = Department::findOrFail($id);
        $department->update($request->validated());
        return response()->json($department, 200);
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return response()->json(null, 204);
    }
}
