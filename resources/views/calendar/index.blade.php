@extends('layouts.calendar')

@section('content')
<br>
<h2>CalenderMain</h2>
<h6 class="center">
    <span class="label1">0~19</span>
    <span class="label2">20~39</span>
    <span class="label3">40~59</span>
    <span class="label4">60~79</span>
    <span class="label5">80~100</span>
</h6>
 <div class="container">
    <div class="row">
      <div class="col col-md-16">
        <div class="panel panel">
        <div class="panel-body">
            <a href="{{ route('calendar.create') }}" class="btn btn-default btn-block">
              1日の点数を入力する
            </a>
            </div>
            <div id='calendar'></div>
        </div>
      </div>
    </div>
 </div>

<p>※このページの表示はスマートフォン対応していません。</p>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      plugins: [ 'interaction', 'dayGrid' ],
      editable: true,
      eventLimit: true,
      events: [
          @foreach($calendars as $calendar)
          {
              title: '@php echo $calendar->evaluation @endphp',
              start: '@php echo $calendar->date @endphp',
              url: '{{ route('calendar.edit',['id' => $calendar->id]) }}',
              color: @if($calendar->evaluation >= 0 && $calendar->evaluation<20)'#d65a5a'
                     @elseif($calendar->evaluation >= 20 && $calendar->evaluation<40)'#d6c35a'
                     @elseif($calendar->evaluation >= 40 && $calendar->evaluation<60)'#92d65a'
                     @elseif($calendar->evaluation >= 60 && $calendar->evaluation<80)'#5ad6c1'
                     @elseif($calendar->evaluation >= 80 && $calendar->evaluation<=100)'#5a94d6'
                     @endif
              ,
          },
        @endforeach
      ]
    });

    calendar.render();
  });
</script>
@endsection
