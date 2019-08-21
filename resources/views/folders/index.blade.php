@extends('layouts.list')

@section('content')
<br>
<h2>ListEdit</h2>
<div class="container">
    <div class="row">
      <div class="col col-md-11">
        <nav class="panel panel">
          <div class="panel-heading">To Do List 項目　編集・消去</div>
            <table class="table">
                <thead>
                <tr>
                    <th>項目</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($folders as $folder)
                    <tr>
                        <td> <a href="{{ route('tasks.index', ['id' => $folder->id]) }}">{{ $folder->title }}</a></td>
                   <td><a href="{{ route('folders.edit',['id' => $folder->id]) }}" class="btn btn-default">
                   編集</a>
               <form
                 action="{{ route('folders.delete', ['id' => $folder->id]) }}"
                 method="POST">
                {{ csrf_field() }}
                <button type= type="submit" value="削除" class="btn btn-default">
                   消去</button></form></td>
                @endforeach
                </tbody>
            </table>

          <div class="panel-body">
            <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
              項目を追加する
            </a>
          </div>
            <div class="panel-body">
            <a href = "{{ route('list') }}" class="btn btn-outline-secondary">戻る</a>
            </div>
        </nav>
      </div>
    </div>
  </div>

  <br><br><br><br><br><br>

@endsection
