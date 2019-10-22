<div class="entry-related">
    <div class="related-title">関連記事</div>

    <div class="related-items">

        <?php if (has_category()) : ?>

            <?php $categories = get_the_category();
                //get_the_category()で取得されるarrayの中身は常に1件(カテゴリー複数とかつけたら複数になんのかな)
                //だからindex.phpとかでも$category[0]でやってる、んどとおもう
                $category_ID = array();
                foreach ($categories as $category) :
                    array_push($category_ID, $category->cat_ID);
                endforeach;
                //var_dump($category_ID);→ array(1){[0]=>int(3)}

                $args = array(
                    'post__not_in' => array($post->ID), // 今読んでいる記事を除く
                    'posts_per_page' => 8,
                    'category__in' => $category_ID,
                    'orderby' => 'rand', // ランダムに記事を選ぶ
                ); ?>

            <?php $query = new WP_Query($args); ?>
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a class="related-item" href="<?php the_permalink(); ?>">
                        <div class="related-item-img">
                            <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium');
                                        } else {
                                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                        }
                                        ?>
                        </div>
                        <div class="related-item-title"><?php the_title(); ?></div>
                    </a>
                <?php endwhile;
                        wp_reset_postdata(); ?>
            <?php else : ?>
                Not Found.
            <?php endif; ?>

            <!-- <a class="related-item" href="">
                                <div class="related-item-img"><img src="img/entry1.png" alt=""></div>
                                <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
                            </a> -->
            <!-- /related-item -->

        <?php endif; ?>
    </div><!-- /related-items -->
</div><!-- /entry-related -->