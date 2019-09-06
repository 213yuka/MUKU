<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MUKU</title>
  @yield('styles')
  <link rel="stylesheet" href="/css/muku.css">
  <link rel="icon" type="image/png" href="/images/m.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">

</head>
<body>
<main>
<div class = "keyvisual">
<div class = "add">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">
				MUKU
			</a>
		</div>
        @if(Auth::check())
            <p class="navbar-text navbar-right">ようこそ <a href="#" class="navbar-link">{{ Auth::user()->name }}</a> さん。</p>
            <a href="#" id="logout" class="navbar-text navbar-right">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @else
        <a class="navbar-text navbar-right" href="{{ route('login') }}">ログイン</a>
        <a class="navbar-text navbar-right" href="{{ route('register') }}">会員登録</a>
      @endif
	</div>
</nav>
     <div class = "box">
     <div class = "animated fadeIn">
         @yield('content')
         </div>
         </div>
     </div>
     </div>
<main>
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
</body>
</html>
