@extends('layouts.contact')

@section('content')
<br>
<h2>Contact about ~motivation~</h2>
<div class = "contact">
<div class = "animated fadeIn">
<p class = "contactTitle">設立のきっかけ</p>
    <div class = "contactContent">
    ダメな自分を矯正したいと思ったことがきっかけでした。<br>命は有限であり自分がいつ死ぬかわからないと考えたとき、後悔なく充実した時間を過ごしたいと感じるようになりました。<br>
        しかし、私は自分に甘いが故に「今日を無駄にした」と感じる日が多々あります。<br>そこで自分で作ったツールを用いて自分を正したいと思い、
    それと同時にそのツールを用いて <br>自分と同じ悩みを抱いている人の行動する一つのツールとして提供できれば理想的だと考え開発しました。</p>
    </div>
</div>
    <a href = "{{ route('contact.index') }}" class="btn btn-outline-secondary">Contact一覧へ</a>
</div>
    <br>


@endsection
