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
        $total_work_hours = null;
        $user_name = null;
        $reports = collect([]);
        if ($request->all()) {
            $reports = WorkHour::with('category', 'user')->when($request->from_date && $request->to_date, function ($query) use ($request) {
                $query->whereBetween('date', [$request->from_date, $request->to_date]);
            })->where(['user_id' => $request->user_id, 'project_id' => $request->project_id])
                ->select('category_id', DB::raw('SUM(hour) as total_work_hours'))
                ->groupBy('category_id')

                ->get();

            $total_work_hours = $reports->sum('total_work_hours');
            $user_name = User::where('id', $request->user_id)->value('name');
        }
        // return  $reports;

        return view('admin.report', compact('users', 'projects', 'reports', 'total_work_hours', 'user_name'));
    }
}
