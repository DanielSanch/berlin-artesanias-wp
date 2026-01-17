<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light">

<!-- VERSION: 1.0.4 - LOGO FIX -->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?> Berlin Artesanías
    </title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.svg">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f2c40d",
                        "background-light": "#ffffff",
                        "background-dark": "#000000",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .brush-accent {
            position: relative;
            z-index: 1;
        }

        .brush-accent::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: -4px;
            width: 105%;
            height: 12px;
            background-color: #f2c40d;
            z-index: -1;
            transform: rotate(-1deg);
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-background-light dark:bg-background-dark font-display text-black dark:text-white transition-colors duration-300'); ?>>

    <!-- Promo Ribbon -->
    <div class="w-full bg-black text-white py-2 overflow-hidden whitespace-nowrap border-b border-primary/30">
        <div class="flex animate-none justify-center gap-10 text-xs font-bold tracking-widest uppercase">
            <span>Envío rápido a todo el mundo</span>
            <span class="hidden md:inline">•</span>
            <span>100% Artesanía Llanera</span>
            <span class="hidden md:inline">•</span>
            <span>Personalización Gratuita esta semana</span>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-50 bg-black text-white shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Logo (Preserved) -->
                <div class="flex items-center gap-3 group cursor-pointer"
                    onclick="window.location='https://experiencia.berlinartesanias.com/'">
                    <div
                        class="bg-black p-1.5 rounded-lg text-primary transform group-hover:rotate-12 transition-transform shadow-lg flex items-center justify-center min-w-[32px] sm:min-w-[40px] aspect-square border border-primary/20">
                        <span class="text-2xl sm:text-3xl font-black leading-none">B</span>
                    </div>
                    <div class="flex flex-row items-baseline gap-1 text-white uppercase tracking-tighter">
                        <span class="text-xl sm:text-2xl font-black">Berlin</span>
                        <span class="text-lg sm:text-xl font-light opacity-90">
                            <?php
                            if (is_front_page()) {
                                echo 'Artesanías';
                            } else {
                                echo get_the_title();
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <!-- Navigation Links (Centered) -->
                <div class="hidden lg:flex items-center gap-6 text-sm font-bold uppercase tracking-tight">
                    <a href="/generales" class="hover:text-primary transition-colors">Generales</a>
                    <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
                        class="hover:text-primary transition-colors">Catálogo</a>
                    <a href="/personalizador" class="hover:text-primary transition-colors text-primary">Personalizar</a>
                </div>

                <!-- Right Icons -->
                <div class="flex items-center gap-2 sm:gap-4">
                    <button class="p-2 hover:bg-zinc-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-white">search</span>
                    </button>
                    <a href="/mi-cuenta" class="p-2 hover:bg-zinc-800 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-white">person</span>
                    </a>
                    <a href="/cart"
                        class="relative p-2 bg-primary text-black rounded-lg hover:scale-105 transition-all">
                        <span class="material-symbols-outlined font-bold">shopping_cart</span>
                        <span
                            class="absolute -top-1 -right-1 bg-white text-black text-[10px] font-black w-4 h-4 flex items-center justify-center rounded-full border border-black">
                            <?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : '0'; ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>