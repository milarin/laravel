@extends('layouts.layout')

@section('nav')

<header class="wrapper">
  <h1><a href="/"><img class="logo" src="image/logo.jpeg" alt="ライバロリ"></a></h1>
  <nav>
    <ul class="main-nav">
      <li><a href="/">ライバロリ</a></li>
      <li><a href="https://www.youtube.com/channel/UCSdExItCszcnIp-roT7b0kw">Youtube</a></li>
      <li><a href="https://www.youtube.com/channel/UCFonAazmxOCc5sl9UiIkilg">Youtube Sub</a></li>
      <li><a href="https://twitter.com/raibarori">Twitter</a></li>
      <li><a href="https://www.instagram.com/barori_harada/?hl=ja">Instagram</a></li>
      <li><a href="https://com.nicovideo.jp/community/co2580354">Niconico</a></li>
    </ul>      
  </nav>
</header>

@endsection

@section('content')

<div class="content wrapper">
  <div class="top-text">
    <h2>raibarori</h2>
    <span>原田直希</span>
  </div>
  <a href="/search" class="btn">動画検索</a>
</div><!-- .content .wrapper -->

<div class="footer-nav wrapper">
  <ul>

    <li>
      <a href="/">
        <div class="border-top"></div>
        人気動画
        <div class="border-bottom"></div>
      </a>
    </li>
    <li>
      <a href="/">
        <div class="border-top"></div>
        最新動画
        <div class="border-bottom"></div>
      </a>
    </li>
    <li>
      <a href="/">
        <div class="border-top"></div>
        おすすめ動画
        <div class="border-bottom"></div>
      </a>
    </li>

  </ul>
</div><!-- .footer-nav .wrapper --> 

@endsection