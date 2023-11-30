<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

    <?php
    printf(
        '<p>' . wp_kses(
            /* translators: %s: Link to WP admin new post page. */
            __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'bootstrap2wordpress' ),
            array(
                'a' => array(
                    'href' => array(),
                ),
            )
        ) . '</p>',
        esc_url( admin_url( 'post-new.php' ) )
    );
    ?>

<?php elseif ( is_search() ) : ?>
    <h2><?php esc_html_e('Not found', 'bootstrap2wordpress' ); ?></h2>
    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bootstrap2wordpress' ); ?></p>
    <?php get_search_form(); ?>

<?php else : ?>

    <h2><?php esc_html_e('Not found', 'bootstrap2wordpress' ); ?></h2>
    <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bootstrap2wordpress' ); ?></p>
    <?php get_search_form(); ?>

<?php endif; ?>
