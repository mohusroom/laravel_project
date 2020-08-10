@extends('user.common._share.layouts.base')

@section('main')
<section class="hero is-fullheight-with-navbar">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-white">Mohu`s ROOM</h1>
        </div>
    </div>

    <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
                <ul>
                    <li class="is-active">
                        <a>Overview</a>
                    </li>
                    <li>
                        <a>Modifiers</a>
                    </li>
                    <li>
                        <a>Grid</a>
                    </li>
                    <li>
                        <a>Elements</a>
                    </li>
                    <li>
                        <a>Components</a>
                    </li>
                    <li>
                        <a>Layout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

<section class="hero is-info is-fullheight-with-navbar">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-white">コンテンツ</h1>
        </div>
    </div>
</section>
@endsection