<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans bg-gray-50 pb-0">
    <section class="relative overflow-hidden bg-hero-gradient text-brand-950 pt-32 pb-40 min-h-[75vh] flex flex-col justify-center items-center">
        <!-- Abstract Background -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-64 h-64 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
            <div class="absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="bottom: -10%; left: 30%;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-center my-auto">
            <h1 class="text-7xl md:text-9xl font-extrabold mb-6 tracking-tight drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800">
                404
            </h1>
            <p class="text-brand-200 text-xl md:text-2xl font-bold mb-8">
                繝壹・繧ｸ縺瑚ｦ九▽縺九ｊ縺ｾ縺帙ｓ
            </p>
            <div class="max-w-xl mx-auto bg-white/60 backdrop-blur-md text-brand-800 p-8 rounded-3xl border border-white/50 mb-12 shadow-2xl">
                <p class="text-white text-lg leading-relaxed">
                    縺頑爾縺励・繝壹・繧ｸ縺ｯ縲∫ｧｻ蜍輔∪縺溘・蜑企勁縺輔ｌ縺溘°縲・br class="hidden sm:block">URL縺碁俣驕輔▲縺ｦ縺・ｋ蜿ｯ閭ｽ諤ｧ縺後≠繧翫∪縺吶・                </p>
            </div>
            
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center justify-center px-10 py-5 bg-white text-brand-900 font-bold rounded-full shadow-lg hover:shadow-brand-500/50 transition-all duration-300 transform hover:-translate-y-1 text-lg group">
                <svg class="w-6 h-6 mr-3 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                繝医ャ繝励・繝ｼ繧ｸ縺ｸ謌ｻ繧・            </a>
        </div>
        
        <!-- Bottom Curve Divider -->
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>
</main>

<?php
get_footer();
