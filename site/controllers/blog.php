<?php

return function (\Kirby\Cms\App $kirby, \Kirby\Cms\Site $site) {
    $blog = $kirby->page('blog');

    return [
        'data' => [
            'title' => $blog->title()->value(),
            'text' => $blog->text()->toBlocks()->toHtml()
        ]
    ];
};
