<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * GET /folders/{id}/tasks/create
     */
    public function showCreateForm(int $id)
    {
        return view('tasks/create', [
            'folder_id' => $id
        ]);
    }

    public function index()
    {
        // すべてのフォルダを取得する
        $tasks = Expense::all();

        return view('tasks/index', [
            'tasks' => $tasks,
        ]);
    }

    public  function test(){
        return view('test');
    }
}
