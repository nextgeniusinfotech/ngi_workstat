<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\WorkHour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;

class WorkingHourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $working_hours = WorkHour::search($request->search)->within('category', 'user', 'project')->latest()->paginate(10)->withQueryString();

        return view('admin.working_hour', compact('working_hours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $projects = Project::all();
        $users = User::all();

        return view('admin.create_working_hour', compact('categories', 'projects', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WorkHour::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'project_id' => $request->project_id,
            'date' => $request->date,
            'hour' => $request->hour,
            'remark' => $request->remark,
        ]);

        return redirect()->route('admin.working_hours')->withSuccess('Working hour Added successsfully!');
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
        $categories = Category::all();
        $projects = Project::all();
        $users = User::all();
        $working_hour = WorkHour::whereId($id)->first();

        return view('admin.edit_working_hour', compact('categories', 'projects', 'users', 'working_hour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        WorkHour::where('id', $request->id)->update([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'project_id' => $request->project_id,
            'date' => $request->date,
            'hour' => $request->hour,
            'remark' => $request->remark,
        ]);

        return redirect()->route('admin.working_hours')->withSuccess('Working hour updated successsfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WorkHour::destroy($id);
        return redirect()->route('admin.working_hours')->withSuccess('Working hour deleted successsfully!');
    }
}
