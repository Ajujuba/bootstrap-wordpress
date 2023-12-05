    <footer>
        <?php if(get_theme_mod('footer_calltoaction_visibility')) : ?>
            <div class="footer-calltoaction text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 overflow-hidden">
                            <p class="sub-title"><?php echo esc_html(get_theme_mod('footer_sub_heading', 'Join the course')) ?></p>
                            <h2><?php echo esc_html(get_theme_mod('footer_calltoaction_heading', 'Bootstrap to WordPress')) ?></h2>
                            <p><?php echo esc_html(get_theme_mod('footer_calltoaction_desc', 'Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2021 and beyond!')) ?></p>
                            <a href="<?php echo esc_html( get_theme_mod('footer_cta_link','#')) ?>" class="btn btn-primary"><?php echo esc_html(get_theme_mod('footer_calltoaction_button','Join Now ->')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="copyright text-center">
            <p><?php echo wp_kses_post(get_theme_mod('footer_copyright', 'Copyright Brightside Studios Inc.')) ?></p>
            <h6 style="color:gray;opacity: 0.7;"><?php echo esc_html(get_theme_mod('footer_author', 'Ana'))?></h6>
        </div>
    </footer>
<?php wp_footer() ?>
</body>

</html>