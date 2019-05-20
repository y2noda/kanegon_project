<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * GET /
     */
    public function showCreateForm()
    {
        return view('incomes/create');
    }

    public function create(Request $request)
    {
        $task = new Income();
        $task->title = $request->title;
        $task->price = $request->price;
        $task->paid_at = $request->paid_at;

        $task->save();

        return redirect()->route('incomes.index');
    }

    public function index()
    {
        $tasks = Income::all();

        return view('incomes/index', [
            'tasks' => $tasks,
        ]);
    }

}
