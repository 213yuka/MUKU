<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Http\Requests\CreateTask;
use App\Http\Requests\EditTask;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    // [get]タスク一覧
    public function index(Folder $folder)
    {
        // ユーザーの項目を取得する
        $folders = Auth::user()->folders()->get();

        // 選ばれた項目に紐づくタスクを取得する
        $tasks = $folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $folder->id,
            'tasks' => $tasks,
        ]);
    }

    // [get]タスク一覧優先順位順ソート
    public function indexSortStatus(Folder $folder)
    {
        // ユーザーの項目を取得する
        $folders = Auth::user()->folders()->get();

        // 選ばれた項目に紐づくタスクを優先順位順で取得する
        $tasks = $folder->tasks()->orderBy('status', 'asc')->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $folder->id,
            'tasks' => $tasks,
        ]);
    }

    // [get]タスク一覧順ソート
    public function indexSortDue(Folder $folder)
    {
        // ユーザーの項目を取得する
        $folders = Auth::user()->folders()->get();

        // 選ばれた項目に紐づくタスクを期限順に取得する
        $tasks = $folder->tasks()->orderBy('due_date', 'asc')->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $folder->id,
            'tasks' => $tasks,
        ]);
    }

    // [get]タスク作成フォーム表示
    public function showCreateForm(Folder $folder, Task $task)
    {
        return view('tasks/create', [
            'task' => $task,
            'folder_id' => $folder->id,
        ]);
    }

    // [post]タスク作成フォームからタスク一覧表示へリダイレクト
    public function create(Folder $folder, CreateTask $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;

        $folder->tasks()->save($task);

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }

    // [get]タスク編集フォーム
    public function showEditForm(Folder $folder, Task $task)
    {
//        \Debugbar::addMessage($folder->id);
        $this->checkRelation($folder, $task);

        return view('tasks/edit', [
            'task' => $task,
        ]);
    }

    // [post]タスク編集フォームからタスク一覧表示へリダイレクト
    public function edit(Folder $folder, Task $task, EditTask $request)
    {
        $this->checkRelation($folder, $task);

        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();

        return redirect()->route('tasks.index', [
            'id' => $task->folder_id,
        ]);
    }

    // [get]タスク編集フォーム
    public function showDeleteForm(Folder $folder, Task $task)
    {
//        \Debugbar::addMessage($folder->id);
        $this->checkRelation($folder, $task);

        return view('tasks/delete', [
            'task' => $task,
        ]);
    }

    // [post]タスクを消去し、タスク一覧表示へリダイレクト
    public function delete(Folder $folder, Task $task)
    {
        $this->checkRelation($folder, $task);
        $task->delete();

        return redirect()->route('tasks.index', [
            'id' => $task->folder_id,
        ]);
    }

    // リレーションが存在しないとき404を返す処理
    private function checkRelation(Folder $folder, Task $task)
    {
        if ($folder->id !== $task->folder_id) {
    //abort関数で404レスポンスコードを設定
            abort(404);
        }
    }


}
