@extends('layouts.contact')

@section('content')
    <br>
    <h2>ABOUT ~motivation~</h2>


    <div class = "contact">
        <div class = "animated fadeIn">
            <p class = "contactTitle">開発者</p>
            <div class = "contactContent">
                <div class = "contactDetail">関東住在の勉強中大学三年生</div><br>
                <div class = "contactDetail">使用経験(言語)<br>Java・PHP・C#・html・css・JavaScript・Python・Swift</div><br>
                <div class = "contactDetail">使用経験(フレームワーク等)<br>Laravel・Unity・ARKit・Processing・Vue.js・Androidstudio・Xcode</div><br>
                <div class = "contactDetail"> 最近の興味分野<br>機械学習・競プロ・ポートフォリオ作り</div><br>
                <a href="https://twitter.com/nyax213?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @nyax213</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <a href = "{{ route('contact.index') }}" class="btn btn-outline-secondary">Contact一覧へ</a>
    </div>
    <br>


@endsection
