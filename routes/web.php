<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/list', 'HomeController@listLink')->name('list');
    Route::get('/list/table', 'HomeController@listTable')->name('list.table');

    // List
        //Folderコントローラー
    Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'FolderController@create');
    Route::get('/folders/index/{folder}', 'FolderController@index')->name('folders.index');
    Route::get('/folders/index/{folder}/edit', 'FolderController@showEditForm')->name('folders.edit');
    Route::post('/folders/index/{folder}/edit', 'FolderController@edit');
    Route::post('/folders/index/{folder}/delete', 'FolderController@delete')->name('folders.delete');
        //Taskコントローラー
        Route::group(['middleware' => 'can:view,folder'], function() {
    Route::get('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');
    Route::get('/folders/{folder}/tasks/sortStatus', 'TaskController@indexSortStatus')->name('tasks.index.status');
    Route::get('/folders/{folder}/tasks/sortDue', 'TaskController@indexSortDue')->name('tasks.index.due');

    Route::get('/folders/{folder}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
    Route::post('/folders/{folder}/tasks/create', 'TaskController@create');

    Route::get('/folders/{folder}/tasks/{task}/edit', 'TaskController@showEditForm')->name('tasks.edit');
    Route::post('/folders/{folder}/tasks/{task}/edit', 'TaskController@edit');

    Route::post('/folders/{folder}/tasks/{task}/delete', 'TaskController@delete')->name('tasks.delete');
    });

    // Calendar
        //Caleendarコントローラー
    Route::get('/calendar', 'CalendarController@index')->name('calendar.index');
    Route::get('/calendar/create', 'CalendarController@showCreateForm')->name('calendar.create');
    Route::post('/calendar/create', 'CalendarController@create');
//    Route::get('/calendar/edit', 'CalendarController@showEditForm')->name('calendar.edit');
//    Route::post('/calendar/edit', 'CalendarController@edit');

    // Analyze
        // Analyzeコントローラー
    Route::get('/analyze', 'AnalyzeController@index')->name('analyze.index');

    // ChaCha
    Route::get('/ChaCha', 'ChaChaController@index')->name('ChaCha.index');

    // Contact
    Route::get('/contact', 'ContactController@index')->name('contact.index');

    //Other information
    Route::get('/about/motivation', 'OtherController@showMotivation')->name('other.motivation');
    Route::get('/about/developer', 'OtherController@showDeveloper')->name('other.developer');
    Route::get('/support/question', 'OtherController@showQuestion')->name('other.question');
    Route::get('/support/contact', 'OtherController@showContact')->name('other.contact');

});

Auth::routes();


// 現在の問題点
//・make.blade.phpの時、ヘッダーが変になる

//カレンダーつけたい機能
//・点数編集機能
//・点数共有機能

//アナライズつけたい機能


// これから追加したい機能
// List
// ・全タスクの表示
//　・一括消去
//　・お気に入り機能
// ・すでに日にちが過ぎたのものは自動的に別のファイルに移動させる
// -> そのファイルの中身を一括消去できるのもの


//\Debugbar::addMessage($folder->id);
// 参考にしたサイト
// ・LaraDock
// https://liginc.co.jp/465420
// docker-compose up -d nginx mysql phpmyadmin
// ・bootstrap
// http://bootstrap3.cyberlab.info/components/navbar.html
// ・バウムテスト
// https://cocoromi-cl.jp/knowledge/other/psychological-test/baumtest/

// ・ToDOList
// https://www.hypertextcandy.com/laravel-tutorial-todo-app-list-folders

//やってみたいチュートリアル

//一通りの流れ
//ルーティング
//コントローラークラス
//マイグレーション
//シーダー
//モデル
//テンプレート
