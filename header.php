<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head();?>
</head>
<body>
    <header class="header">
        <h1 class="header_logo">森根運送</h1>
        <nav class="pc_nav">
            <ul class="pc_nav_list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('service') )); ?>">サービス</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('overview') )); ?>">会社概要</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('recruit') )); ?>">採用情報</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('contact') )); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
        <!-- <div class="burger">
            <span></span>
            <span></span>
            <span></span>
        </div> -->
    </header>
    <!-- <div class="sp_menu">
        <nav class="sp_nav">
        <ul class="">
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('service') )); ?>">サービス</a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('overview') )); ?>">会社概要</a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('contact') )); ?>">お問い合わせ</a></li>
        </ul>
        </nav>
    </div> -->