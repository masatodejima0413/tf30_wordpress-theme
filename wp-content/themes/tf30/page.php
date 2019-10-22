<?php get_header(); ?>


<!-- content -->
<div id="content">
    <div class="inner">

        <!-- primary -->
        <main id="primary">

            <?php if (function_exists('bcn_display')) : ?>
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <?php bcn_display(); ?>
                    <!-- <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="/" class="home"><span property="name">ホーム</span></a>
                    <meta property="position" content="1">
                </span>
                <i class="fas fa-angle-right"></i>
                <span class="current-item">カテゴリー名</span> -->
                </div><!-- /breadcrumb -->
            <?php endif; ?>

            <!-- entry -->
            <article class="entry">
                <?php while (have_posts()) : the_post(); ?>

                    <!-- entry-header -->
                    <div class="entry-header">

                        <!-- <div class="entry-label"><a href="#">カテゴリ名</a></div> -->
                        <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->
                        <!-- trueを引数として渡すとリンク付き、falseを渡すとリンクなし -->
                        <div class="entry-label"><?php my_the_post_category(true); ?></div><!-- /entry-item-tag -->
                        <!-- entry-meta -->
                        <div class="entry-meta">
                            <time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
                            <?php if (get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
                                <time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
                            <?php endif; ?>
                        </div><!-- /entry-meta -->

                        <!-- entry-img -->
                        <div class="entry-img">
                            <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                }
                                ?>
                            <!-- <img src="img/entry1.png" alt=""> -->
                        </div><!-- /entry-img -->

                    </div><!-- /entry-header -->

                    <!-- entry-body -->
                    <div class="entry-body">
                        <?php the_content(); ?>
                        <?php
                            //改ページを有効にするための記述
                            wp_link_pages(
                                array(
                                    'before' => '<nav class="entry-links">',
                                    'after' => '</nav>',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'next_or_number' => 'number',
                                    'separator' => '',
                                )
                            );
                            ?>
                    </div><!-- /entry-body -->


                <?php endwhile; ?>

            </article> <!-- /entry -->
        </main><!-- /primary -->



    </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>