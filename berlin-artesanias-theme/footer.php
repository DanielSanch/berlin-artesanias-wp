<footer class="bg-white text-black py-16 border-t-4 border-black px-4">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
        <!-- Brand & Social -->
        <div class="col-span-1 md:col-span-2">
            <div class="flex items-center gap-2 mb-6">
                <div class="bg-black p-1 rounded text-primary">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4L19 11H5L12 4Z" fill="currentColor" />
                        <path d="M5 13H19L12 20L5 13Z" fill="currentColor" />
                    </svg>
                </div>
                <span class="text-2xl font-black tracking-tighter uppercase">Berlin Artesanías</span>
            </div>
            <p class="text-zinc-500 font-medium max-w-sm mb-8">
                La fusión perfecta entre el craft tradicional y la cultura urbana llanera. Directo de nuestro taller en
                Yopal a tus manos.
            </p>
            <div class="flex gap-4">
                <a class="w-10 h-10 bg-zinc-100 flex items-center justify-center rounded-lg hover:bg-primary transition-colors"
                    href="#"><span class="material-symbols-outlined text-xl">share</span></a>
                <a class="w-10 h-10 bg-zinc-100 flex items-center justify-center rounded-lg hover:bg-primary transition-colors"
                    href="#"><span class="material-symbols-outlined text-xl">camera_alt</span></a>
                <a class="w-10 h-10 bg-zinc-100 flex items-center justify-center rounded-lg hover:bg-primary transition-colors"
                    href="#"><span class="material-symbols-outlined text-xl">movie</span></a>
            </div>
        </div>

        <!-- Shop Links -->
        <div>
            <h4 class="font-black uppercase tracking-widest text-sm mb-6">Tienda</h4>
            <ul class="space-y-4 text-zinc-600 font-bold uppercase text-xs tracking-tight">
                <li><a class="hover:text-primary"
                        href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">Todos los
                        productos</a></li>
                <li><a class="hover:text-primary" href="/categoria/agendas">Agendas</a></li>
                <li><a class="hover:text-primary" href="/categoria/medallones">Medallones</a></li>
                <li><a class="hover:text-primary" href="/gift-cards">Gift Cards</a></li>
            </ul>
        </div>

        <!-- Support Links -->
        <div>
            <h4 class="font-black uppercase tracking-widest text-sm mb-6">Soporte</h4>
            <ul class="space-y-4 text-zinc-600 font-bold uppercase text-xs tracking-tight">
                <li><a class="hover:text-primary" href="/mi-cuenta/pedidos">Seguimiento</a></li>
                <li><a class="hover:text-primary" href="/envios">Envíos & Devoluciones</a></li>
                <li><a class="hover:text-primary" href="/faq">FAQ</a></li>
                <li><a class="hover:text-primary" href="/generales">Contacto</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div
        class="max-w-7xl mx-auto mt-16 pt-8 border-t border-zinc-100 flex flex-col sm:flex-row justify-between items-center gap-4">
        <p class="text-[10px] font-black uppercase text-zinc-400 tracking-widest">© <?php echo date('Y'); ?> Berlin
            Artesanías. Todos los derechos reservados.</p>
        <div class="flex gap-4 text-[10px] font-black uppercase text-zinc-400 tracking-widest">
            <a class="hover:text-black" href="/privacidad">Privacidad</a>
            <a class="hover:text-black" href="/terminos">Términos</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>