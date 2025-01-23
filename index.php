<?php get_header();?>
    <main>
        <section class="fv fv-home">
            <div class="fv_content">
                <p class="fv_fade-in">MORINE</p>
                <p class="fv_fade-in2">TRANSPOTER</p>
            </div>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="fv_job_request_button">お仕事の依頼はコチラ</a>
        </section>
        <section class="about_us top_section">
            <div class="inner_wrap">
                <h2 class="top_sec_title under_fade-in">森根運送について</h2>
                <p class="top_sec_description under_fade-in">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <div class="about_and_service">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact')));?>" class="link_box under_fade-in"><div>会社概要</div></a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('service')));?>" class="link_box under_fade-in"><div>サービス</div></a>
                </div>
            </div>
        </section>
        <section class="careers top_section">
            <div class="inner_wrap">
                <h2 class="top_sec_title under_fade-in">作業員募集</h2>
                <p class="top_sec_description under_fade-in">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('recruit')));?>" class="">詳しくはコチラ</a>
            </div>
        </section>
    </main>
<?php get_footer();?>
