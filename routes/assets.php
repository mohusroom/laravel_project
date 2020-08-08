<?php

use App\Facades\Assets;

Assets::for('user.*', function ($tag) {
    $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/user/common/base.css')]);
});

Assets::for('user.home', function ($tag) {
    // $tag->link(['type' => 'text/css', 'rel' => 'stylesheet', 'href' => mix('css/user/common/home/index.css')]);

    // $tag->script(['src' => mix('js/user/common/home/index.js'), '__single' => 'defer', '__contain' => '']);
});