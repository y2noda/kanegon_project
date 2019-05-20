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

    public function showEditForm(int $income_id)
    {
        $income = Income::find($income_id);

        return view('incomes/edit', [
            'income' => $income,
        ]);
    }

    public function edit(int $task_id, Request $request)
    {
        // 1
        $task = Income::find($task_id);

        // 2
        $task->title = $request->title;
        $task->price = $request->price;
        $task->paid_at = $request->paid_at;

        $task->save();

        // 3
        return redirect()->route('incomes.index');
    }

    public function delete(int $income_id)
    {
        $income = Income::find($income_id);
        $income->delete();
        return redirect()->route('incomes.index');
    }

}
