<?php

use App\Facades\Assets;

/****************************************
 * ユーザー
****************************************/
// 共通
Assets::for('user.*', function ($tag) {
    $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/user/common/base.css')]);
});

// トップページ
Assets::for('user.home', function ($tag) {
    $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/user/common/home/show.css')]);

    $tag->script(['src' => mix('js/user/common/home/show.js'), '__single' => 'defer', '__contain' => '']);
});

/****************************************
 * 管理（未実装）
****************************************/