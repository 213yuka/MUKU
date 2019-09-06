<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MUKU</title>
    <link rel="stylesheet" href="/css/muku.css" media="all">
    <link rel="icon" type="image/png" href="/images/m.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='packages/core/main.css' rel='stylesheet' />
    <link href='packages/daygrid/main.css' rel='stylesheet' />
    <script src='packages/core/main.js'></script>
    <script src='packages/interaction/main.js'></script>
    <script src='packages/daygrid/main.js'></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<div class = "wrapper">
    <header class="header">
        <div class="keyvisual">
            <div class="area">
                <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="animated rollIn">
                <h1>MUKU</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="main1">
                <h3 class="main2">貴重な時間無駄にしてない？
                    <br/> いい習慣を身につけて自分の能力を高めよう
                </h3>
                <p class="main2">
                    「ゴロゴロyoutubeしてたら1日過ぎてた」「漫画読んでていつの間にか1日が終わってた」なんて後悔することはないですか<br />むくむく成長して一皮剝いて、時間を有効に使えるようになりませんか？
                </p>
                <ul class="require">
                       <li> <a href="{{ route('login') }}" class="login"> ログイン</a></li>
                    <li>  <a href="{{ route('register') }}" class="register">新規会員登録</a></li>
                </ul>
        </div>

        <section class="Content">
                <p class="center">
                    以下の2つの機能を駆使して良い習慣を身につけましょう。
                </p>
            <div class = "list">
                <div class="inline-block1">
                    <div class="ContentBox">
                        <p class="ContentIndex">
                            1
                        </p>
                        <h3 class="font">
                            List
                        </h3>
                        <p class="ContentP">
                           自分のするべきことを整理できていますか？<br class="contentBR" />MUKUのLISTはテスト、レポートなどのように分類してタスクを管理できます。<br id="contentBR" />タスクを優先順位順、期限順に並び替えることができます。
                        </p>
                        <a href="{{ route('list') }}" type="button" class="btn">LISTページへ</a>
                    </div>
                </div>
            <div class="inline-block1">
                        <div><img src="images/list.png" width=500px" height="300px" border="4px" alt="list" class = "listPIC"></div>
                </div>
            </div>

            <div class = "Calendar">
            <div class="inline-block2">
                    <div class="ContentBox">
                        <p class="ContentIndex">
                            2
                        </p>
                        <h3 class="font">
                            Calendar
                        </h3>
                        <p class="ContentP">
                        今日の自分点数をつけるとしたら何点ですか？<br class="contentBR" />充実した日々を送るために1日の自分の生活に毎日点数をつけて、自分を客観視してみませんか？
                        </p>
                        <a href="{{ route('calendar.index') }}" type="button" class="btn">Calendarページへ</a>
                    </div>
            </div>
                <div class="inline-block2">
                    <img src="images/calendar.png" width=350px" height="350px" border="4px" alt="list" class="calendarPIC">
                </div>
            </div>

{{--            <div class = "ChaCha">--}}
{{--            <div class="inline-block3">--}}
{{--                    <div class="ContentBox">--}}
{{--                        <p class="ContentIndex">--}}
{{--                            3--}}
{{--                        </p>--}}
{{--                        <h3 class="font">--}}
{{--                            ChaCha--}}
{{--                        </h3>--}}
{{--                        <p class="ContentP">--}}
{{--                            InstagrmやTwitterで勉強用にアカウントを作成しても、面白いゴシップなどがタイムラインに流れてきてつい見てしまうことはありませんか？--}}
{{--                            <br class ="contentBR">ChaChaは勉強に特化した報告型SNSです。--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--            </div>--}}
{{--                        <div class="inline-block3">--}}
{{--                            <p class="ContentP">--}}
{{--                           -- 近日公開 ----}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--            </div>--}}

{{--            <div class = "analyze">--}}
{{--            <div class="inline-block4">--}}
{{--                    <div class="ContentBox">--}}
{{--                        <p class="ContentIndex">--}}
{{--                            4--}}
{{--                        </p>--}}
{{--                        <h3 class="font">--}}
{{--                            Analyze--}}
{{--                        </h3>--}}
{{--                        <p class="ContentP">--}}
{{--                            自分に迷走することはありませんか？<br class ="contentBR">自分はどんな性格でどんなことに向いているのか。そういった悩みを解決するために自分を分析してみませんか？--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--            </div>--}}
{{--                <div class="inline-block4">--}}
{{--                    <p class="ContentP">--}}
{{--                    -- 近日公開 ----}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>

        <footer class = "footer">
            <div class ="footA">
                <h2>MUKU</h2>
            </div>

            <nav class ="footB">
                <div>
                    <h3>ABOUT</h3>
                    <ul>
                        <li><a href={{ route('contact.motivation') }}>設立のきっかけ</a></li>
                        <li><a href={{ route('contact.developer') }}>開発者</a></li>
                    </ul>
                </div>

                <div>
                    <h3>SUPPORT</h3>
                    <ul>
                        <li><a href={{ route('contact.question') }}>よくある質問</a></li>
                        <li><a href={{ route('contact.contact') }}>お問い合わせ</a></li>
                    </ul>
                </div>

                <p>&lt;&copy; Copyright MUKU. &nbsp;All rights reserved.&gt;</p>
            </nav>
        </footer>
    </main>
    @if(Auth::check())
        <script>
            document.getElementById('logout').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            });
        </script>
    @endif
    @yield('scripts')
</div>
</body>
</html>

