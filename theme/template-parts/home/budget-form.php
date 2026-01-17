<?php
/**
 * Home: Pide PRESUPUESTO (Formulario)
 */
?>
<!-- Pide Presupuesto -->
<section id="contacto" class="pt-24 bg-[var(--color-gray-dark)]">
    <div class="container mx-auto max-w-[1300px]">
        <!-- Título -->
        <div class="text-center mb-24">
            <h2 class="text-[var(--color-primary)] text-3xl md:text-4xl font-semibold mb-2">Pide <span class="text-[var(--color-secondary)] relative inline-block">PRESUPUESTO
                <img src="<?php echo get_template_directory_uri(); ?>/images/vector_02.png" alt="" class="absolute -bottom-7 w-[270px] h-[25px]">
            </span></h2>
        </div>

        <!-- Formulario -->
        <?php echo do_shortcode('[contact-form-7 id="4f15697" title="Formulario de contacto 1"]'); ?>
    </div>
</section>
