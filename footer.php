<footer id="footer">
    <div class="inner_wrap footer_wrap">
        <div class="footer_logo">森根運送</div>
        <ul class="footer_nav_list">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('service') )); ?>">サービス</a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('overview') )); ?>">会社概要</a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('contact') )); ?>">お問い合わせ</a></li>
        </ul>
    </div>
    <p class="CopyRight">(C)2025 MORINE TRANSPORTER.</p>
</footer>
    <?php wp_footer();?>
</body>
</html>