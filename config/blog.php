<?php
return [
    'name' => "我的论坛",
    'title' => "菊花",
    'subtitle' => 'www.jvhua.top',
    'description' => '疾风知劲草，板荡识诚臣',
    'author' => '菊花',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/update',
    ],
    'contact_email'=>env('MAIL_FROM'),
];
