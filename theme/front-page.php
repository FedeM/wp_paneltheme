<?php
/**
 * Front Page Template
 *
 * @package underscoretw
 */

get_header('theme');
get_template_part('template-parts/layout/header', 'theme');
?>

<main class="min-h-screen">
    <?php get_template_part('template-parts/layout/slider', 'content'); ?>

    <!-- ¿Por qué nuestro PANEL SÁNDWICH? -->
    <section class="py-24 bg-white">
        <div class="container mx-auto max-w-[1300px]">
            <!-- Título -->
            <div class="text-center mb-24">
                <h2 class="text-[var(--color-primary)] text-3xl md:text-4xl font-semibold mb-2">¿Por qué nuestro <span class="text-[var(--color-secondary)] relative inline-block">PANEL SÁNDWICH
                    <img src="<?php echo get_template_directory_uri(); ?>/images/vector_02.png" alt="" class="absolute -bottom-7 left-10 w-[270px] h-[25px]">
                </span>?</h2>
            </div>

            <!-- Box -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 md:gap-8 xl:gap-12 justify-items-center">
                <div class="bg-[var(--color-gray)] p-5 rounded-lg flex flex-row items-center gap-3 w-[312px] h-[129px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-atencion.svg" alt="Atención real y personalizada" class="w-16 h-16 flex-shrink-0">
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">Atención <br> real y personalizada</div>
                </div>

                <div class="bg-[var(--color-gray)] p-5 rounded-lg flex flex-row items-center gap-3 w-[312px] h-[129px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-asesoramiento.svg" alt="Asesoramiento técnico especializado" class="w-16 h-16 flex-shrink-0">
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">Asesoramiento <br> técnico especializado</div>
                </div>

                <div class="bg-[var(--color-gray)] p-5 rounded-lg flex flex-row items-center gap-3 w-[312px] h-[129px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-logistica.svg" alt="Logística eficiente y adaptable" class="w-16 h-16 flex-shrink-0">
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">Logística <br> eficiente y adaptable</div>
                </div>

                <div class="bg-[var(--color-gray)] p-5 rounded-lg flex flex-row items-center gap-3 w-[312px] h-[129px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-calidad.svg" alt="Compromiso con la calidad" class="w-16 h-16 flex-shrink-0">
                    <div class="text-[var(--color-primary)] text-base font-semibold leading-tight">Compromiso con la calidad</div>
                </div>
            </div>
        </div>
    </section>

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
</main>

<?php
get_footer('theme');