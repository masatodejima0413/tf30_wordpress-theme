<!-- pickup -->
<div id="pickup">
    <div class="inner">

        <div class="pickup-items">

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'tag' => 'pickup',
                'orderby' => 'DESC', // さいしんじゅん
            ); ?>

            <?php $query = new WP_Query($args); ?>
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="pickup-item">
                        <div class="pickup-item-img">
                            <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('large');
                                    } else {
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/pickup1.png" alt="">';
                                    }
                                    ?>
                            <div class="pickup-item-tag"><?php my_the_post_category(false); ?></div><!-- /pickup-item-tag -->
                        </div><!-- /pickup-item-img -->
                        <div class="pickup-item-body">
                            <h2 class="pickup-item-title"><?php the_title(); ?></h2><!-- /pickup-item-title -->
                        </div><!-- /pickup-item-body -->
                    </a><!-- /pickup-item -->

                <?php endwhile;
                    wp_reset_postdata(); ?>


                <!-- <a class="related-item" href="">
                                <div class="related-item-img"><img src="img/entry1.png" alt=""></div>
                                <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
                            </a> -->
                <!-- /related-item -->

            <?php endif; ?>

        </div><!-- /pickup-items -->
    </div><!-- /inner -->
</div><!-- /pickup -->