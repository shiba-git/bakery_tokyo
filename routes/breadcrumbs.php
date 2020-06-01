<?php

// Home
Breadcrumbs::for('top', function ($trail) {
    $trail->push('トップページ', route('top'));
});

// Home > pan
Breadcrumbs::for('pan', function ($trail) {
	$trail->parent('top');
    $trail->push('パン一覧', route('pan.index'));
});
Breadcrumbs::for('location', function ($trail) {
	$trail->parent('top');
    $trail->push('近くのパン屋', route('search.latlen'));
});
Breadcrumbs::for('word', function ($trail) {
	$trail->parent('top');
    $trail->push('キーワード検索', route('search.word'));
});


// Home > Blog
Breadcrumbs::for('create', function ($trail) {
    $trail->parent('pan');
    $trail->push('新規作成', route('pan.create'));
});
Breadcrumbs::for('type', function ($trail) {
    $trail->parent('pan');
    $trail->push('投稿タイプ', route('pan.type'));
});


// Home > Blog > [Category]
Breadcrumbs::for('tag', function ($trail, $tagName) {
    $trail->parent('top');
    $trail->push($tagName, route('tag.show', $tagName));
});
Breadcrumbs::for('store', function ($trail, $storeName) {
    $trail->parent('top');
    $trail->push($storeName, route('store.show', $storeName));
});
Breadcrumbs::for('genre', function ($trail, $genreName) {
    $trail->parent('top');
    $trail->push($genreName, route('genre.show', $genreName));
});
