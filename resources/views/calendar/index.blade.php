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
              点数を入力する
            </a>
            </div>
            <div id='calendar'></div>

<!--
<table class="table table-bordered">
  <thead>
  <tr>
        <th>日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
    </tr>
  </thead>

    <tr>
<td>

      </td>

    </tr>

  </tbody>
</table> -->
</div>
</div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
    //   defaultDate: '2019-07-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: '10',
          start: '2019-08-02',
          color:'#d65a5a',
        },
        {
          title: '65',
          start: '2019-08-01',
          color: '#92d65a',
        //   rendering: 'background'
        },
        {
          title: '90',
          start: '2019-07-22',
          color: '#5a94d6',
        //   rendering: 'background'
        },
        // {
        //   groupId: 999,
        //   title: 'Repeating Event',
        //   start: '2019-06-16T16:00:00',
        //   color: '#257e4a',
        // //   rendering: 'background'
        // },
        // {
        //   groupId: 999,
        //   title: 'Repeating Event',
        //   start: '2019-06-16T16:00:00'
        // },
        // {
        //   title: 'Conference',
        //   start: '2019-06-11',
        //   end: '2019-06-13'
        // },
        // {
        //   title: 'Meeting',
        //   start: '2019-06-12T10:30:00',
        //   end: '2019-06-12T12:30:00'
        // },
        // {
        //   title: 'Lunch',
        //   start: '2019-06-12T12:00:00'
        // },
        // {
        //   title: 'Meeting',
        //   start: '2019-06-12T14:30:00'
        // },
        // {
        //   title: 'Happy Hour',
        //   start: '2019-06-12T17:30:00'
        // },
        // {
        //   title: 'Dinner',
        //   start: '2019-06-12T20:00:00'
        // },
        // {
        //   title: 'Birthday Party',
        //   start: '2019-06-13T07:00:00'
        // },
        // {
        //   title: 'Click for Google',
        //   url: 'http://google.com/',
        //   start: '2019-06-28'
        // }
      ]
    });

    calendar.render();
  });
</script>
<style>

#calendar {
    /* color:red; */
}

</style>
@endsection
