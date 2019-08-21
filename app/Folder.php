<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks()
    {
        // フォルダテーブルとタスクテーブルのリレーションを辿って、フォルダクラスのインスタンスから紐づくタスククラスのリストを取得する
        // 第二引数、第三引数は省略('App\Task', 'folder_id', 'id')
        return $this->hasMany('App\Task');
    }
}
