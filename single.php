<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans bg-gray-50 pb-24">
    <?php while (have_posts()) : the_post(); ?>
    
    <!-- Hero Section for Post -->
    <section class="relative overflow-hidden bg-hero-gradient text-brand-950 pt-24 pb-32">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto border-l-4 border-brand-400 pl-6">
                <!-- Meta data -->
                <div class="flex flex-wrap items-center gap-4 mb-4 text-sm font-semibold tracking-wider">
                    <time datetime="<?php echo get_the_date('c'); ?>" class="bg-white/60 backdrop-blur-md text-brand-800 px-4 py-1.5 rounded-full border border-white/50">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo '<span class="text-brand-200">/</span>';
                        foreach ($categories as $category) {
                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="text-white hover:text-brand-200 transition-colors">' . esc_html($category->name) . '</a>';
                        }
                    }
                    ?>
                </div>
                
                <!-- Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight drop-shadow-lg leading-snug mb-4 text-white">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
        
        <!-- Bottom Curve -->
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <!-- Post Content Section -->
    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20 max-w-4xl">
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-brand-500'); ?>>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="mb-10 -mt-2 md:-mt-4 rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-auto object-cover max-h-[500px]']); ?>
                </div>
            <?php endif; ?>

            <div class="prose prose-lg prose-brand max-w-none text-gray-700 font-sans leading-loose">
                <?php
                // Filter the content to automatically style elements like tables/lists if desired
                // In a modern Tailwind project, `@tailwindcss/typography` is recommended for 'prose',
                // but since it's not strictly included, standard CSS in prose classes handles basic formatting.
                the_content();
                
                wp_link_pages(array(
                    'before' => '<div class="page-links mt-8 font-bold">' . esc_html__('ペ�Eジ:', 'oscss-wp-maruplus3'),
                    'after'  => '</div>',
                ));
                ?>
            </div>
            
            <?php
            // Tags
            $tags_list = get_the_tag_list('<div class="mt-12 flex flex-wrap gap-2 border-t border-gray-100 pt-6">', '', '</div>');
            if ($tags_list) {
                // Style tags
                echo str_replace('<a ', '<a class="inline-block bg-gray-100 text-gray-600 hover:bg-brand-100 hover:text-brand-700 text-sm px-4 py-1.5 rounded-full transition-colors font-bold shadow-sm" ', $tags_list);
            }
            ?>
        </article>

        <!-- Post Navigation -->
        <nav class="mt-12 md:mt-16" aria-label="Post Navigation">
            <div class="grid md:grid-cols-2 gap-6">
                <?php
                $prev_post = get_previous_post();
                if (!empty($prev_post)) :
                ?>
                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="group block bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-300 relative overflow-hidden flex flex-col justify-center">
                        <span class="text-xs font-black text-gray-400 group-hover:text-brand-500 mb-2 block uppercase tracking-wider transition-colors">Previous Post</span>
                        <span class="text-xl font-bold text-gray-900 group-hover:text-brand-700 leading-tight line-clamp-2 transition-colors"><?php echo esc_html($prev_post->post_title); ?></span>
                    </a>
                <?php else : ?>
                    <div class="hidden md:block"></div> <!-- Spacing placeholder -->
                <?php endif; ?>

                <?php
                $next_post = get_next_post();
                if (!empty($next_post)) :
                ?>
                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="group block bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-brand-300 relative overflow-hidden flex flex-col justify-center text-right">
                        <span class="text-xs font-black text-gray-400 group-hover:text-brand-500 mb-2 block uppercase tracking-wider transition-colors">Next Post</span>
                        <span class="text-xl font-bold text-gray-900 group-hover:text-brand-700 leading-tight line-clamp-2 transition-colors"><?php echo esc_html($next_post->post_title); ?></span>
                    </a>
                <?php endif; ?>
            </div>
            
            <div class="text-center mt-12">
                <!-- If there's a specific news page it hooks to, linking to the archive string or custom page -->
                <?php $news_page = get_page_by_path('news'); ?>
                <a href="<?php echo $news_page ? esc_url(get_permalink($news_page->ID)) : esc_url(home_url('/')); ?>" class="inline-flex items-center px-8 py-4 text-brand-700 bg-brand-50 hover:bg-brand-100 transition-all duration-300 rounded-full font-bold shadow-sm hover:shadow-md border border-brand-100">
                    <svg class="w-5 h-5 mr-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    記事一覧に戻めE                </a>
            </div>
        </nav>
    </div>

    <?php endwhile; // End of the loop. ?>
</main>

<?php
get_footer();
