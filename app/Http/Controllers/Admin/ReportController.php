<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use DB;

class ReportController extends Controller
{
    public function index()
    {
        $userTask= DB::table('user_task')
        ->whereNull('comment')
        ->paginate(5);
        $users = User::all();
        $tasks = Task::all();

        return view('admin.reports.index', compact('userTask', 'users', 'tasks'));
    }
    public function store(Request $request, $id)
    {
        $check = DB::table('user_task')
        ->where('id', $id)
        ->update(['comment' => $request->comment]);

        return redirect()->route('admin.reports.index')->with('alert', trans('commented'));
    }

    public function showComment()
    {
        $userTask= DB::table('user_task')
        ->whereNotNull('comment')
        ->paginate(5);
        $users = User::all();
        $tasks = Task::all();
        return view('admin.reports.show_comment', compact('userTask', 'users', 'tasks'));
    }
}
