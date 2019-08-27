@extends('layouts.make')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">項目を編集する</div>
                    <div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form action="{{ route('calendar.edit', ['id' => $calendar->id]) }}"
                              method="post">
                            @csrf
                            <div class="form-group">
                                <label for="evaluation">点数</label>
                                <input type="evaluation" class="form-control" name="evaluation" id="evaluation"
                                       value="{{ old('evaluation', $calendar->evaluation) }}" />
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
@endsection
