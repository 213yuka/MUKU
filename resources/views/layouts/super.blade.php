<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MUKU</title>
  @yield('styles')
  <link rel="stylesheet" href="/css/muku.css" media="all">
  <link rel="icon" type="image/png" href="/images/m.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href='packages/core/main.css' rel='stylesheet' />
  <link href='packages/daygrid/main.css' rel='stylesheet' />
  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
</head>
<body>
<div class = "wrapper">
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
