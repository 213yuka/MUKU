@extends('layouts.make')

@section('styles')
  @include('share.flatpickr.styles')
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">1日を100点満点で評価する</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('calendar.create') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="date">日にち</label>
                <input type="text" class="form-control" name="date" id="date" value="{{ old('date') }}" />
              </div>
              <div class="form-group">
                <label for="evaluation">点数</label>
                <input type="text" class="form-control" name="evaluation" id="evaluation" value="{{ old('evaluation') }}" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('share.flatpickr.scripts2')
@endsection
