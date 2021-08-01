<?php 
    $postsPerPage = 8;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $postsPerPage,
            'order_by' => 'date',
            'order' => 'desc',
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();?>
            <div class="post">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>

        <?php endwhile; ?>
<?php  wp_reset_postdata();?>   