<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Project;
use App\Models\WorkHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $users = User::all();
        $projects = Project::all();
        $reports = null;
        if ($request->all()) {
            $reports = WorkHour::with('category')->when($request->has('from_date') && $request->has('to_date'), function ($query) use ($request) {
                $query->whereBetween('date', [$request->from_date, $request->to_date]);
            })
                ->select('category_id', DB::raw('SUM(hour) as total_work_hours'))
                ->groupBy('category_id')
                ->get();

            // return $reports;
        }

        return view('admin.report', compact('users', 'projects', 'reports'));
    }
}
