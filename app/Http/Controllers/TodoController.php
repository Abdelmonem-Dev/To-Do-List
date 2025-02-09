<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task' => 'required|string|max:255',
        ]);
        if(!Auth::user()) {
            return response()->json(['message' => 'You have reached the maximum number of tasks'], 403);
        }

        $todo = new Todo();
        $todo->task = $request->task;
        $todo->user_id = Auth::user()->id; // Assign the current logged-in user to the task
        $todo->save();

        return response()->json($todo, 201);
    }

    // Get all to-do tasks
    public function index()
    {
        $todos = Auth::user()->todos; // Fetch tasks for the authenticated user
        return response()->json($todos);
    }

    // Update a task (mark as completed or not)
    public function update(Request $request, $id)
    {

        $todo = Todo::findOrFail($id);
        // Ensure the task belongs to the authenticated user
    if ($todo->user_id !== Auth::user()->id) {
        return response()->json(['message' => 'Unauthorized'], 403);
    }

        $todo->completed = $request->completed;
        $todo->save();

        return response()->json($todo);
    }

    // Delete a task
    public function destroy($id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        if ($todo->user_id !== Auth::user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $todo->delete();

        return response()->json(null, 204);
    }

}
