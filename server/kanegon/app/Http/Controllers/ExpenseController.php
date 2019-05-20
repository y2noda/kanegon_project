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

}
