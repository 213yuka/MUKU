@extends('layouts.list')

@section('content')
<h2>List Main</h2>
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">
              自分のするべきことを分類して管理しませんか？まずは項目を作成しましょう
          </div>
          <div class="panel-body">
            <div class="text-center">
              <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
                項目作成ページへ
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
      <div class="row">
          <div class="col col-md-4">
              <nav class="panel panel">
                  <div class="panel-heading">項目</div>
                  <div class="list-group">
                  </div>
                  <div class="panel-body">
                      <a href="{{ route('folders.create') }}" class="btn btn-default btn-block" disabled="disabled">
                          項目を追加する
                      </a>
                  </div>
                  <div class="panel-body">
                      <div class="text-right">
                          <a href="{{ route('list.table') }}" class="btn btn-default" disabled="disabled">
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
                      <span>
                          優先順位順
                      </span>
                      　| 　
                      <span>
                          期限順
                      </span>
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
                          <tr>
                              <td></td>
                              <td>
                                  <span class="label "></span>
                              </td>
                              <td></td>
                              <td><a href="" class="btn btn-default" disabled="disabled">
                                      編集</a>
                                  <form
                                      action=""
                                      method="POST"
                                  >
                                      {{ csrf_field() }}
                                      <button type= type="submit" value="削除" class="btn btn-default" disabled="disabled">
                                          消去</button></form></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
@endsection
