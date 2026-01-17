<?php
/*
Template Name: Laser Studio
*/
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative bg-black text-white py-24 px-4 overflow-hidden">
        <div class="absolute inset-0 bg-zinc-900 opacity-50">
            <!-- Background pattern or image can go here -->
        </div>
        <div class="max-w-7xl mx-auto relative z-10 text-center">
            <span class="text-primary font-black tracking-widest uppercase text-sm mb-4 block">Servicio Exclusivo</span>
            <h1 class="text-5xl md:text-7xl font-black uppercase tracking-tighter mb-8 max-w-4xl mx-auto leading-none">
                Laser Studio <br /><span class="text-zinc-500">Precision Labs</span>
            </h1>
            <p class="text-xl md:text-2xl text-zinc-300 max-w-2xl mx-auto mb-12 font-light">
                Corte y grabado láser de alta precisión para tus proyectos más ambiciosos. Desde prototipos únicos hasta
                producción en masa.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contacto"
                    class="bg-primary text-black px-8 py-4 rounded-lg font-black uppercase tracking-tight hover:scale-105 transition-transform">
                    Cotizar Proyecto
                </a>
                <a href="/tienda"
                    class="border-2 border-white px-8 py-4 rounded-lg font-black uppercase tracking-tight hover:bg-white hover:text-black transition-colors">
                    Ver Ejemplos
                </a>
            </div>
        </div>
    </section>

    <!-- Capabilities Section -->
    <section class="py-20 px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-zinc-50 p-8 rounded-xl border border-zinc-100">
                <span class="material-symbols-outlined text-5xl text-primary mb-6">precision_manufacturing</span>
                <h3 class="text-2xl font-black uppercase mb-4">Corte de Precisión</h3>
                <p class="text-zinc-600 font-medium">Corte milimétrico en madera, acrílico, cuero y más. Bordes limpios
                    y acabados profesionales.</p>
            </div>
            <div class="bg-zinc-50 p-8 rounded-xl border border-zinc-100">
                <span class="material-symbols-outlined text-5xl text-primary mb-6">draw</span>
                <h3 class="text-2xl font-black uppercase mb-4">Grabado Detallado</h3>
                <p class="text-zinc-600 font-medium">Personaliza superficies con logotipos, textos o ilustraciones
                    complejas con alta definición.</p>
            </div>
            <div class="bg-zinc-50 p-8 rounded-xl border border-zinc-100">
                <span class="material-symbols-outlined text-5xl text-primary mb-6">rocket_launch</span>
                <h3 class="text-2xl font-black uppercase mb-4">Prototipado Rápido</h3>
                <p class="text-zinc-600 font-medium">Materializa tus ideas en tiempo récord. Ideal para arquitectos,
                    diseñadores y emprendedores.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contacto" class="bg-zinc-900 text-white py-20 px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-black uppercase mb-8">Inicia tu Proyecto</h2>
            <p class="text-zinc-400 mb-12">Cuéntanos qué necesitas y te enviaremos una cotización personalizada en menos
                de 24 horas.</p>

            <div class="bg-black p-8 rounded-xl border border-zinc-800 text-left">
                <?php echo do_shortcode('[contact-form-7 id="form-laser-studio" title="Laser Studio Quote"]'); ?>
                <!-- Fallback content if form doesn't exist -->
                <p class="text-sm text-zinc-500 mt-4 text-center italic">
                    (Asegúrate de configurar el formulario de contacto o escríbenos directamente a <a
                        href="mailto:hola@berlinartesanias.com"
                        class="text-primary hover:underline">hola@berlinartesanias.com</a>)
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>