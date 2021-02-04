@extends('layouts.layout')

@section('humberger')

<span class="humberger-btn-bar top"></span>
  <span class="humberger-btn-bar mid"></span>
  <span class="humberger-btn-bar bot"></span>
</div><!-- .humberger-btn -->

@endsection

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

<div class="box wrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/BoZ0Zwab6Oc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!-- <form action="">
      検索フォーム
    </form> -->
  </div>

  <div class="wrapper main-content">
    <aside>
      <ul class="tags">
        <li><a href="#">ルカリオ</a></li>
        <li><a href="#">バチンキー</a></li>
        <li><a href="#">ルカリオ</a></li>
        <li><a href="#">バチンキー</a></li>
        <li><a href="#">ルカリオ</a></li>
        <li><a href="#">バチンキー</a></li>
      </ul>

      <ul class="tags">
        <li><a href="#">代5世代(BW)</a></li>
        <li><a href="">代6世代(XY)</a></li>
        <li><a href="">代7世代(USUM)</a></li>
        <li><a href="">代8世代(剣盾)</a></li>
      </ul>
    </aside>

    <main>
      <div class="item">
        <a href="#">
          <img src="image/hqdefault.webp" alt="" class="thumbnail">
          <img src="image/logo.jpeg" alt="" class="channel-icon">
          <p class="title">【神回】対戦廃人の俺がポケモン攻略サイトに育成論を投稿した結果……【バチンキー編】</p>
        </a>
      </div><!-- .item -->

    </main>

  </div><!-- .wrapper .main-content -->

@endsection