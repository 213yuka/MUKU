<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Http\Requests\CreateFolder;
use App\Http\Requests\EditFolder;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FolderController extends Controller
{
    //　[get]タスク作成フォーム表示
    public function showCreateForm()
    {
        return view('folders/create');
    }

    //　[post]タスク作成フォームからタスク一覧表示へリダイレクトしている
    public function create(CreateFolder $request)
    {
        // フォルダモデルのインスタンスを作成する
        $folder = new Folder();
        // 入力値を代入する
        $folder->title = $request->title;

        // インスタンスの状態をデータベースに書き込む
        Auth::user()->folders()->save($folder);

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }


    //　[get]項目一覧表示
    public function index(Folder $folder)
    {
        // ユーザーのフォルダを取得する
        $folders = Auth::user()->folders()->get();

        return view('folders/index', [
            'folders' => $folders,
            'current_folder_id' => $folder->id,
        ]);
    }

    // [get]項目編集フォーム
    public function showEditForm(Folder $folder)
    {
//        \Debugbar::addMessage($folder->id);

        return view('folders/edit', [
            'folder' => $folder,
        ]);
    }

    // [post]タスク編集フォームからタスク一覧表示へリダイレクト
    public function edit(Folder $folder, EditFolder $request)
    {

        $folder->title = $request->title;
        $folder->save();

        return redirect()->route('folders.index', [
            'id' => $folder->id,
        ]);
    }

    // [post]項目とその項目に紐づくタスクを消去し、タスク一覧表示へリダイレクト
    public function delete(Folder $folder)
    {
        // 選ばれた項目に紐づくタスクを取得する
        $tasks = $folder->tasks()->get();


        foreach ($tasks as $task) {
            $this->checkRelation($folder, $task);
            $task->delete();
        }
        $folder->delete();

        return redirect()->route('list.table');
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
