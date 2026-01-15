<div class="bg-[var(--color-secondary)] h-[70px]">
    <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-between">

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
        <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-end">
            <?php wp_nav_menu([
                'menu' => 'Menú',
                'container' => false,
                'fallback_cb' => false,
                'menu_class' => 'flex justify-center gap-[30px] text-white text-[16px] font-semibold',
            ]); ?>
        </div>
    </div>
</nav>

