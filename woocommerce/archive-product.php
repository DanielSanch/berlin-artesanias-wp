<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>

<main class="min-h-screen">
    <!-- Catalog Header -->
    <header class="bg-white pt-16 pb-8 px-4">
        <div class="max-w-7xl mx-auto">
            <nav class="flex text-xs font-bold uppercase tracking-widest text-zinc-400 mb-4 gap-2">
                <a href="<?php echo home_url(); ?>" class="hover:text-black">Inicio</a>
                <span>/</span>
                <span class="text-black">Catálogo</span>
            </nav>
            <h1 class="text-6xl md:text-8xl font-black tracking-tighter uppercase leading-none">
                Todos los<br /><span class="text-primary italic">Productos</span>
            </h1>
        </div>
    </header>

    <!-- Sticky Filters -->
    <div class="sticky top-[64px] sm:top-[80px] z-40 bg-white border-y border-zinc-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-4 overflow-x-auto no-scrollbar">
                <button
                    class="flex items-center gap-2 px-4 py-2 border-2 border-black rounded-lg text-xs font-black uppercase tracking-tight hover:bg-black hover:text-white transition-all whitespace-nowrap">
                    <span class="material-symbols-outlined text-sm">filter_list</span>
                    Categoría
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 border border-zinc-200 rounded-lg text-xs font-black uppercase tracking-tight hover:border-black transition-all whitespace-nowrap">
                    Precio
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 border border-zinc-200 rounded-lg text-xs font-black uppercase tracking-tight hover:border-black transition-all whitespace-nowrap">
                    Material
                </button>
            </div>
            <div class="flex items-center gap-2 text-xs font-bold text-zinc-500 uppercase tracking-widest">
                <span><?php echo wc_get_loop_prop('total'); ?> Resultados</span>
                <div class="h-4 w-[1px] bg-zinc-200 mx-2"></div>
                <?php woocommerce_catalog_ordering(); ?>
            </div>
        </div>
    </div>

    <!-- Product Grid -->
    <section class="py-12 px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-12">
            <?php
            if ( woocommerce_product_loop() ) {
                while ( have_posts() ) {
                    the_post();
                    /**
                     * Hook: woocommerce_shop_loop.
                     */
                    do_action( 'woocommerce_shop_loop' );
                    
                    global $product;
                    ?>
                    <!-- Product Card -->
                    <div class="group flex flex-col gap-4">
                        <div
                            class="relative w-full aspect-[1/1] bg-white rounded-lg overflow-hidden border border-zinc-100 shadow-sm group-hover:shadow-md transition-shadow">
                            <a href="<?php the_permalink(); ?>" class="absolute inset-0 bg-center bg-cover transition-transform duration-500 group-hover:scale-105"
                                style='background-image: url("<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>");'>
                            </a>
                            <?php if ($product->is_on_sale()) : ?>
                            <span
                                class="absolute top-4 left-4 bg-black text-white px-2 py-1 text-[10px] font-black uppercase tracking-widest z-10">Oferta</span>
                            <?php endif; ?>
                            
                            <!-- Quick Actions -->
                            <div class="quick-shop-sidebar absolute right-0 top-0 h-full w-16 bg-white/90 backdrop-blur-sm border-l border-zinc-200 flex flex-col items-center py-4 gap-4 translate-x-full group-hover:translate-x-0 transition-transform duration-300">
                                <button class="p-2 hover:text-primary transition-colors"><span class="material-symbols-outlined">favorite</span></button>
                                <button class="p-2 hover:text-primary transition-colors"><span class="material-symbols-outlined">visibility</span></button>
                                <button class="p-2 hover:text-primary transition-colors"><span class="material-symbols-outlined">share</span></button>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-black text-sm font-black uppercase tracking-tight group-hover:text-primary transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="text-zinc-500 text-xs font-bold"><?php echo $product->get_price_html(); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>"
                            class="w-full bg-primary text-black py-3 rounded-lg font-black uppercase tracking-tighter hover:bg-black hover:text-white transition-all text-center">
                            Personalizar
                        </a>
                    </div>
                    <?php
                }
            } else {
                do_action( 'woocommerce_no_products_found' );
            }
            ?>
        </div>

        <!-- Pagination -->
        <div class="mt-20 flex justify-center items-center gap-4">
            <?php
            $total_pages = wc_get_loop_prop( 'total_pages' );
            $current_page = max( 1, get_query_var( 'paged' ) );
            
            if ($total_pages > 1) {
                // Simple previous button
                if ($current_page > 1) {
                    echo '<a href="' . get_pagenum_link($current_page - 1) . '" class="w-10 h-10 flex items-center justify-center border border-zinc-200 rounded-lg hover:border-black transition-colors"><span class="material-symbols-outlined text-sm">chevron_left</span></a>';
                }
                
                // Page numbers (simplified)
                for ($i = 1; $i <= $total_pages; $i++) {
                    $active_class = $i === $current_page ? 'bg-black text-white' : 'border border-zinc-200 hover:border-black';
                    echo '<a href="' . get_pagenum_link($i) . '" class="w-10 h-10 flex items-center justify-center rounded-lg font-black text-xs ' . $active_class . '">' . $i . '</a>';
                }
                
                // Next button
                if ($current_page < $total_pages) {
                     echo '<a href="' . get_pagenum_link($current_page + 1) . '" class="w-10 h-10 flex items-center justify-center border border-zinc-200 rounded-lg hover:border-black transition-colors"><span class="material-symbols-outlined text-sm">chevron_right</span></a>';
                }
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
