@extends('layouts.contact')

@section('content')
<br>
<h2>ABOUT</h2>
<ul>
    <li><a href={{ route('contact.motivation') }}>設立のきっかけ</a></li>
    <li><a href={{ route('contact.developer') }}>開発者</a></li>
</ul>
<h2>SUPPORT</h2>
    <ul>
        <li><a href={{ route('contact.question') }}>よくある質問</a></li>
        <li><a href={{ route('contact.contact') }}>お問い合わせ</a></li>
    </ul>

@endsection
