<?php get_header('blog');?>
<div class="row g-0 ">
    <div class="col-md-12 text-center">
        <div class="cat-media">
            <?php $categories = get_categories(); ?>
            <ul class="categories-menu">
                <li><a class="cat-list_item active" href="#!" data-slug=""> ALL </a></li>
                <?php foreach($categories as $category) : ?>
                <li>
                    <a class="cat-list_item" href="#!" data-slug="<?= $category->slug; ?>"><?= $category->name; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div> 
<section class="row g-0 p-0 blog" id="ajax-posts">
    <?php 
        $get_cat = $_GET['cat'];
        $args = array(
            'post_type' => 'post',
            'order_by' => 'date',
            'category__and' => $get_cat,
            'paged' => 1,
            'order' => 'desc',
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();?>
            <?php echo get_template_part('template-parts/loop', 'blog'); ?>

        <?php endwhile; ?>
        <?php  wp_reset_postdata();?>   
</section>  


<div class="g-0" id="more_posts"> <button class="btn btn-pink"> LOAD MORE </button> </div>

<?php get_footer();?>


