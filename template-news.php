<?php
/*
Template Name: News
*/
get_header(); ?>

<main id="primary" class="site-main font-sans bg-gray-50 pb-24">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white pt-24 pb-32">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r from-white to-lilac">
                ニュース
            </h1>
            <p class="text-brand-200 text-lg">最新情報をお届けします</p>
        </div>
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20 max-w-4xl">
        <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-brand-500">
            <div class="space-y-8 divide-y divide-gray-100">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <article class="pt-8 first:pt-0 group relative">
                            <div class="flex flex-col md:flex-row md:items-baseline mb-3 gap-3 md:gap-6">
                                <time datetime="<?php echo get_the_date('c'); ?>" class="text-sm font-semibold text-brand-600 bg-brand-50 px-3 py-1.5 rounded-full inline-block w-max"><?php echo get_the_date('Y.m.d'); ?></time>
                                <h2 class="text-2xl font-bold text-gray-900 group-hover:text-brand-600 transition-colors duration-300">
                                    <a href="<?php the_permalink(); ?>" class="before:absolute before:inset-0"><?php the_title(); ?></a>
                                </h2>
                            </div>
                            <div class="prose prose-brand max-w-none text-gray-600 line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                <?php
                    endwhile;
                else: 
                ?>
                    <p class="text-center text-gray-500 py-12">お知らせはまだありません。</p>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
