<?php

?>
<article class="post">
    <div id="post-<?php the_ID() ?>" <?php post_class() ?> >
    <span><?= get_the_date('M d, Y') ?></span>
    </div>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
    <p class="excerpt">
    <?php force_balance_tags(the_excerpt())?>
    </p>
    <a href="<?php the_permalink()?>" class="read-more"><?php esc_html_e('Read the full post ->', 'boostrap2wordpress')?></a>
</article>