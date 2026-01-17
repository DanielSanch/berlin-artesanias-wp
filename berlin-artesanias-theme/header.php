<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light">

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
                <!-- Logo -->
                <div class="flex items-center gap-2 group cursor-pointer"
                    onclick="window.location='https://experiencia.berlinartesanias.com/'">
                    <div
                        class="bg-primary p-1.5 rounded-lg text-black transform group-hover:rotate-12 transition-transform">
                        <svg class="size-6 sm:size-7" fill="none" viewbox="0 0 48 48"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M47.2426 24L24 47.2426L0.757355 24L24 0.757355L47.2426 24ZM12.2426 21H35.7574L24 9.24264L12.2426 21Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="text-lg sm:text-xl font-extrabold tracking-tighter uppercase">Berlin Artesanías</span>
                </div>
                <!-- Desktop Search -->
                <div class="hidden md:flex flex-1 max-w-md mx-8">
                    <div class="relative w-full">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">search</span>
                        <input
                            class="w-full bg-zinc-900 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary placeholder-gray-500"
                            placeholder="Busca tu estilo..." type="text" />
                    </div>
                </div>
                <!-- Navigation Links & Icons -->
                <div class="flex items-center gap-4 sm:gap-6">
                    <div class="hidden lg:flex items-center gap-6 text-sm font-bold uppercase tracking-tight">
                        <a class="hover:text-primary transition-colors" href="#">Medallones</a>
                        <a class="hover:text-primary transition-colors" href="#">Agendas</a>
                        <a class="hover:text-primary transition-colors" href="#">Custom</a>
                    </div>
                    <div class="flex items-center gap-2 sm:gap-4">
                        <button class="p-2 hover:bg-zinc-800 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-white">person</span>
                        </button>
                        <button class="relative p-2 bg-primary text-black rounded-lg hover:scale-105 transition-all">
                            <span class="material-symbols-outlined font-bold">shopping_cart</span>
                            <span
                                class="absolute -top-1 -right-1 bg-white text-black text-[10px] font-black w-4 h-4 flex items-center justify-center rounded-full border border-black">3</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>