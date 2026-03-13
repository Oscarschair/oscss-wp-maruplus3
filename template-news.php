<?php
/*
Template Name: News
*/
get_header(); ?>

<main>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold my-8">ニュース</h1>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>
                <article class="my-4">
                    <h2 class="text-2xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="text-gray-600">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    </div>
                    <div class="prose">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</main>

<?php get_footer(); ?>
