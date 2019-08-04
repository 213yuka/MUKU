@extends('layouts.super')

@section('header')
<div class = "keyvisual2">
       <nav class = "nav">
       @if(Auth::check())
        <div class = "right">
        <a href="#" class="my-navbar-item">{{ Auth::user()->name }}</a>
        ｜
        <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        </div>
        @endif
  		<ul>
        <li><a href="{{ route('calendar.index') }}"><div>Calender</div></a></li>
        <li><a href="#"><div>List</div></a></li>
        <li><a href="{{ route('analyze.index') }}"><span style="color:#5d5c96;">
         <div class="animated jello">Analyze</div>
        </span></a></li>
        <li><a href="{{ route('ChaCha.index') }}"><div>ChaCha</div></a></li>
        <li><a href="{{ route('contact.index') }}"><div>Contact</div></a></li>
		</ul>
        </nav>
    </div>
@endsection
