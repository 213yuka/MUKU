<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MUKU</title>
  @yield('styles')
  <link rel="stylesheet" href="/css/need.css">
  <link rel="icon" type="image/png" href="/images/jump.jpg">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
  <!-- fullcalendar -->
  <link href='packages/core/main.css' rel='stylesheet' />
  <link href='packages/daygrid/main.css' rel='stylesheet' />
  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
  	<header class = "header">
      @yield('header')
@if(!Auth::check())
        <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
        ｜
        <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
      @endif
      </header>
     @yield('content')
  <footer class = "footer">
<div class ="footA">
<h2>MUKU</h2>
</div>

<nav class ="footB">
	<div>
		<h3>ABOUT</h3>
		<ul>
      <li><a href="https://www.aoyama.ac.jp/outline/history/">設立のきっかけ</a></li>
      <li><a href="http://www.cc.aoyama.ac.jp/~sumi_labo/people.php">開発者</a></li>
    </ul>
  </div>

  <div>
  <h3>SUPPORT</h3>
  <ul>
    <li><a href="https://www.aoyama.ac.jp/faq/">よくある質問</a></li>
    <li><a href="contact.html">お問い合わせ</a></li>
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
</body>
</html>
