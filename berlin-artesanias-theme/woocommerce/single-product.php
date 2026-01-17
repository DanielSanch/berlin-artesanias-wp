<?php
/**
 * The Template for displaying all single products
 */
defined('ABSPATH') || exit;
get_header();

while (have_posts()):
    the_post();
    global $product;
    ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Breadcrumbs -->
        <nav class="flex mb-8 text-xs font-bold uppercase tracking-widest text-zinc-400 gap-2 items-center">
            <a href="<?php echo home_url(); ?>" class="hover:text-black">Inicio</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <a href="/tienda" class="hover:text-black">Catálogo</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-black">
                <?php the_title(); ?>
            </span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Gallery Section -->
            <div class="lg:col-span-7 space-y-4">
                <!-- Main Image -->
                <div
                    class="relative aspect-square bg-zinc-100 rounded-2xl overflow-hidden border-2 border-zinc-100 product-zoom">
                    <img alt="<?php the_title(); ?>" class="w-full h-full object-cover transition-transform duration-500"
                        src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" />
                    <div class="absolute bottom-4 right-4 bg-white/80 backdrop-blur-sm p-2 rounded-lg">
                        <span class="material-symbols-outlined text-black">zoom_in</span>
                    </div>
                </div>
                <!-- Thumbnails (Static Placeholders + Main if available) -->
                <div class="grid grid-cols-4 gap-4">
                    <div
                        class="aspect-square bg-zinc-100 rounded-xl overflow-hidden border-4 border-primary cursor-pointer">
                        <img alt="Thumb 1" class="w-full h-full object-cover"
                            src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>" />
                    </div>
                    <!-- Additional static placeholders for layout demo -->
                    <div
                        class="aspect-square bg-zinc-100 rounded-xl overflow-hidden border-2 border-transparent hover:border-zinc-300 cursor-pointer">
                    </div>
                    <div
                        class="aspect-square bg-zinc-100 rounded-xl overflow-hidden border-2 border-transparent hover:border-zinc-300 cursor-pointer">
                    </div>
                    <div
                        class="aspect-square bg-zinc-100 rounded-xl overflow-hidden border-2 border-transparent hover:border-zinc-300 cursor-pointer">
                    </div>
                </div>
            </div>

            <!-- Details Section -->
            <div class="lg:col-span-5">
                <div class="sticky top-24 space-y-8">
                    <div>
                        <div class="flex justify-between items-start mb-2">
                            <h1 class="text-4xl font-black uppercase tracking-tighter leading-none">
                                <?php the_title(); ?>
                            </h1>
                            <button class="p-2 hover:bg-zinc-100 rounded-full transition-colors">
                                <span class="material-symbols-outlined">favorite</span>
                            </button>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <div class="flex text-primary">
                                <span class="material-symbols-outlined fill-1">star</span>
                                <span class="material-symbols-outlined fill-1">star</span>
                                <span class="material-symbols-outlined fill-1">star</span>
                                <span class="material-symbols-outlined fill-1">star</span>
                                <span class="material-symbols-outlined fill-1">star</span>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-widest text-zinc-400">(128 Reseñas)</span>
                        </div>
                        <div class="text-5xl font-black text-primary tracking-tighter">
                            <?php echo $product->get_price_html(); ?>
                        </div>
                    </div>

                    <!-- Personalization Form (Frontend Demo) -->
                    <div class="bg-black text-white p-6 sm:p-8 rounded-2xl shadow-2xl space-y-6">
                        <h2 class="text-xl font-black uppercase tracking-widest border-b border-zinc-800 pb-4">Personaliza
                            tu
                            Agenda</h2>
                        <div class="space-y-3">
                            <label class="block text-xs font-black uppercase tracking-widest text-zinc-400">Texto para
                                grabado</label>
                            <input
                                class="w-full bg-zinc-900 border-zinc-800 rounded-lg py-3 px-4 text-sm focus:ring-2 focus:ring-primary focus:border-transparent uppercase placeholder-zinc-600"
                                placeholder="Ej: JUAN PÉREZ" type="text" />
                        </div>
                        <div class="space-y-3">
                            <label class="block text-xs font-black uppercase tracking-widest text-zinc-400">Tipo de
                                letra</label>
                            <div class="grid grid-cols-3 gap-2">
                                <button
                                    class="py-2 px-3 border-2 border-primary bg-primary text-black rounded-lg text-xs font-black uppercase">Modern</button>
                                <button
                                    class="py-2 px-3 border-2 border-zinc-800 hover:border-zinc-600 rounded-lg text-xs font-black uppercase">Classic</button>
                                <button
                                    class="py-2 px-3 border-2 border-zinc-800 hover:border-zinc-600 rounded-lg text-xs font-black uppercase italic">Script</button>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <label class="block text-xs font-black uppercase tracking-widest text-zinc-400">Color del
                                Cuero</label>
                            <div class="flex gap-4">
                                <button
                                    class="w-8 h-8 rounded-full bg-[#8B4513] border-2 border-white ring-2 ring-primary"></button>
                                <button
                                    class="w-8 h-8 rounded-full bg-[#2F4F4F] border-2 border-transparent hover:border-white"></button>
                                <button
                                    class="w-8 h-8 rounded-full bg-black border-2 border-transparent hover:border-white"></button>
                            </div>
                        </div>

                        <!-- Standard WooCommerce Add to Cart -->

                        <form class="cart"
                            action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>"
                            method="post" enctype='multipart/form-data'>
                            <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"
                                class="w-full bg-primary text-black py-5 rounded-xl font-black text-lg uppercase tracking-tighter hover:bg-white hover:scale-[1.02] transition-all flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined">shopping_bag</span>
                                Añadir al Carrito
                            </button>
                        </form>

                        <div class="pt-4 space-y-4 border-t border-zinc-800">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded border-zinc-700 bg-zinc-900 text-primary focus:ring-primary"
                                    type="checkbox" />
                                <span
                                    class="text-sm font-bold uppercase tracking-tight group-hover:text-primary transition-colors">Añadir
                                    empaque de regalo (+ $5.000)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Trust Badges -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 p-4 bg-zinc-50 rounded-xl">
                            <span class="material-symbols-outlined text-black">local_shipping</span>
                            <div>
                                <p class="text-[10px] font-black uppercase leading-none">Envío Gratis</p>
                                <p class="text-[10px] text-zinc-500 font-bold uppercase">Compras +$150k</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-zinc-50 rounded-xl">
                            <span class="material-symbols-outlined text-black">verified_user</span>
                            <div>
                                <p class="text-[10px] font-black uppercase leading-none">Garantía 1 Año</p>
                                <p class="text-[10px] text-zinc-500 font-bold uppercase">Calidad Berlin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description Tabs -->
        <section class="mt-24">
            <div class="flex border-b-2 border-zinc-100 gap-12">
                <button
                    class="pb-4 border-b-4 border-black font-black uppercase tracking-widest text-sm">Descripción</button>
                <button
                    class="pb-4 border-b-4 border-transparent text-zinc-400 hover:text-black font-black uppercase tracking-widest text-sm transition-colors">Detalles
                    Técnicos</button>
            </div>
            <div class="py-12 grid grid-cols-1 md:grid-cols-2 gap-16">
                <div class="space-y-6">
                    <h3 class="text-2xl font-black uppercase tracking-tighter">Artesanía que perdura</h3>
                    <div class="text-zinc-600 leading-relaxed font-medium">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden h-80 bg-zinc-100">
                    <!-- Static Detail Image -->
                </div>
            </div>
        </section>

    </main>

<?php
endwhile; // End of the loop.
get_footer();
?>