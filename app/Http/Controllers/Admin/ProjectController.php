<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $projects = Project::search($request->search)->latest()->paginate(10)->withQueryString();

        return view('admin.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.projects')->withSuccess('Product Added successsfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::destroy($id);

        return redirect()->route('admin.projects')->withSuccess('Project deleted successsfully!');
    }
}
