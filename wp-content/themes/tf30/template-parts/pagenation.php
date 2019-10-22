<?php if (paginate_links()) : ?>
    <!-- pagenation -->
    <div class="pagenation">
        <?php
            echo paginate_links(
                array(
                    'end_size' => 0,
                    'mid_size' => 1,
                    'prev_text' => true,
                    'prev_text' => '<i class="fas fa-angle-left"></i>',
                    'next_text' => '<i class="fas fa-angle-right"></i>',
                )
            );
            ?>
        <!-- <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a> -->
    </div><!-- /pagenation -->
<?php endif; ?>