<div class="bg-[var(--color-secondary)] h-[70px]">
    <div class="container mx-auto max-w-[1300px] px-6 h-full flex items-center justify-between">

        <a href="mailto:dominio@dominio.es" class="flex items-center gap-2 text-white text-[15px]">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Email.svg" class="w-4 h-4" alt="">
            <span>dominio@dominio.es</span>
        </a>

        <a href="tel:123456789"
           class="w-[152px] h-[45px] flex items-center justify-center gap-2
                  bg-white rounded-full text-[14px] font-bold tracking-[-0.112px]
                  text-[var(--color-primary)]">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Phone.svg" class="w-4 h-4" alt="">
            <span>123 456 789</span>
        </a>

    </div>
</div>


<nav class="absolute left-0 w-full h-[128px] z-30">
    <div class="h-full">
        <div class="container mx-auto max-w-[1300px] px-6 h-full flex items-center justify-end">
            <!-- Desktop Menu -->
            <div class="hidden lg:block">
                <?php wp_nav_menu([
                    'menu' => 'Menú',
                    'container' => false,
                    'fallback_cb' => false,
                    'menu_class' => 'flex justify-center gap-[30px] text-white text-[16px] font-semibold',
                ]); ?>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-white focus:outline-none p-2 relative z-50">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white absolute w-full left-0 top-0 shadow-lg z-40">
        <div class="container mx-auto px-6 pt-10 pb-6">
            <?php wp_nav_menu([
                'menu' => 'Menú',
                'container' => false,
                'fallback_cb' => false,
                'menu_class' => 'flex flex-col gap-4 text-[var(--color-primary)] text-[16px] font-semibold text-center',
            ]); ?>
        </div>
    </div>
</nav>

