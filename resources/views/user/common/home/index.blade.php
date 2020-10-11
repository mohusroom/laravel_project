@extends('user.common._share.layouts.base')

@section('main')
<!-- トップコンテンツ -->
<section class="f-topContent hero is-fullheight-with-navbar">
    <div class="hero-body">
        <div class="container">
            <h1 class="topContent-title title">Mohu`s ROOM</h1>
            <h2 class="topContent-subtitle subtitle">夜のひと時をもふずとともに...</h2>
        </div>
    </div>
</section>

<!-- 最新情報 -->
<section class="f-news section">
    <div class="container">
        <h2 class="news-title title">最新情報</h2>
        <ul>
            <li class="media">
                <figure class="media-left">
                    <p class="image is-128x128">
                        <img src="https://placehold.jp/500x500.png">
                    </p>
                </figure>
                <div class="media-content">
                    <h3 class="subtitle">タイトル</h3>
                    <p class="u-threeDotsLeader" data-row="3">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </li>
            <li class="media">
                <figure class="media-left">
                    <p class="image is-128x128">
                        <img src="https://placehold.jp/500x500.png">
                    </p>
                </figure>
                <div class="media-content">
                    <h3 class="subtitle">タイトル</h3>
                    <p class="u-threeDotsLeader" data-row="3">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </li>
            <li class="media">
                <figure class="media-left">
                    <p class="image is-128x128">
                        <img src="https://placehold.jp/500x500.png">
                    </p>
                </figure>
                <div class="media-content">
                    <h3 class="subtitle">タイトル</h3>
                    <p class="u-threeDotsLeader" data-row="3">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- コンテンツ -->
<section class="f-content section">
    <div class="container">
        <h2 class="content-title title">Contents</h2>
        <div class="columns is-multiline">
            <div class="column is-half">
                <a class="content-item box u-hoverOpacity" href="#">
                    <p>
                        <span class="icon is-medium">@include('user.common._share.svg.home.program')</span>
                        プログラミング
                    </p>
                </a>
            </div>
            <div class="column is-half">
                <a class="content-item box u-hoverOpacity" href="#">
                    <p>
                        <span class="icon is-medium">@include('user.common._share.svg.home.game')</span>
                        ゲーム
                    </p>
                </a>
            </div>
            <div class="column is-half">
                <a class="content-item box u-hoverOpacity" href="#">
                    <p>
                        <span class="icon is-medium">@include('user.common._share.svg.home.blog')</span>
                        ブログ
                    </p>
                </a>
            </div>
            <div class="column is-half">
                <a class="content-item box u-hoverOpacity" href="#">
                    <p>
                        <span class="icon is-medium">@include('user.common._share.svg.home.awl')</span>
                        もふず紹介
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection