@extends('layouts.contact')

@section('content')
<br>
<h2>SUPPORT ~motivation~</h2>
<div class = "contact">
<div class = "animated fadeIn">
<p class = "contactTitle">よくある質問</p>
    <div class = "contactContent">
        <p>--️近日公開--</p>
    </div>
</div>
    <a href = "{{ route('contact.index') }}" class="btn btn-outline-secondary">Contact一覧へ</a>
</div>
    <br>


@endsection
