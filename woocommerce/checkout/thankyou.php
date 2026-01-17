<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 */

defined('ABSPATH') || exit;

// Note: This template is usually included inside `checkout/thankyou.php` wrapper or called directly. 
// We are mimicking the page structure provided by the user. 
// In a real theme, this might need to sit inside a page wrapper, but here we assume this file handles the main content area output.
// However, typically `thankyou.php` is just a partial. 
// If this file replaces the WHOLE page content including header/footer, we need get_header/get_footer. 
// BUT, standard WC `thankyou.php` is included via shortcode [woocommerce_checkout].
// So we should output just the MAIN content here, not html/body tags.
// Wait, the user provided a full HTML page. 
// I will output the structure inside the standard WC wrapper logic.

if ($order):
    ?>
    <main class="min-h-[80vh] flex flex-col items-center justify-center py-12 px-4">
        <div class="max-w-3xl w-full text-center mb-12">
            <div
                class="inline-flex items-center justify-center w-24 h-24 bg-primary text-black rounded-full mb-8 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">
                <span class="material-symbols-outlined text-6xl font-black">check</span>
            </div>
            <h1 class="text-5xl sm:text-7xl font-black leading-[0.9] tracking-tighter text-black uppercase mb-6">
                ¡LISTO!<br />TU PEDIDO <span class="text-primary italic">ESTÁ EN CAMINO</span>
            </h1>
            <p class="text-xl font-bold text-zinc-600 bg-zinc-100 py-3 px-6 rounded-lg inline-block">
                El equipo de Berlin Artesanías ya está preparando tu detalle.
            </p>
        </div>

        <div
            class="max-w-2xl w-full bg-white border-4 border-black p-8 rounded-2xl shadow-[12px_12px_0px_0px_rgba(242,196,13,1)] mb-12">
            <h2 class="text-2xl font-black uppercase tracking-tighter border-b-2 border-zinc-100 pb-4 mb-6">Detalles del
                Pedido</h2>
            <div class="grid grid-cols-2 gap-y-6">
                <div>
                    <p class="text-xs font-black uppercase tracking-widest text-zinc-400 mb-1">Número de Pedido</p>
                    <p class="text-lg font-bold text-black">#
                        <?php echo $order->get_order_number(); ?>
                    </p>
                </div>
                <div>
                    <p class="text-xs font-black uppercase tracking-widest text-zinc-400 mb-1">Fecha</p>
                    <p class="text-lg font-bold text-black">
                        <?php echo wc_format_datetime($order->get_date_created()); ?>
                    </p>
                </div>
                <div>
                    <p class="text-xs font-black uppercase tracking-widest text-zinc-400 mb-1">Total</p>
                    <p class="text-lg font-black text-black">
                        <?php echo $order->get_formatted_order_total(); ?>
                    </p>
                </div>
                <div>
                    <p class="text-xs font-black uppercase tracking-widest text-zinc-400 mb-1">Método de Pago</p>
                    <p class="text-lg font-bold text-black italic">
                        <?php echo wp_kses_post($order->get_payment_method_title()); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center gap-8 w-full max-w-lg">
            <div class="text-center">
                <p class="text-sm font-black uppercase tracking-[0.2em] text-zinc-500 mb-4">Comparte tu creación</p>
                <div class="flex gap-4">
                    <button
                        class="w-14 h-14 bg-zinc-100 flex items-center justify-center rounded-xl border-2 border-black hover:bg-primary transition-all hover:-translate-y-1">
                        <span class="material-symbols-outlined font-bold text-black">share</span>
                    </button>
                    <button
                        class="w-14 h-14 bg-zinc-100 flex items-center justify-center rounded-xl border-2 border-black hover:bg-primary transition-all hover:-translate-y-1">
                        <span class="material-symbols-outlined font-bold text-black">camera_alt</span>
                    </button>
                    <button
                        class="w-14 h-14 bg-zinc-100 flex items-center justify-center rounded-xl border-2 border-black hover:bg-primary transition-all hover:-translate-y-1">
                        <span class="material-symbols-outlined font-bold text-black">movie</span>
                    </button>
                </div>
            </div>
            <a href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>"
                class="w-full sm:w-auto px-12 py-5 bg-black text-white text-xl font-black uppercase tracking-tighter hover:bg-zinc-800 transition-all rounded-xl text-center shadow-[8px_8px_0px_0px_rgba(242,196,13,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none">
                Volver a la Tienda
            </a>
        </div>
    </main>
<?php else: ?>
    <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-message">
        <?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', 'woocommerce'), null); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
    </p>
<?php endif; ?>