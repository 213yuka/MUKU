<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');

    // List用
    Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'FolderController@create');

    Route::group(['middleware' => 'can:view,folder'], function() {
    Route::get('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');
    Route::get('/folders/{folder}/tasks/sortStatus', 'TaskController@indexSortStatus')->name('tasks.index.status');
    Route::get('/folders/{folder}/tasks/sortDue', 'TaskController@indexSortDue')->name('tasks.index.due');

    Route::get('/folders/{folder}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
    Route::post('/folders/{folder}/tasks/create', 'TaskController@create');

    Route::get('/folders/{folder}/tasks/{task}/edit', 'TaskController@showEditForm')->name('tasks.edit');
    Route::post('/folders/{folder}/tasks/{task}/edit', 'TaskController@edit');
    });

    // Calendar用
    Route::get('/calendar', 'CalendarController@index')->name('calendar.index');
    Route::get('/calendar/create', 'CalendarController@showCreateForm')->name('calendar.create');
    Route::post('/calendar/createCalendarController', 'CalendarController@create');
    Route::get('/calendar/edit', 'CalendarController@showEditForm')->name('calendar.edit');
    Route::post('/calendar/edit', '@edit');


    // Analyze用
    Route::get('/analyze', 'AnalyzeController@index')->name('analyze.index');

    // ChaCha用
    Route::get('/ChaCha', 'ChaChaController@index')->name('ChaCha.index');

    // Contact用
    Route::get('/contact', 'ContactController@index')->name('contact.index');

});

Auth::routes();


// 現在の問題点
// ・タスクの追加、優先順位の項目、非常に高いしか選択できん
// -> statusの値がnullじゃけvalueうまく渡せとらん
// ・calenderからListへのリンクが飛ばせん
// ・calendar項目追加できん
// ・最新のパラメーターのソートしかできん

// これから追加したい機能
// List
// ・項目消去
// ・タスク消去
// ・全タスクの表示
// ・タスクのカレンダー
// ・すでに日にちが過ぎたのものは自動的に別のファイルに移動させる
// -> そのファイルの中身を一括消去できるのもの

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
