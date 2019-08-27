@extends('layouts.contact')

@section('content')
<br>
<h2>ABOUT ~motivation~</h2>
<div class = "contact">
<div class = "animated fadeIn">
<p class = "contactTitle">お問い合わせ</p>
    <div class = "contactContent">
        Twitter<br>
        <a href="https://twitter.com/intent/tweet?screen_name=nyax213&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @nyax213</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <br>
        <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/nyax213?ref_src=twsrc%5Etfw">Tweets by nyax213</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
    <a href = "{{ route('contact.index') }}" class="btn btn-outline-secondary">Contact一覧へ</a>
</div>
    <br>


@endsection
