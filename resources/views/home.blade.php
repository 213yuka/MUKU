@extends('layouts.list')

@section('header')

@endsection
@section('content')
<h2>List Main画面</h2>
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">
            まずは項目を作成しましょう
          </div>
          <div class="panel-body">
            <div class="text-center">
              <a href="{{ route('folders.create') }}" class="btn btn-primary">
                項目作成ページへ
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection
