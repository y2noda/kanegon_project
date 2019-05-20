<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * GET /folders/{id}/tasks/create
     */
    public function showCreateForm()
    {
        return view('expenses/create');
    }

    public function create(Request $request)
    {
        $task = new Expense();
        $task->title = $request->title;
        $task->price = $request->price;
        $task->purchased_at = $request->purchased_at;

        $task->save();

        return redirect()->route('expenses.index');
    }

    public function index()
    {
        $tasks = Expense::all();

        return view('expenses/index', [
            'tasks' => $tasks,
        ]);
    }

    public function showEditForm(int $expense_id)
    {
        $expense = Expense::find($expense_id);

        return view('expenses/edit', [
            'expense' => $expense,
        ]);
    }

    public function edit(int $task_id, Request $request)
    {
        // 1
        $task = Expense::find($task_id);

        // 2
        $task->title = $request->title;
        $task->price = $request->price;
        $task->purchased_at = $request->purchased_at;


        $task->save();

        // 3
        return redirect()->route('expenses.index');
    }

    public function delete(int $expense_id)
    {
        $income = Expense::find($expense_id);
        $income->delete();
        return redirect()->route('expenses.index');
    }

}
