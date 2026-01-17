<!-- CTA / Social Proof Section -->
<section class="bg-black text-white py-24 px-4 overflow-hidden relative">
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <h2 class="text-5xl sm:text-7xl font-black tracking-tighter uppercase leading-[0.85] mb-8">
            Únete a los <span class="text-primary">+5,000</span> creadores que ya marcan tendencia.
        </h2>
        <p class="text-lg sm:text-xl text-zinc-400 font-medium mb-12 max-w-2xl mx-auto">
            Nuestra comunidad no solo compra productos, crea su propia identidad. Comparte tu diseño usando
            #BerlinArtesanías.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <button
                class="px-10 py-5 bg-primary text-black font-black uppercase tracking-tight rounded-lg hover:bg-white transition-all text-lg">
                Ver Galería de Clientes
            </button>
            <button
                class="px-10 py-5 border-2 border-white font-black uppercase tracking-tight rounded-lg hover:bg-white hover:text-black transition-all text-lg">
                Nuestro Proceso
            </button>
        </div>
    </div>
    <!-- Large Background Decorative Typography -->
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[20rem] font-black text-zinc-900/40 select-none -z-0 pointer-events-none uppercase tracking-tighter">
        Berlin
    </div>
</section>

<!-- Footer -->
<footer class="bg-white text-black py-16 border-t-4 border-black px-4">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
        <div class="col-span-1 md:col-span-2">
            <div class="flex items-center gap-2 mb-6">
                <div class="bg-black p-1 rounded text-primary">
                    <svg class="size-6" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M47.2426 24L24 47.2426L0.757355 24L24 0.757355L47.2426 24ZM12.2426 21H35.7574L24 9.24264L12.2426 21Z"
                            fill="currentColor" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="text-2xl font-black tracking-tighter uppercase">Berlin Artesanías</span>
            </div>
            <p class="text-zinc-500 font-medium max-w-sm mb-8">
                La fusión perfecta entre el craft tradicional y la cultura urbana berlinesa. Directo de nuestro taller a
                tus manos.
            </p>
        </div>
        <div>
            <h4 class="font-black uppercase tracking-widest text-sm mb-6">Tienda</h4>
            <ul class="space-y-4 text-zinc-600 font-bold uppercase text-xs tracking-tight">
                <li><a class="hover:text-primary" href="#">Todos los productos</a></li>
                <li><a class="hover:text-primary" href="#">Más vendidos</a></li>
                <li><a class="hover:text-primary" href="#">Próximos lanzamientos</a></li>
                <li><a class="hover:text-primary" href="#">Tarjetas de regalo</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-black uppercase tracking-widest text-sm mb-6">Soporte</h4>
            <ul class="space-y-4 text-zinc-600 font-bold uppercase text-xs tracking-tight">
                <li><a class="hover:text-primary" href="#">Seguimiento de pedido</a></li>
                <li><a class="hover:text-primary" href="#">Envíos y Devoluciones</a></li>
                <li><a class="hover:text-primary" href="#">Preguntas Frecuentes</a></li>
                <li><a class="hover:text-primary" href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
    <div
        class="max-w-7xl mx-auto mt-16 pt-8 border-t border-zinc-100 flex flex-col sm:flex-row justify-between items-center gap-4">
        <p class="text-[10px] font-black uppercase text-zinc-400 tracking-widest">©
            <?php echo date('Y'); ?> Berlin Artesanías. Todos los derechos reservados.
        </p>
        <div class="flex gap-4 text-[10px] font-black uppercase text-zinc-400 tracking-widest">
            <a class="hover:text-black" href="#">Privacidad</a>
            <a class="hover:text-black" href="#">Términos y Condiciones</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>