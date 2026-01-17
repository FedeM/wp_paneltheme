<?php
/**
 * Home: PANEL SÁNDWICH para tu proyecto (loop de productos)
 */
?>
<!-- PANEL SÁNDWICH -->
<section class="py-24 bg-[var(--color-gray)]">
    <div class="container mx-auto max-w-[1300px]">
        <!-- Título -->
        <div class="text-center mb-24">
            <h2 class="text-[var(--color-primary)] text-3xl md:text-4xl font-semibold mb-2"><span class="text-[var(--color-secondary)] relative inline-block">PANEL SÁNDWICH</span> para tu proyecto</h2>
        </div>

        <!-- Paneles -->
        <div>
            <?php echo do_shortcode('[pt_paneles]'); ?>
        </div>
    </div>
</section>
