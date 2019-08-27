@extends('layouts.list')

@section('content')
<br>
<h2>List Main</h2>
<div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel">
          <div class="panel-heading">項目</div>
          <div class="list-group">
            @foreach($folders as $folder)
              <a
                  href="{{ route('tasks.index', ['id' => $folder->id]) }}"
                  class="list-group-item"
                  id= {{ $current_folder_id === $folder->id ? 'active' : '' }}
              >
                {{ $folder->title }}
              </a>
            @endforeach
          </div>
          <div class="panel-body">
            <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
              項目を追加する
            </a>
          </div>
            <div class="panel-body">
                <div class="text-right">
                <a href="{{ route('list.table') }}" class="btn btn-default">
                    編集・消去する
                </a>
                </div>
            </div>
        </nav>
      </div>
      <div class="column col-md-8">
        <div class="panel panel">
          <div class="panel-heading">TO DO TASK</div>
          <div class="panel-body">
          <a href = "{{ route('tasks.index.status', ['id' => $current_folder_id]) }}">
                  優先順位順
             </a>
                  　| 　
          <a href = "{{ route('tasks.index.due', ['id' => $current_folder_id]) }}">
                  期限順
              </a>
          </div>
          <table class="table">
            <thead>
            <tr>
              <th>タスク</th>
              <th>優先順位</th>
              <th>期限</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
              <tr>
                <td>{{ $task->title }}</td>
                <td>
                  <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
                </td>
                <td>{{ $task->formatted_due_date }}</td>
                <td><a href="{{ route('tasks.edit', ['id' => $task->folder_id, 'task_id' => $task->id]) }}" class="btn btn-default">
                編集</a>
                 <form
                     action="{{ route('tasks.delete', ['id' => $task->folder_id, 'task_id' => $task->id]) }}"
                     method="POST"
                    >
                    {{ csrf_field() }}
                 <button type= type="submit" value="削除" class="btn btn-default">
                   消去</button></form></td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <div class="panel-body">
            <div class="text-right">
              <a href="{{ route('tasks.create', ['id' => $current_folder_id]) }}" class="btn btn-default btn-block">
                タスクを追加する
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br>

@endsection
