<?php
/*
Template Name: Generales
*/
get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="flex flex-col lg:flex-row min-h-[80vh]">
        <div class="w-full lg:w-1/2 bg-black flex items-center justify-center p-8 lg:p-16 relative overflow-hidden">
            <div class="relative z-10 space-y-4">
                <span class="text-primary font-black uppercase tracking-[0.2em] text-sm">Orgullo Regional</span>
                <h1
                    class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                    HECHO EN EL <br />
                    <span class="text-primary italic">CORAZÓN</span> <br />
                    DEL CASANARE
                </h1>
                <div class="w-24 h-2 bg-primary mt-8"></div>
            </div>
            <div
                class="absolute -bottom-10 -left-10 text-[15rem] font-black text-white/5 select-none pointer-events-none uppercase tracking-tighter">
                Yopal
            </div>
        </div>
        <div class="w-full lg:w-1/2 bg-zinc-100 flex flex-col p-8 lg:p-16 gap-8">
            <div class="grid grid-cols-2 gap-4 h-full">
                <!-- Team Member 1 -->
                <div class="group relative overflow-hidden rounded-2xl bg-zinc-300 aspect-[3/4]">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAAPGhPepzzu_Y6ggd5R7EHs8uhrYCY7qc5h6u-oVS7wgVijfLzBgDi8t_UisdzfgCrwDs4W5j4TrCuE13KXVuqtA0uAB3XzbydScH-iSFYJ5v2zhvL4fL_Rg89UR5TmglPHyOPdF7Sk51nEVVfGsCk74m0la-wOrGqCfJLiU5GdYDr_lR51axEQeqCrHJBTV0xfK6F174aapuUyemhV3NHkZSlheJ1xMcDWCKJ4dhcLZ1yBTpfgEGdf08BaPmR5WLso_ZpvfLlzo4A");'>
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-6">
                        <span class="text-white font-black uppercase tracking-widest text-lg">Juan</span>
                        <span class="text-primary text-xs font-bold uppercase">Maestro Cuero</span>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="group relative overflow-hidden rounded-2xl bg-zinc-300 aspect-[3/4] mt-12">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuApPoamIoIDHveCUmZ7hUS-AEssLYAcG12Wnu3la498GO_XtILEXTwlVM73nEgQBfNaawJzCfiZkJP4Y6yN1ALiTwGfhwQ99_Kn1654YrHXeo9-OFDYo4A1OT7GSGbm8xSiLRgL7a4kB3gmfQO5xclXcEkvMdIHC49vBSqeXS62kf_z77ciVHBcAFHr5AOUycSE5e5ofos0wU_Zkt7YUqCkQRXGk7nb-6K8v-apiO3bx3iIlqvVDa9tSv4hIV_07tMADMXpXAg-r7qi");'>
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-6">
                        <span class="text-white font-black uppercase tracking-widest text-lg">Natalia</span>
                        <span class="text-primary text-xs font-bold uppercase">Diseño & Grabado</span>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-zinc-200 shadow-sm">
                <p class="text-zinc-600 font-medium leading-relaxed italic">
                    "En nuestro taller de Yopal, cada pieza es una historia. Fusionamos la herencia llanera con una
                    visión urbana
                    y moderna para crear accesorios que trascienden el tiempo."
                </p>
            </div>
        </div>
    </section>

    <!-- Contact & Map Section -->
    <section class="py-20 px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <!-- Form -->
            <div class="lg:col-span-7">
                <h2 class="text-4xl font-black uppercase tracking-tighter mb-8">Escríbenos</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-zinc-400">Nombre
                                Completo</label>
                            <input
                                class="w-full bg-zinc-50 border-2 border-zinc-100 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                                placeholder="Ej. Carlos Pérez" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-zinc-400">Email</label>
                            <input
                                class="w-full bg-zinc-50 border-2 border-zinc-100 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                                placeholder="hola@tuemail.com" type="email" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-widest text-zinc-400">Asunto</label>
                        <select
                            class="w-full bg-zinc-50 border-2 border-zinc-100 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all">
                            <option>Pedido Personalizado</option>
                            <option>Duda con mi envío</option>
                            <option>Ventas al por mayor</option>
                            <option>Otros</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-widest text-zinc-400">Mensaje</label>
                        <textarea
                            class="w-full bg-zinc-50 border-2 border-zinc-100 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all"
                            placeholder="¿En qué podemos ayudarte?" rows="5"></textarea>
                    </div>
                    <button
                        class="w-full md:w-auto px-12 py-4 bg-black text-white font-black uppercase tracking-tighter rounded-xl hover:bg-primary hover:text-black transition-all shadow-[6px_6px_0px_0px_rgba(242,196,13,1)]">
                        Enviar Mensaje
                    </button>
                </form>
            </div>

            <!-- Map & Info -->
            <div class="lg:col-span-5 space-y-12">
                <div>
                    <h3 class="text-2xl font-black uppercase tracking-tighter mb-6">Nuestra Ubicación</h3>
                    <div
                        class="relative w-full h-64 bg-zinc-200 rounded-2xl overflow-hidden border-4 border-white shadow-lg">
                        <div class="absolute inset-0 bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-500"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuApcWkEv7jj2Vb_u5pZ3ljdM75CA9riiif0Dk3roK46o4q4pyE2WjuEEARdM29afuZrMLCpZE8llyIDGiOc1NJVb6bskIp9t5D9WTUFN_XeCMgNI-2jj9bGJWgMgQGKUG07Ow4bK1eC592i0JsJFNCyrI3ePrFS4kYO5aieqSqPw-gyFXp4UE37vJDa4UrJ7fadxAfi6muG9rGaIjHvQMvrs6FSENGgB29Iln0VnloRclE5cGtyHij6Ws1ocLhpKaMVZMZsmK3xTbUl"); opacity: 0.4;'>
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center p-4 text-center bg-black/40">
                            <span class="material-symbols-outlined text-primary text-5xl mb-2">location_on</span>
                            <p class="text-white font-bold uppercase text-sm tracking-tight">Yopal, Casanare, Colombia
                            </p>
                            <p class="text-zinc-300 text-xs mt-1">Calle 24 # 15 - 45, Barrio Centro</p>
                            <button
                                class="mt-4 px-4 py-2 bg-white text-black text-[10px] font-black uppercase tracking-widest rounded-full hover:bg-primary transition-colors">Ver
                                en Google Maps</button>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-black uppercase tracking-tighter mb-6">Redes Sociales</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="https://instagram.com/berlinartesanias" target="_blank"
                            class="flex items-center gap-4 p-4 bg-zinc-50 rounded-2xl border-2 border-zinc-100 hover:border-primary group transition-all">
                            <div
                                class="w-12 h-12 bg-black text-primary flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined">camera_alt</span>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-zinc-400 uppercase tracking-widest">Instagram</p>
                                <p class="font-bold">@berlinartesanias</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-center gap-4 p-4 bg-zinc-50 rounded-2xl border-2 border-zinc-100 hover:border-primary group transition-all">
                            <div
                                class="w-12 h-12 bg-green-500 text-white flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined">chat</span>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-zinc-400 uppercase tracking-widest">WhatsApp</p>
                                <p class="font-bold">+57 322 840 8507</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="bg-primary py-12 px-4">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8 md:gap-0">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-4xl text-black">inventory_2</span>
                <div>
                    <p class="font-black uppercase text-sm leading-tight">Envío Seguro</p>
                    <p class="text-xs font-bold text-black/60 uppercase">Nacional e Internacional</p>
                </div>
            </div>
            <div class="hidden md:block w-px h-12 bg-black/10"></div>
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-4xl text-black">verified</span>
                <div>
                    <p class="font-black uppercase text-sm leading-tight">Calidad Premium</p>
                    <p class="text-xs font-bold text-black/60 uppercase">Materiales Seleccionados</p>
                </div>
            </div>
            <div class="hidden md:block w-px h-12 bg-black/10"></div>
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-4xl text-black">palette</span>
                <div>
                    <p class="font-black uppercase text-sm leading-tight">100% Personalizado</p>
                    <p class="text-xs font-bold text-black/60 uppercase">Diseños únicos por ti</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>