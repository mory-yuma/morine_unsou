<footer id="footer">
    <ul class="">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
        <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('service') )); ?>">サービス</a></li>
        <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('overview') )); ?>">会社概要</a></li>
        <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('contact') )); ?>">お問い合わせ</a></li>
    </ul>
</footer>
    <!-- <script type="text/javascript" src="/js/slick.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script> -->
    <?php wp_footer();?>
</body>
</html>